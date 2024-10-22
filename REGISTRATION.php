<!DOCTYPE html>
<html>
  <head>
    <title>Global Vision</title>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta name="keywords" content="Global Vision" />
    <meta name="description" content="Global Vision" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0"
    />
    <link
      href="https://global-vision.world/img/RainbowGlobalVisionTransparentFavicon_rcsckh.avif"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/root.css" rel="stylesheet" type="text/css" /> 

    <link
      href="https://global-vision.world/css/server_ONLY_FOR_LOGIN_07.15.2020.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://global-vision.world/css/server-sandbox.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="https://global-vision.world/css/global-vision-switch_version_2.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="https://global-vision.world/css/form_final.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://global-vision.world/css/global-vision-corporate.css"
      media="all"
    />
   
    <script
      type="text/javascript"
      src="https://global-vision.world/js/server-default.js"
    ></script>

    
    <style>
      .white_box form .table-lifetime {
        padding: 0mm 0mm 0mm 0mm;
        margin: 0cm 0cm 0cm 0cm;
        border: 2px solid #d3d3d3;
        -webkit-border-radius: 28px;
        -moz-border-radius: 28px;
        border-radius: 28px;
      }
    </style>
  </head>
  <body>
    <div id="successMessage" style="display:none; position: fixed; top: 20px; right: 20px; background-color: #dff0d8; color: #3c763d; padding: 15px; border-radius: 5px; z-index: 1000;">
      Registration successful!
    </div>

    <div>
      <div id="fullscreenId">
         

        <div class="signup bounceInUp animated">
          <div
            class="columnsTitle"
            style="text-align: center; padding-top: 20px"
          >
            <span
              class="white-border-white-background-bubble bubble-padding italic-bold justify"
              style="color: #15BB39; text-transform: capitalize"
              >REGISTRATION<span>
          </div>
       
          <div class="signupContainer white_box" id="signupContainerId">
            <form 
              class="no-border-white-background-bubble max-width-static-minimal bubble-5mm-padding"
              method="post"
              enctype="multipart/form-data"
              id="registration_form"
              name="registration_form"
              action=""
            >
              <table id="formTable" class="italic-bold">
                <tr>
                  <td>
                    <span
                      class="no-border-3e9721-background-bubble bubble-13px-important-padding"
                      ><strong
                        >Please enter your details below to register.</strong
                      ></span
                    >
                  </td>
                </tr>

                <tr>
                  <td>
                    <textarea
                      class="red"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      rows="1"
                      name="email"
                      id="email"
                      placeholder="Email*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="txtHint"></tr>
                <tr id="confirmEmailTr" style="display: table-row">
                  <td>
                    <textarea
                      class="red"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      rows="1"
                      name="confirmemail"
                      id="confirmemail"                      
                      placeholder="Confirm email*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="txtHint">
                  <td>
                    <span style="color: red">Email is already registered.</span>
                  </td>
                </tr>
                <tr id="buttonForTxtHint">
                  <td>
                    <a
                      onclick="window.open('https://global-vision.world/registration/loginpay.php?code=PGS', '_self');"
                      style="text-decoration: none"
                    >
                      <span
                        class="no-border-c2d223-background-bubble to-no-border-black-background bubble-13px-important-padding word-break-all"
                        ><strong>Log in to buy now.</strong></span
                      >
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <textarea
                      class="red"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      rows="1"
                      name="firstname"
                      id="firstname"
                      placeholder="First name*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr>
                  <td> 
                    <textarea
                      class="red"
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="surname"
                      id="surname"
                      placeholder="Last name*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr> 
                <tr>
                 <td> 
 
                    <link
                      rel="stylesheet"
                      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
                    />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
              
                  
                  <div>                   
                        <input id="mobile" type="tel" name="solution_provider_mobile" />
                  </div>
                  <style> 
                      #mobile {
                        padding-top: 6px;
                        padding-bottom: 6px;
                        border: 2px solid #ccc;
                        border-radius: 20px;
                        height: 45px;
 
                      } 
                      .myAlert { 
                          top: 30%; 
                      }
                  </style> 
                  <script> 
                 

                    const phoneInputField = document.querySelector("#mobile");
                      const phoneInput = window.intlTelInput(phoneInputField, {
                        utilsScript:
                          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                      });
  
                  </script>

                 </td>                
                </tr>
                <tr>
                  <td>
                      <table
                        class="table-lifetime italic-bold"
                        style="table-layout: fixed"
                      >
                      <tbody>
                        <tr>
                          <td colspan="3">
                            <span
                              class="no-border-97bf3a-background-bubble bubble-13px-important-padding"
                              ><strong>Are you open project uploader?</strong></span
                            >
                          </td>
                        </tr>
                        <tr>
                          <td>NO</td>
                          <td>
                            <div
                              class="onoffswitch"
                              style="
                                display: inline-block;
                                vertical-align: middle;
                                left: -7.5px;
                              "
                            >
                              <input
                                class="onoffswitch-checkbox"
                                id="checkboxInvoice"
                                type="checkbox"
                                name="is_project_uploader"
                                onclick="needInvoice(this);"
                              />
                              <label
                                class="onoffswitch-label"
                                for="checkboxInvoice"
                              >
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                              </label>
                            </div>
                          </td>
                          <td style="text-align: left">YES</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr id="companyNameTR" style="display: none">
                  <td class="myinput">
                    <textarea
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="companyname"
                      id="companyname"
                      placeholder="Company name"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>

                <tr id="titleTR" style="display: none">
                  <td>
                    <style>
                      .custom-drop-down-div {
                        cursor: pointer;
                        margin-left: -13px;
                        margin-right: -13px;
                        padding-left: 13px;
                        padding-right: 13px;
                        padding-top: 5px;
                        padding-bottom: 5px;
                      }
                      .custom-drop-down-div:hover {
                        background: #000000;
                        color: #ffffff;
                      }
                    </style>

                    <input
                      type="text"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                      id="title"
                      name="title"
                      placeholder="Title"
                      value=""
                      readonly
                      onClick="customDropDownTitleArray(this);"
                      style="
                        height: 45px !important;
                        font-size: 16px;
                        cursor: pointer;
                        background-image: url('https://global-vision.world/img/dropdown.png');
                        background-repeat: no-repeat;
                        background-position: right;
                        background-size: 32px, 32px;
                      "
                    />

                    <script type="text/javascript">
                      function getScroll(obj) {
                        var supportPageOffset =
                          window.pageXOffset !== undefined;
                        var isCSS1Compat =
                          (document.compatMode || "") === "CSS1Compat";
                        obj.x = supportPageOffset
                          ? window.pageXOffset
                          : isCSS1Compat
                          ? document.documentElement.scrollLeft
                          : document.body.scrollLeft;
                        obj.y = supportPageOffset
                          ? window.pageYOffset
                          : isCSS1Compat
                          ? document.documentElement.scrollTop
                          : document.body.scrollTop;
                      }

                      function insertCustomDropDownTitle(root) {
                        document.getElementById("title").value = root.innerHTML;
                      }

                      function customDropDownTitleArray(root) {
                        if (document.getElementById("customDropDownTitle")) {
                          var div = document.getElementById(
                            "customDropDownTitle"
                          );
                          div.remove();
                        } else {
                          var obj = { x: 0, y: 0 };
                          getScroll(obj);
                          var left = root.getBoundingClientRect().left;
                          var top = root.getBoundingClientRect().bottom;
                          var width = root.getBoundingClientRect().width;
                          const newDiv = document.createElement("div");
                          newDiv.innerHTML =
                            '<div id="customDropDownTitle" style="z-index:1000;text-align:center;width:' +
                            width +
                            "px;font-size:16px;display:block;background:#ffffff;border: 2px solid #d3d3d3;-webkit-border-radius:28;-moz-border-radius:28;border-radius:28px;padding:10px 20px 10px 20px;position:absolute;top:" +
                            (top + obj.y - 2) +
                            "px;left:" +
                            left +
                            'px;"><div class="custom-drop-down-div" onclick="insertCustomDropDownTitle(this);">Mr.</div><div class="custom-drop-down-div" onclick="insertCustomDropDownTitle(this);">Ms.</div><div class="custom-drop-down-div" onclick="insertCustomDropDownTitle(this);">Mrs.</div><div class="custom-drop-down-div" onclick="insertCustomDropDownTitle(this);">Miss</div><div class="custom-drop-down-div" onclick="insertCustomDropDownTitle(this);">Dr.</div><div class="custom-drop-down-div" onclick="insertCustomDropDownTitle(this);">Prof.</div></div>';
                          document.body.appendChild(newDiv);

                          window.addEventListener(
                            "resize",
                            function (event) {
                              if (
                                document.getElementById("customDropDownTitle")
                              ) {
                                var obj = { x: 0, y: 0 };
                                getScroll(obj);
                                var left = root.getBoundingClientRect().left;
                                var top = root.getBoundingClientRect().bottom;
                                var width = root.getBoundingClientRect().width;
                                document.getElementById(
                                  "customDropDownTitle"
                                ).style.left = left + "px";
                                document.getElementById(
                                  "customDropDownTitle"
                                ).style.top = top + obj.y - 2 + "px";
                                document.getElementById(
                                  "customDropDownTitle"
                                ).style.width = width + "px";
                              }
                            },
                            false
                          );

                          document.addEventListener(
                            "click",
                            function (e) {
                              if (
                                e.target.id != "customDropDownTitle" &&
                                e.target.id != "title"
                              ) {
                                customDropDownTitleArray(
                                  document.getElementById("customDropDownTitle")
                                );
                              }
                            },
                            false
                          );
                        }
                      }
                    </script>
                  </td>
                </tr>
                <tr id="streetTR" style="display: none">
                  <td> 
                    <textarea
                      class="red"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      rows="1"
                      name="street"
                      id="street"
                      placeholder="Street*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="houseNumberTR" style="display: none">
                  <td> 
                    <textarea
                      class="red"
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="housenumber"
                      id="housenumber"
                      placeholder="House number*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="zipCodeTR" style="display: none">
                  <td> 
                    <textarea
                      class="red"
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="zipcode"
                      id="zipcode"
                      placeholder="ZIP code*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="cityTR" style="display: none">
                  <td> 
                    <textarea
                      class="red"
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="city"
                      id="city"
                      placeholder="City*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="countryTR" style="display: none">
                  <td>
                    <textarea
                      class="red"
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="country"
                      id="country"
                      placeholder="Country*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="telephoneTR" style="display: none">
                  <td> 
                    <textarea
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="telephone"
                      id="telephone"
                      placeholder="Telephone"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="cellphoneTR" style="display: none">
                  <td> 
                    <textarea
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="cellphone"
                      id="cellphone"
                      placeholder="Cell phone"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>
                <tr id="faxTR" style="display: none">
                  <td> 
                    <textarea
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="fax"
                      id="fax"
                      placeholder="Fax"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
                  </td>
                </tr>

                   <tr id="invoice" style="display: none">
                   
                </tr>
                <tr>
                  <td> 
                    <a href="#" onclick="validateAndSubmitForm(event);emailEcheckExit(event);" style="text-decoration:none;">
                      <span class="no-border-c2d223-background-bubble to-no-border-black-background bubble-13px-important-padding word-break-all custom-background">
                        <strong>
                          Submit
                          <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg"> 
                        </strong>
                      </span>
                    </a>
                  </td>
                </tr>
              </table>
 
          
            </form>
            <style>
              .myAlert { 
                top: 25%; 
            }
            </style>
               <div id="myAlertId" style="display: none;"> <!-- Initially hidden -->
                  <div class="myAlert fadeInUp animated">
                      <div class="myAlertContainer white_box">
                          <form class="no-border-white-background-bubble max-width-static-minimal bubble-5mm-padding">
                              <table class="italic-bold">
                                  <tbody>
                                      <tr>
                                          <td id="message_data_show" style="width:205px;">
                                             
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <span id="showMyAlertOkButton" class="custom-sub-menu-top-drop-down-simple-title-padding-div" onclick="removeMyAlert();">OK
                                                  <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowBlackActiveBorderlessSVG.svg">
                                                  <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG">
                                              </span>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </form>
                      </div>
                  </div>
          </div>
            <script>

          function validateEmail(email) {
            // Basic email validation regex
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
          }

          function validateAndSubmitForm(event) {
            event.preventDefault(); // Prevent default form submission

            const email = document.getElementById('email').value.trim();
            const confirmemail = document.getElementById('confirmemail').value.trim(); 
            const firstname = document.getElementById('firstname').value.trim();
            const surname = document.getElementById('surname').value.trim();

            if (email === '') {
              // Show alert if email is empty
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>All mandatory fields <br> must be filled.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html; 
              

            }else if (!validateEmail(email)) {
              // Show alert if email is not valid
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>Email not valid.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html;

            }else if (confirmemail === '') {
              // Show alert if email and confirm email do not match
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>All mandatory fields <br> must be filled.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html;

            }else if (!validateEmail(confirmemail)) {
              // Show alert if email is not valid
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>Email not valid.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html;

            }else if (email !== confirmemail) {
              // Show alert if email and confirm email do not match
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>Email check mismatched.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html;

            
            }else if (firstname === '') {
              // Show alert if email and confirm email do not match
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>All mandatory fields <br> must be filled.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html;

            }else if (surname  === '') {
              // Show alert if email and confirm email do not match
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>All mandatory fields <br> must be filled.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html;

            }else {
              // Email is valid and matches, submit form (replace this with actual form submission logic)
              submitFormData();
            }
          }

          function emailEcheckExit(event) {
            event.preventDefault(); // Prevent default form submission

            const email = document.getElementById('email').value.trim();

            if (email === '') {
              // Show alert if email is empty
              document.getElementById('myAlertId').style.display = 'block';
              let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>All mandatory fields <br> must be filled.</strong>
                </span>
              `;
              document.getElementById('message_data_show').innerHTML = html; 
              return false;
            }

            // Send an AJAX request to check if the email exists
            const formData = new FormData();
            formData.append('email', email);

            fetch('php/check_email.php', {
              method: 'POST',
              body: formData
            })
            .then(response => response.json())
            .then(data => {
              document.getElementById('myAlertId').style.display = 'block';
              
              if (data.status === 'error') {
                let html = `
                <span class="no-border-3e9721-background-bubble bubble-4mm-important-padding">
                  <strong>${data.message}</strong>
                </span>
              `;
                document.getElementById('message_data_show').innerHTML = html;
              }
            })
            .catch(error => {
              console.error('Error:', error);
            });

            return false;
          }
 

            // Function to hide the alert
            function removeMyAlert() {
              document.getElementById('myAlertId').style.display = 'none';
            }

              // genarate random password by SR
              function generateRandomPassword(length = 12) {
                  const lowerChars = 'abcdefghijklmnopqrstuvwxyz';
                  const upperChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                  const numbers = '0123456789';
                  const specialChars = '!@#$%^&*()_+{}[]<>?,.';
                  
                  const allChars = lowerChars + upperChars + numbers + specialChars;
                  let password = '';

                  // Ensure at least one character from each set is included
                  password += lowerChars[Math.floor(Math.random() * lowerChars.length)];
                  password += upperChars[Math.floor(Math.random() * upperChars.length)];
                  password += numbers[Math.floor(Math.random() * numbers.length)];
                  password += specialChars[Math.floor(Math.random() * specialChars.length)];

                  // Fill the rest of the password length with random characters
                  for (let i = 4; i < length; i++) {
                      password += allChars[Math.floor(Math.random() * allChars.length)];
                  }

                  // Shuffle the password to randomize its characters
                  return password.split('').sort(() => 0.5 - Math.random()).join('');
              }
              function popupAlertOpen() {
                  document.getElementById('myAlertId').style.display = 'block';
              } 
              function submitFormData() 
              {
                // Create an empty FormData object
                var formData = new FormData(document.getElementById("registration_form"));

                // Generate a random password
                var randomPassword = generateRandomPassword(12);
                formData.append('password', randomPassword); // Append the random password to the form data

                // Check if the checkbox is checked
                var isProjectUploader = document.getElementById("checkboxInvoice").checked;

                // Set userType based on the checkbox state
                var userType = isProjectUploader ? 'open project' : 'solution provider';
                
                // Append the userType to the FormData object
                formData.append('userType', userType);

                // Log form data for debugging
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }

                // Send the data via AJAX (without page reload)
                fetch("php/submit_form.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Display success message
                        var successMessageDiv = document.getElementById("successMessage");
                        successMessageDiv.style.display = "block"; 
                        setTimeout(function() {
                            successMessageDiv.style.display = "none"; 
                            // window.location.href = "http://localhost/open-project-match/LOGIN.php"; 
                        }, 2000); 
                        document.getElementById('myAlertId').style.display = 'none';
                    } else {
                        alert("Submission failed: " + data.message); 
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });
              }

            </script>


          </div>
        </div>
      </div> 

      <div
        id="calendar-container"
        style="
          position: absolute;
          top: 0px;
          left: 50%;
          transform: translate(-50%, 0);
          display: none;
          width: min-content;
          padding: 18px 10px 18px 10px;
          background-color: #ffffff;
          border: 2px solid #d3d3d3;
          border-radius: 28px;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
        "
      >
        <table style="width: 100%; margin-bottom: 10px">
          <tr>
            <td style="text-align: left">
              <img
                class="bordered naviconhover"
                style="height: 45px !important"
                src="https://course-list.global-vision.world/img/LeftArrowSVG.svg"
                onClick="backwardCalendar();"
              />
            </td>
            <td
              style="
                text-align: center;
                font-weight: bold;
                padding: 11px 16px 11px 14px !important;
              "
              id="calendar-month-container"
              class="bordered"
            ></td>
            <td style="text-align: right">
              <img
                class="bordered naviconhover"
                style="height: 45px !important"
                src="https://course-list.global-vision.world/img/RightArrowSVG.svg"
                onClick="forwardCalendar();"
              />
            </td>
          </tr>
        </table>
        <table style="width: 100%">
          <tr>
            <td style="padding: 0px 0px 0px 0px">
              <table
                class="day_container_table"
                style="
                  width: 100%;
                  table-layout: fixed;
                  width: 100%;
                  table-layout: fixed;
                  display: table;
                  padding: 0px;
                  margin: 0px;
                  text-align: center;
                "
              >
                <tr>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    Su
                  </td>
                  <td>&nbsp;</td>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    Mo
                  </td>
                  <td>&nbsp;</td>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    Tu
                  </td>
                  <td>&nbsp;</td>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    We
                  </td>
                  <td>&nbsp;</td>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    Th
                  </td>
                  <td>&nbsp;</td>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    Fr
                  </td>
                  <td>&nbsp;</td>
                  <td
                    class="bordered-3e9721"
                    style="
                      width: 45px;
                      height: 45px !important;
                      color: #ffffff;
                      background-color: #3e9721;
                    "
                  >
                    Sa
                  </td>
                </tr>
              </table>
              <!--
<table style="width:100%;table-layout:fixed;width:100%;table-layout:fixed;display:table;padding:0px;margin:0px;text-align:center;">
<tr><td><span class="non_bordered_span">Su</span></td><td><span class="non_bordered_span">Mo</span></td><td><span class="non_bordered_span">Tu</span></td><td><span class="non_bordered_span">We</span></td><td><span class="non_bordered_span">Th</span></td><td><span class="non_bordered_span">Fr</span></td><td><span class="non_bordered_span">Sa</span></td></tr>
</table>
-->
            </td>
          </tr>
        </table>
        <table style="width: 100%" id="calendar-day-container"></table>
      </div>

      <style>
        .corporateWhiteBubbleBlackLink,
        .corporateWhiteBubbleTransparentLink {
          line-height: unset !important;
        }
      </style>
      <div
        style="max-content;position:fixed;bottom:15px;right:15px;display:none;z-index:2000;"
        id="cookieAlert"
      >
        <div class="bounceInRight animated">
          <div
            style="
              padding: 13px 13px;
              color: #ffffff;
              font-size: 16px !important;
              font-style: italic;
              background-color: #97bf3a;
              -webkit-border-radius: 28;
              -moz-border-radius: 28;
              border-radius: 28px;
            "
          >
            <div
              style="
                font-family: 'Roboto Condensed';
                font-weight: 700;
                padding-bottom: 10px;
                text-align: center;
              "
            >
              Cookie Use
            </div>
            <div
              style="
                font-family: 'Roboto Condensed';
                font-weight: 700;
                padding-bottom: 10px;
                text-align: center;
                text-align-last: center;
              "
            >
              We use cookies to ensure a<br />
              smooth browsing experience.<br />
              By continuing we assume you<br />
              accept the use of cookies.
            </div>
            <div style="text-align: center">
              <a
                href="JavaScript:void(0);"
                class="corporateWhiteBubbleBlackLink"
                data-logname="BUTTON::cookie-1"
                onClick="cookieNotificationId.style.display='block';"
              >
                Learn more<img
                  class="svg-right-navigator"
                  src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg"
                  alt="Right Arrow SVG"
                />
              </a>
              <div
                class="corporateWhiteBubbleTransparentLink"
                data-logname="BUTTON::cookie-2"
                onClick="acceptCookie();"
              >
                Accept<img
                  class="svg-right-navigator"
                  src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg"
                  alt="Right Arrow SVG"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <script
        type="text/javascript"
        src="https://global-vision.world/js/cookie.js"
      ></script>

      <div id="cookieNotificationId">
        <div class="cookieNotificationContainer">
          <!--
<div class="white-border-white-background-bubble bubble-padding italic-bold justify margin-top-bottom">
-->
          <div
            class="cookieNotificationClose"
            data-logname="BUTTON::cookie-3"
            onClick="cookieNotificationId.style.display='none';"
          >
            ×
          </div>
        </div>
      </div>

      <style>
        * {
          -webkit-transition: none !important;
          -moz-transition: none !important;
          -o-transition: none !important;
          transition: none !important;
        }
        #menu-navigator-payment {
          height: 45px;
          width: 45px;
          position: fixed;
          /* left: calc(100vw - 110px); */
          left: 20px;
          top: 20px;
          border: 2px solid #ffffff;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          cursor: pointer;
          z-index: 1000;
          background: url(https://global-vision.world/img/RainbowGlobalVisionTransparentFavicon_rcsckh.avif);
          background-size: contain;
          border: 0px;
        }

        .bordered {
          border: 2px solid #ffffff;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          font-family: "Roboto Condensed";
          color: #000000;
          font-size: 16px;
          height: 45px !important;
          min-width: 45px !important;
          text-align: center;
          vertical-align: middle;
        }
        .navicon:hover {
          border: 2px solid #000000 !important;
          background-color: #000000;
        }
        .navicon:hover {
          filter: brightness(10);
        }
      </style>
      <div id="menu-navigator-payment">
        <!-- <img data-logname="MENU::hamburger-1::HAMBURGER" id="menu-navigator-img" src="https://course-list.global-vision.world/img/MenuActiveSVG.svg"> -->
      </div>
      <!--
<script type="text/javascript" src="https://sandbox.global-vision.world/js/menu-navigator.js"></script>
-->

      <script>
        var sneakPreview =
          "https://employee-growth-package-all-17-topics.global-vision.world/contents.php?blur=yes";
      </script>
      <style>
        * {
          -webkit-overflow-scrolling: touch;
          -webkit-text-size-adjust: none;
          text-size-adjust: none;
        }

        .testimonialsSubPageTitle {
          max-width: unset;
        }
        .button-sub-menu-main {
          margin-top: -10px;
        }
        .button-sub-menu-item {
          margin-top: -10px;
        }
        .no-border-transparent-background-bubble {
          color: #000000;
          border: 0px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          width: max-content;
          min-height: 32px !important;
          margin-left: auto;
          margin-right: auto;
          margin-top: 0px;
          margin-bottom: 0px;
          display: inline-block;
        }
        .no-border-white-background-bubble {
          color: #000000;
          border: 0px solid #ffffff;
          background: #ffffff;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          width: max-content;
          min-height: 32px !important;
          margin-left: auto;
          margin-right: auto;
          margin-top: 0px;
          margin-bottom: 0px;
          display: inline-block;
        }
        .white-border-white-background-bubble {
          color: #000000;
          border: 2px solid #ffffff;
          background: #ffffff;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          width: max-content;
          min-height: 32px !important;
          margin-left: auto;
          margin-right: auto;
          margin-top: 0px;
          margin-bottom: 0px;
          display: inline-block;
        }
        .black-border-black-background-bubble {
          color: #ffffff;
          border: 2px solid #000000;
          background: #000000;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          width: max-content;
          min-height: 32px !important;
          margin-left: auto;
          margin-right: auto;
          margin-top: 0px;
          margin-bottom: 0px;
          display: inline-block;
        }
        .white-border-transparent-background-bubble {
          color: #ffffff;
          border: 2px solid #ffffff;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          width: max-content;
          min-height: 32px !important;
          margin-left: auto;
          margin-right: auto;
          margin-top: 0px;
          margin-bottom: 0px;
          display: inline-block;
        }
        .gray-border-transparent-background-bubble {
          color: #ffffff;
          border: 2px solid #d3d3d3;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          width: max-content;
          min-height: 32px !important;
          margin-left: auto;
          margin-right: auto;
          margin-top: 0px;
          margin-bottom: 0px;
          display: inline-block;
        }
        .gray-border-transparent-background-bubble img {
          padding-right: 0px;
          margin-right: -3px;
        }
        .gray-border-transparent-background-bubble img:last-child {
          display: none;
        }
        .gray-border-transparent-background-bubble:hover img:last-child {
          display: inline-block;
        }
        .gray-border-transparent-background-bubble:hover img:first-child {
          display: none;
        }
        .to-black-border-black-background:hover {
          cursor: pointer;
          color: #ffffff;
          border: 2px solid #000000;
          background: #000000;
        }
        .bubble-padding {
          /* padding: 7px 14px 7px 12px; */
          /* padding: 7px 14px 6px 12px; */
          padding: 11px 16px 11px 14px;
        }
        .bubble-padding-capital-letters {
          /* padding: 7px 14px 6px 12px; */
          padding: 11px 16px 11px 14px;
        }
        .block {
          display: block;
        }
        .justify {
          /* text-align: justify; */
          text-align: center;
          text-align-last: center;
        }
        .italic-bold {
          font-weight: bold;
          font-style: italic;
        }
        .margin-top-bottom {
          margin-top: 1mm;
          margin-bottom: 1mm;
        }
        .margin-left-right {
          margin-left: 1mm;
          margin-right: 1mm;
        }
        .margin-top-more-px-bottom {
          margin-top: 10px;
        }
        .margin-top-3px-bottom-7px {
          margin-top: 3px;
          margin-bottom: 7px;
        }
        .corporate-sub-menu-system-top {
          position: relative;
          top: 0px;
          left: 0px;
          display: block;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          min-height: 32px !important;
          border: 2px solid #d3d3d3;
          background: #ffffff;
          color: #000000;
          cursor: pointer;
          text-align: center;
          z-index: 5;
        }
        .corporate-sub-menu-system-top:hover {
          color: #ffffff !important;
          border: 2px solid #000000 !important;
          background: #000000 !important;
        }
        .corporate-sub-menu-system-sub {
          position: relative;
          top: 0px;
          left: 0px;
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          max-width: calc(
            100vw - 104px - 18px - 4mm
          ); /* E.g. VW=490px SVG=52px SVG=52px */
          min-height: 32px !important;
          border: 2px solid #d3d3d3;
          background: #ffffff;
          color: #000000;
          cursor: pointer;
          margin: -2px 0px 0px 0px;
          margin-left: auto;
          margin-right: auto;
          display: inline-block;
        }
        .corporate-sub-menu-system-sub:hover {
          border-color: #000000 !important;
          background: #000000 !important;
          color: #ffffff !important;
          z-index: 6;
        }
        .starsColumnsBorder {
          -webkit-border-radius: 28px;
          -moz-border-radius: 28px;
          border-radius: 28px;
          border: 2px solid #ffffff;
          padding: 11px 16px 11px 14px;
          margin: 11px 1mm 11px 1mm;
        }
        .starsColumnsContainer {
          top: calc(30px + 2cm);
        }
        .naviconcontainer:hover {
          border: 2px solid #000000 !important;
          background-color: #000000;
        }
        .navicon:hover {
          filter: brightness(10);
        }
        #reachSubMenuContainer {
          z-index: 1000;
          width: 100%;
          position: fixed;
          top: 0px;
          left: 0px;
          right: 0px;
          height: 100%;
          display: none;
          background: rgba(0, 0, 0, 0.9);
        }
        img {
          vertical-align: middle;
        }
        .button-sub-menu-item {
          margin-top: -2px !important;
        }
        @supports (-webkit-touch-callout: none) {
          .no-border-transparent-background-bubble {
            max-width: calc(
              100vw - 104px - 4mm
            ); /* E.g. VW=490px SVG=52px SVG=52px */
          }
          .no-border-white-background-bubble {
            max-width: calc(
              100vw - 104px - 4mm
            ); /* E.g. VW=490px SVG=52px SVG=52px */
          }
          .white-border-white-background-bubble {
            max-width: calc(
              100vw - 104px - 4mm
            ); /* E.g. VW=490px SVG=52px SVG=52px */
          }
          .black-border-black-background-bubble {
            max-width: calc(
              100vw - 104px - 4mm
            ); /* E.g. VW=490px SVG=52px SVG=52px */
          }
          .white-border-transparent-background-bubble {
            max-width: calc(
              100vw - 104px - 4mm
            ); /* E.g. VW=490px SVG=52px SVG=52px */
          }
          .gray-border-transparent-background-bubble {
            max-width: calc(
              100vw - 104px - 4mm
            ); /* E.g. VW=490px SVG=52px SVG=52px */
          }
          .justify {
            text-align: center;
          }
          .white_box form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
          }
          .white_box form input[type="button"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
          }
          .white_box form textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
          }
          * {
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
          }
        }
        .float-left {
          max-width: calc(100vw - 120px);
          margin-left: 70px;
        }
        @supports (-webkit-overflow-scrolling: touch) {
          /* iPhone */
          .float-left {
            max-width: calc(100vw - 100px);
            margin-left: 0px;
          }
        }
        @supports not (-webkit-touch-callout: none) {
          /* Android */
          .float-left {
            max-width: calc(100vw - 100px);
            left: 0px;
          }
          @media only screen and (min-width: 700px) {
            .float-left {
              max-width: calc(100vw - 120px);
            }
          }
          @media only screen and (max-width: 360px) {
            .float-left {
              max-width: calc(100vw - 100px);
            }
          }
        }
        /***********************************
 * GLOBAL OVERRIDING EVEN FOR iPHONE
 */
        .no-border-white-background-bubble {
          max-width: unset;
        }
        @supports not (-webkit-touch-callout: none) {
        }
        @media only screen and (max-width: 1280px) {
          form textarea {
            width: calc(100vw - 165px);
            max-width: 234px;
          }
        }
        @media only screen and (max-width: 960px) {
          form textarea {
            width: calc(100vw - 165px);
            max-width: 234px;
          }
        }
        .custom-br {
          display: none;
        }
        @media only screen and (max-width: 610px) {
          .custom-br {
            display: inline;
          }
        }
        * {
          -webkit-tap-highlight-color: transparent;
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
        input:focus,
        select:focus,
        textarea:focus,
        button:focus {
          outline: none;
        }
        #bubble_navigator {
          z-index: 999;
          position: fixed;
          top: 0px;
          left: -20px;
          right: 0px;
          height: 100%;
          width: calc(100vw + 20px);
          display: none;
          background: rgba(0, 0, 0, 0.9);
          overflow-y: auto;
          overflow-x: hidden;
        }
        .bubble_navigator {
          z-index: 1200;
          position: absolute;
          left: 30px; /* 50%; */
          /* top: calc(67px + 2mm); */
          top: 79px; /* 20px; */
          /* transform: translate(-50%, 0%); */
          /* max-width: calc(100vw - 18px); */
          text-align: center;
          width: 100%;
        }
        @supports (-webkit-overflow-scrolling: touch) {
          .bubble_navigator {
            left: 40px;
          }
        }
        @supports not (-webkit-touch-callout: none) {
          .bubble_navigator {
            left: 30px;
          }
        }
        .bubble-padding {
          padding: 11px 16px 11px 14px !important;
        }
        .margin-top-bottom {
          margin-left: 0.5mm !important;
          margin-right: 0.5mm !important;
        }
      </style>

    <div id="bubble_navigator" class="fadeIn animated">
      <div class="bubble_navigator">        
        <div class="white-border-white-background-bubble float-left bubble-padding italic-bold justify" style="margin-bottom:50px;">
            <div class="gray-border-transparent-background-bubble bubble-padding italic-bold justify margin-top-bottom to-black-border-black-background" style="color:#15BB39;font-style:italic; padding: 11px 10px 11px 8px;" onmouseover="this.style.color='#15BB39';" onmouseout="this.style.color='#15BB39';" data-logname="MENU::hamburger-1-1" onclick="navigateToNewTabWithRootAndAnchorAttributes('PROJECTS.php');">PROJECTS<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrow17BC3AActiveBorderlessSVG.svg"><img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"></div>
            <div class="gray-border-transparent-background-bubble bubble-padding italic-bold justify margin-top-bottom to-black-border-black-background" style="color:#d6720e;font-style:italic; padding: 11px 10px 11px 8px;" onmouseover="this.style.color='#ffffff';" onmouseout="this.style.color='#d6720e';" data-logname="MENU::hamburger-1-2" onclick="navigateToNewTabWithRootAndAnchorAttributes('OPEN-PROJECTS.php');">OPEN PROJECTS<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowD6720EActiveBorderlessSVG.svg"><img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"></div>
            <div class="gray-border-transparent-background-bubble bubble-padding italic-bold justify margin-top-bottom to-black-border-black-background" style="color:#b11820;font-style:italic; padding: 11px 10px 11px 8px;" onmouseover="this.style.color='#ffffff';" onmouseout="this.style.color='#b11820';" data-logname="MENU::hamburger-1-3" onclick="navigateToNewTabWithRootAndAnchorAttributes('SOLUTIONS-PROVIDERS.php');">SOLUTION PROVIDERS<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowB11820ActiveBorderlessSVG.svg"><img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"></div>
            <div class="gray-border-transparent-background-bubble bubble-padding italic-bold justify margin-top-bottom to-black-border-black-background" style="color:#6ab174;font-style:italic; padding: 11px 10px 11px 8px;" onmouseover="this.style.color='#ffffff';" onmouseout="this.style.color='#6ab174';" data-logname="MENU::hamburger-1-8" onclick="navigateToNewTabWithRootAndAnchorAttributes('REGISTRATION.php');">REGISTRATION<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrow6AB174ActiveBorderlessSVG.svg"><img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"></div>
            <div class="gray-border-transparent-background-bubble bubble-padding italic-bold justify margin-top-bottom to-black-border-black-background" style="color: rgb(0, 0, 0);font-style: italic;padding: 11px 10px 11px 8px;" onmouseover="this.style.color='#ffffff';" onmouseout="this.style.color='#000000';" onclick="window.open('LOGIN.php');">LOGIN<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowBlackActiveBorderlessSVG.svg"><img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"></div>
        </div>
      </div>
    </div>

      <script type="text/javascript">
        document.getElementById("menu-navigator-payment").addEventListener(
          "click",
          function () {
            console.log("menu-navigator-payment");
            if (
              document.getElementById("bubble_navigator") &&
              document.getElementById("bubble_navigator").style.display ==
                "none"
            ) {
              document.getElementById("bubble_navigator").style.display =
                "block";
            } else if (
              document.getElementById("bubble_navigator") &&
              document.getElementById("bubble_navigator").style.display ==
                "block"
            ) {
              document.getElementById("bubble_navigator").style.display =
                "none";
            } else {
              if (document.getElementById("bubble_navigator")) {
                document.getElementById("bubble_navigator").style.display =
                  "block";
              }
            }
          },
          false
        );
        if (document.getElementById("bubble_navigator")) {
          document.getElementById("bubble_navigator").addEventListener(
            "click",
            function () {
              console.log("buuble_navigator click");
              if (
                document.getElementById("bubble_navigator").style.display ==
                "none"
              ) {
                document.getElementById("bubble_navigator").style.display =
                  "block";
              } else if (
                document.getElementById("bubble_navigator").style.display ==
                "block"
              ) {
                document.getElementById("bubble_navigator").style.display =
                  "none";
              } else {
                document.getElementById("bubble_navigator").style.display =
                  "block";
              }
            },
            false
          );
        }

        /* Navigate to New Tab With Attributes of Target Root and Anchor in Page */
        function navigateToNewTabWithRootAndAnchorAttributes(
          targetRoot,
          target
        ) {
          targetRoot += "#" + target;
          window.open(targetRoot, "_blank").focus();
        }
        /* Navigate to New Tab With Attributes of Target Root and Attribute Value in Page */
        function navigateToNewTabWithRootAndAnchorSubpageAttributes(
          targetRoot,
          attrib,
          value
        ) {
          targetRoot += "?" + attrib + "=" + value;
          window.open(targetRoot, "_blank").focus();
        }
      </script>
      <head>
        <style>
          #fullscreenId {
  
            height: 1500px; 
        }
          .no-border-c2d223-background-bubble {
           
            border: 0px solid #15BB39;
            background: #15BB39; 
        }
          #svg-up-navigator {
            display: block;
            right: unset;
            bottom: unset;
            top: 176px;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-down-navigator {
            display: block;
            right: unset;
            bottom: unset;
            top: 218px;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-right-navigator {
            display: block;
            right: unset;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-left-navigator {
            display: none;
            right: unset;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-learn-right-navigator {
            display: none;
            right: unset;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-learn-left-navigator {
            display: none;
            right: unset;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-back-navigator {
            display: block;
            right: unset;
            bottom: unset;
            top: 270px;
            left: 35px;
            background-color: #97bf3a;
            border-color: #97bf3a;
          }
          #svg-close-navigator {
            display: block;
            height: 32px !important;
            width: 32px !important;
            position: fixed;
            background-color: #97bf3a;
            border: 2px solid #97bf3a;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            cursor: pointer;
            z-index: 1000;
            top: 365px;
            left: 35px;
          }
          /* OVERRIDE CSS */
          #menu-navigator-payment {
            height: 45px;
            width: 45px;
            top: 20px;
            left: 20px;
            animation-name: out;
            animation-duration: 0.7s;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
          }
          #menu-navigator-payment:hover {
            
            animation-name: in;
            animation-duration: 0.7s;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
          }
          @keyframes in {
            0% {
              height: 45px;
              top: 20px;
              width: 45px;
              left: 20px;
            }
            100% {
              height: 62px;
              top: 12px;
              width: 62px;
              left: 12px;
            }
          }
          @keyframes out {
            0% {
              height: 62px;
              top: 12px;
              width: 62px;
              left: 12px;
            }
            100% {
              height: 45px;
              top: 20px;
              width: 45px;
              left: 20px;
            }
          }
          #svg-close-navigator {
            left: 27px !important;
          }
          #svg-back-navigator {
            left: 27px !important;
          }
          #svg-down-navigator {
            left: 27px !important;
          }
          #svg-up-navigator {
            left: 27px !important;
          }
          #svg-right-navigator {
            left: 27px !important;
          }
          #svg-left-navigator {
            left: 27px !important;
          }
          #svg-learn-right-navigator {
            left: 27px !important;
          }
          #svg-learn-left-navigator {
            left: 27px !important;
          }
          .bubble-padding {
            padding: 11px 16px 11px 14px !important;
          }
          .margin-top-bottom {
            margin-left: 0.5mm !important;
            margin-right: 0.5mm !important;
          }
        </style>
        <script type="text/javascript">
          function handleGoBack() {
            if (!history.back()) {
              window.close();
            }
          }
          function jumpToLoginGlobal() {
            window.open(localStorage.getItem("referrer"));
            window.close("", "_parent", "");
          } 
          function navigateToNewTabWithRootAndAnchorSubpageAttributes(
            targetRoot,
            attrib,
            value
          ) {
            targetRoot += "?" + attrib + "=" + value;
            window.open(targetRoot, "_blank").focus();
          }
        </script>
      </head>

      <span id="navigator-pane" style="display: none">
        <div
          id="svg-up-navigator"
          onclick="navigateToNewTabWithRootAndAnchorAttributes('https://global-vision.world/', 'localId');"
        >
          <img
            id="svg-up-navigator-img"
            src="https://global-vision.world/img/UpArrowActiveSVG.svg"
          />
        </div>
        <div
          id="svg-down-navigator"
          onclick="navigateToNewTabWithRootAndAnchorAttributes('https://global-vision.world/', 'termsId');"
        >
          <img
            id="svg-down-navigator-img"
            src="https://global-vision.world/img/DownArrowActiveSVG.svg"
          />
        </div>

        <div id="svg-back-navigator" onclick="handleGoBack();">
          <img
            id="svg-back-navigator-img"
            src="https://global-vision.world/img/LeftArrowActiveSVG.svg"
          />
        </div>

        <div id="svg-close-navigator">
          <img
            id="svg-close-payment-navigator-img"
            src="https://global-vision.world/img/CloseCrossActiveSVG.svg"
          />
        </div>
      </span>

      <script type="text/javascript">
        console.log(
          "%cARROW NAVIGATOR GO PUBLIC LOADED",
          "background: #bd0000; color: #c4c4c4"
        );
        var menuNavigatorOpened = false;
        function openMenuNavigator() {
          var menuNavigator = document.getElementById("menu-navigator-payment");
          menuNavigator.style.setProperty("height", "62px");
          menuNavigator.style.setProperty("width", "62px");
          menuNavigator.style.setProperty("top", "12px");
          menuNavigator.style.setProperty("left", "12px");
        }
        function closeMenuNavigator() {
          var menuNavigator = document.getElementById("menu-navigator-payment");
          menuNavigator.style.setProperty("height", "45px");
          menuNavigator.style.setProperty("width", "45px");
          menuNavigator.style.setProperty("top", "20px");
          menuNavigator.style.setProperty("left", "20px");
        }
        var menuNavigatorFixed = false;
        document
          .getElementById("svg-up-navigator")
          .addEventListener("click", function () {
            menuNavigatorFixed = true;
          });
        document
          .getElementById("svg-down-navigator")
          .addEventListener("click", function () {
            menuNavigatorFixed = true;
          });
        if (document.getElementById("svg-right-navigator")) {
          document
            .getElementById("svg-right-navigator")
            .addEventListener("click", function () {
              menuNavigatorFixed = true;
            });
        }
        if (document.getElementById("svg-left-navigator")) {
          document
            .getElementById("svg-left-navigator")
            .addEventListener("click", function () {
              menuNavigatorFixed = true;
            });
        }
        if (document.getElementById("svg-learn-right-navigator")) {
          document
            .getElementById("svg-learn-right-navigator")
            .addEventListener("click", function () {
              menuNavigatorFixed = true;
            });
        }
        if (document.getElementById("svg-learn-left-navigator")) {
          document
            .getElementById("svg-learn-left-navigator")
            .addEventListener("click", function () {
              menuNavigatorFixed = true;
            });
        }
        document
          .getElementById("svg-back-navigator")
          .addEventListener("click", function () {
            menuNavigatorFixed = true;
          });
        document
          .getElementById("bubble_navigator")
          .addEventListener("click", function () {
            if (!menuNavigatorFixed) {
              document.getElementById("navigator-pane").style.display = "none";
            }
            menuNavigatorOpened = false;
            closeMenuNavigator();
          });
        document
          .getElementById("menu-navigator-payment")
          .addEventListener("click", function () {
            if (
              document.getElementById("bubble_navigator").style.display ==
              "block"
            ) {
              document.getElementById("navigator-pane").style.display = "block";

              menuNavigatorOpened = true;
              openMenuNavigator();
            } else {
              if (!menuNavigatorFixed) {
                document.getElementById("navigator-pane").style.display =
                  "none";
              }
              menuNavigatorOpened = false;
              closeMenuNavigator();
            }
          });
        document
          .getElementById("svg-close-navigator")
          .addEventListener("click", function () {
            console.log(
              "%cCLICKED: svg-close-navigator: ",
              "background: #bd0000; color: #90f98b"
            );
            document.getElementById("navigator-pane").style.display = "none";

            document.getElementById("bubble_navigator").style.display = "none";
            menuNavigatorOpened = false;
            closeMenuNavigator();
            menuNavigatorFixed = false;
          });
      </script>
    </div>
 
  </body>
  <script type="text/javascript">
    function auto_height(elem, size) {
      elem.style.height = size + "px";
      elem.style.height = elem.scrollHeight + 4 + "px";
    }
    if (document.getElementById("error_msg")) {
      auto_height(document.getElementById("error_msg"), 45);
    }
  </script>
 
 
  <!-- MUST MOVE JS FILE -->
  <script type="text/javascript">
    document
      .getElementsByTagName("body")[0]
      .addEventListener("click", function (e) {
        var parentTarget = e.target.parentNode;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
        var calendarOnClick = false;

        while (
          parentTarget &&
          (parentTarget.tagName != "HTML" || parentTarget.tagName != "html")
        ) {
          if (
            parentTarget &&
            parentTarget.id &&
            (e.target.id.includes("calendar") ||
              parentTarget.id.includes("calendar"))
          ) {
            calendarOnClick = true;
          }
          parentTarget = parentTarget.parentNode;
        }
        if (
          calendarContainerDisplay.style.display == "block" &&
          !calendarOnClick
        ) {
          calendarContainerDisplay.style.display = "none";
        }
      });
    function visibilityOnOff(elm) {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
        elm.src = "img/visibility.svg";
      } else {
        x.type = "password";
        elm.src = "img/visibility-off.svg";
      }
    }

    function removeNewImputsInContainerTable() {
      var additionalTables =
        document.getElementsByClassName("table-additional");
      var additionalRowsLength = additionalTables.length - 1;
      if (additionalRowsLength > 0) {
        additionalTables[additionalRowsLength].parentNode.parentNode.remove();
        var elm = document.getElementById("amount");
        var size = parseInt(elm.value) - 1;
        elm.value = size;
      }
    }
 

 
 

 

    function focusAmount(elm) {}

    function onblurAmount(elm) {}

    function changeAmountInContainerTable(elm) {
      var elm = document.getElementById("amount");
      var additionalTables =
        document.getElementsByClassName("table-additional");
      var additionalRowsCount = additionalTables.length;
      if (elm.value < 0) {
        elm.value *= -1;
      }
      if (elm.value && elm.value < 1) {
        elm.value = 1;
      }
      if (elm.value && additionalRowsCount > elm.value) {
        for (var i = additionalRowsCount; i > elm.value; i--) {
          additionalTables[i - 1].parentNode.parentNode.remove();
        }
      }
      if (elm.value && additionalRowsCount < elm.value) {
        for (var i = additionalRowsCount; i < elm.value; i++) {
          addNewImputsItem(i + 1);
        }
      }
      resizeContainer();
    }

 

    function needInvoice(elm) {
      if (elm.checked) {
        if (
          !document
            .getElementById("companyNameTR")
            .getAttribute("style")
            .includes("important")
        ) {
          document.getElementById("companyNameTR").style.display = "table-row";
        }
        document.getElementById("titleTR").style.display = "table-row";
        document.getElementById("streetTR").style.display = "table-row";
        document.getElementById("houseNumberTR").style.display = "table-row";
        document.getElementById("zipCodeTR").style.display = "table-row";
        document.getElementById("cityTR").style.display = "table-row";
        document.getElementById("countryTR").style.display = "table-row";
        document.getElementById("telephoneTR").style.display = "table-row";
        document.getElementById("cellphoneTR").style.display = "table-row";
        document.getElementById("faxTR").style.display = "table-row";
        document.getElementById("invoice").innerHTML = 1;
      } else {
        if (
          !document
            .getElementById("companyNameTR")
            .getAttribute("style")
            .includes("important")
        ) {
          document.getElementById("companyNameTR").style.display = "none";
        }
        document.getElementById("titleTR").style.display = "none";
        document.getElementById("streetTR").style.display = "none";
        document.getElementById("houseNumberTR").style.display = "none";
        document.getElementById("zipCodeTR").style.display = "none";
        document.getElementById("cityTR").style.display = "none";
        document.getElementById("countryTR").style.display = "none";
        document.getElementById("telephoneTR").style.display = "none";
        document.getElementById("cellphoneTR").style.display = "none";
        document.getElementById("faxTR").style.display = "none";
        document.getElementById("invoice").innerHTML = 0;
      }
    }
    function changeByRadio(elm) {
      productPrice = parseInt(elm.value);
      if (productPrice == 1 || productPrice == 5) {
        document.getElementById("paidamountbyhandTr").style.display =
          "contents";
        document.getElementById("paid-amount").value = 0;
        document.getElementById("calendarstartTr").style.display = "contents";
        document.getElementById("calendarstart").value = currentCalendarStart;
        document.getElementById("paybydays").value = "yes";
        perDay = true;
      } else {
        document.getElementById("paidamountbyhandTr").style.display = "none";
        if (selfStudyProduct) {
          document.getElementById("calendarstartTr").style.display = "none";
          document.getElementById("calendarstart").value = registrationDate;
        }
        currentCalendarStart = document.getElementById("calendarstart").value;
        document.getElementById("paybydays").value = "no";
        registrationDayAmount = 1;
        perDay = false;
      }
    }

    function resizeContainer() {
      var vh = vhCheck();
      var signupIconIdHeight = 0;
      if (document.getElementById("signupIconId")) {
        signupIconIdHeight = document
          .getElementById("signupIconId")
          .getBoundingClientRect().height;
      }
      var calendarContainerTrim = 0;
      if (
        document.getElementById("calendar-container").style.display == "block"
      ) {
        // console.log('%cCALENDAR @ RESIZE: '+vh.vh+' :: '+document.getElementById("calendar-container").getBoundingClientRect().bottom, 'background: #fc4e03; color: #22056b');
        calendarContainerTrim = 100;
      } else {
        calendarContainerTrim = 0;
      }
      var signupContainerIdHeight = document
        .getElementById("signupContainerId")
        .getBoundingClientRect().height;
      if (
        calendarContainerTrim +
          signupContainerIdHeight +
          signupIconIdHeight +
          0.095 * vh.vh +
          190 >
        vh.vh
      ) {
        document.getElementById("fullscreenId").style.height =
          calendarContainerTrim +
          signupContainerIdHeight +
          signupIconIdHeight +
          0.095 * vh.vh +
          190 +
          "px";
        document.getElementById("fullscreen-bg").style.height =
          calendarContainerTrim +
          signupContainerIdHeight +
          signupIconIdHeight +
          0.095 * vh.vh +
          190 +
          "px";
      } else {
        document.getElementById("fullscreenId").style.height = vh.vh + "px";
        document.getElementById("fullscreen-bg").style.height = vh.vh + "px";
      }
      videoAdjust();
    }
    
 
 
 
 
   
      
  </script>
</html>
