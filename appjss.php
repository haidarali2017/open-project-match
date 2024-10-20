 
<script> 
const getContinents = async () => {
  try {
    const showdata = document.querySelector("#show-data");
    let html = "";  

    const res = await fetch("php/get-continents.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });

    const output = await res.json();  

    if (output.length === 0) { 
      html = "<div>Record Not Found</div>";
    } else { 
      output.forEach((continent) => {
        html += `
            <span class="color-97bf3a-border-97bf3a-background-bubble bubble-padding italic-bold justify margin-top-bottom margin-left-right to-3e9721-border-3e9721-background"
                  onclick="retrieveLocations('${continent.code}','${continent.name}');">
              ${continent.name}
              <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"/>
            </span>
          `;
      });
    }

    showdata.innerHTML = html;  
  } catch (error) {
    console.log("error " + error);  
  }
};

getContinents();
 
const retrieveLocations = async (id, name) => {
 
  const showdata = document.querySelector("#show-data");
  const titleShow = document.getElementById("title-show");  
  let html = "";
  let titlehtml = ""; 
 
  const res = await fetch(`php/get-countries.php?id=${id}`, {
    method: "GET",
    headers: { "Content-Type": "application/json" },
  });
 
  if (!res.ok) {
    console.error("Error fetching countries:", res.statusText);
    return;  
  }

  const output = await res.json();  
  if (!Array.isArray(output)) {
    console.error("Expected an array but received:", output);
    html = "<div>Record Not Found</div>";
  } else { 
    if (output.length === 0) {
      html = "<div>Record Not Found</div>";
    } else { 
      titlehtml = `
        <span class="black-border-black-background-bubble bubble-padding italic-bold justify margin-top-bottom">
          ${name}
        </span>
      `;
 
      output.forEach((continent) => {
        html += `
          <span class="color-97bf3a-border-97bf3a-background-bubble bubble-padding italic-bold justify margin-top-bottom margin-left-right to-3e9721-border-3e9721-background"
                onclick="retrieveCities('${continent.name}')">
            ${continent.name} (369 cities)
            <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"/>
          </span>
        `;
       
      });
    }
  }
 
  showdata.innerHTML = html; 
  if (titleShow) {
    titleShow.innerHTML = titlehtml;
  } else {
    console.error('Element with id "title-show" not found');
  }
};

 
  
let currentPage = 0;
let isLoading = false;  
 
const retrieveCities = async (countryName, limit = 7) => { 
   document.querySelector("#show-data").innerHTML = ``; 
   scroolRun(countryName);
  const showdata = document.querySelector("#show-data-city");

  const loadingIndicator = document.getElementById("loading-indicator");
 
  const showcountrytitle = document.getElementById("title-show");
  let chtml = ``; 
  if (isLoading) return; 
  loadingIndicator.style.display = "block";
  isLoading = true;

  try { 
    const res = await fetch(`php/get-cities.php?id=${countryName}&page=${currentPage}&limit=${limit}`, {
      method: "GET",
      headers: { "Content-Type": "application/json" },
    });

    const output = await res.json();  
    countryTitlehtml = `
        <div class="black-border-black-background-bubble bubble-padding italic-bold justify margin-top-bottom">
          ${countryName}
        </div>
      `;
    
    if (Array.isArray(output) && output.length > 0) { 
      let i= 1;
      output.forEach((value) => {
        chtml += `
          <div class="imageone" >
            <div class="imagetwo" style="background-image: url('assets/img/German_Cities/${value.city_ascii}.png');"></div>
            <div style="display: inline-block">
              <table >
                <tbody>
                  <tr>
                    <td >
                      <div onclick="showcontent(${value.id})"  class="corporate-sub-menu-system-97bf3a-top to-97bf3a-border-97bf3a-background bubble-padding imageheight"
                      >
                        ${value.city}
                        <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG" />
                      </div>
                      <div  id="hidden_content_one_${value.id}"  onclick="window.open('https://${value.city.toLowerCase()}.meeting-and-classroom.global-vision.world/', '_blank');"
                        class="corporate-sub-menu-system-97bf3a-sub bubble-padding"
                        style="display: none"
                      >
                        Classroom<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG" />
                      </div>
                        <div  id="hidden_content_two_${value.id}" 
                          onclick="window.open('https://${value.city.toLowerCase()}-guest.meeting-and-classroom.global-vision.world/', '_blank');"
                          class="corporate-sub-menu-system-97bf3a-sub bubble-padding"
                          style="display: none"
                        >
                        Guest classroom<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG" />
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        `;
      
      });

      showdata.innerHTML += chtml;   
      loadingIndicator.style.display = "none"; 
      currentPage++; 
      isLoading = false;
    } else { 
      loadingIndicator.style.display = "none";
      isLoading = false;
    }

    if(countryTitlehtml) {
      showcountrytitle.innerHTML = countryTitlehtml;
    } else {
      console.error('Element with id "title-show" not found');
    }
  } catch (error) {
    console.error('Error fetching cities:', error);
    loadingIndicator.style.display = "none";
    isLoading = false;
  }
};

const scroolRun = (value) =>{
   console.log(value); 
    window.addEventListener('scroll', () => { 
      if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) { 
        retrieveCities(value, 7);  
      }
    });
}
 


  const searchInput = document.getElementById('searchInput');
    const voiceButton = document.getElementById('voiceButton'); 
    if ('webkitSpeechRecognition' in window) {
      const recognition = new webkitSpeechRecognition();
      recognition.continuous = false;
      recognition.interimResults = false;
      recognition.lang = 'en-US';  

      voiceButton.addEventListener('click', () => {
        recognition.start(); 
      });

      recognition.onresult = (event) => {
        const transcript = event.results[0][0].transcript;
        searchInput.value = transcript;  
        searchCity(transcript);  
      };

      recognition.onerror = (event) => {
        console.error('Speech recognition error:', event.error);
      };
    } else {
      alert("Your browser does not support voice recognition.");
    }

    function searchCity(query) {
      if (query) {
          fetch(`php/search.php?query=${encodeURIComponent(query)}`)
              .then(response => response.json())
              .then(data => {
                  let html = '';  
                  data.forEach((value) => {
                      html += ` 
                          <div class="imageone" >
                            <div class="imagetwo" style="background-image: url('assets/img/German_Cities/${value.city_ascii}.png');"></div>
                            <div style="display: inline-block">
                              <table style="display: initial">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div onclick="showcontent(${value.id})"   class="corporate-sub-menu-system-97bf3a-top to-97bf3a-border-97bf3a-background bubble-padding imageheight"
                                      >
                                        ${value.city}
                                        <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG" />
                                      </div>
                                      <div id="hidden_content_one_${value.id}" 
                                        onclick="window.open('https://${value.city.toLowerCase()}.meeting-and-classroom.global-vision.world/', '_blank');"
                                        class="corporate-sub-menu-system-97bf3a-sub bubble-padding"
                                        style="display: none"
                                      >
                                        Classroom<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG" />
                                      </div>
                                      <div   id="hidden_content_two_${value.id}"   onclick="window.open('https://${value.city.toLowerCase()}-guest.meeting-and-classroom.global-vision.world/', '_blank');"
                                        class="corporate-sub-menu-system-97bf3a-sub bubble-padding"
                                        style="display: none">
                                        Guest classroom<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG" />
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>

                      `;
                  });

                  const showdata = document.querySelector("#show-data");
                  document.querySelector("#show-data-city").innerHTML ='';
                  showdata.innerHTML = html; 
              })
              .catch(error => {
                  console.error('Error:', error);
              });
      }
  }

     document.getElementById("searchInput").addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            const query = this.value.trim(); 
            searchCity(query);
        }
    });

  function showcontent(id) {
    const hiddenContentOne = document.getElementById(`hidden_content_one_${id}`);
    const hiddenContentTwo = document.getElementById(`hidden_content_two_${id}`);

    if (hiddenContentOne.style.display === "none") {
        hiddenContentOne.style.display = "block"; 
        hiddenContentTwo.style.display = "block";
    } else {
        hiddenContentOne.style.display = "none"; 
        hiddenContentTwo.style.display = "none";
    }
}

 
</script>
 

<style>
  .imageone{
    display: inline-block;
    background: #ffffff;
    border-radius: 28px;
    width: calc(183px + 3mm + 3mm);
    padding: 3mm 3mm 3mm 3mm;
    margin: 3mm 3mm 3mm 3mm;
  }
  .imagetwo{
    height: 103px;
    width: 183px;
    border-radius: 28px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;   
    margin-bottom: calc(3mm - 1px);
  }
  .imageheight{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 183px;
  }
</style>


<style>
  .search-container {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .search-input {
    border: none;
    padding: 15px 20px;
    font-size: 16px;
    outline: none;
    flex: 1;
  }

  .voice-button {
    background-color: #fff;
    border: none;
    padding: 14px 15px;
    color: white;
    cursor: pointer;
    border-radius: 0 25px 25px 0;
    transition: background-color 0.3s;
  }

 
 
</style>
