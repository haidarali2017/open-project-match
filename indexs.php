<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Global Vision</title>
      <meta http-equiv="Cache-Control" content="public, max-age=31536000" />
      <meta name="keywords" content="Global Vision">
      <meta name="description" content="Global Vision">
      <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0, viewport-fit=cover">
      <link rel="preload" as="image" href="https://global-vision.world/img/forrest.avif" />
      <link rel="preload" as="image" href="https://global-vision.world/img/forest_1._HOCH.avif" />
      <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" /> 
      <link href="assets/css/testimonial.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/extracted-style-version-3.css" rel="stylesheet" type="text/css">   
      <link href="assets/css/style.css" rel="stylesheet" type="text/css"> 
      <script type="text/javascript" src="assets/js/vh-check.js"></script>
      <script type="text/javascript" src="assets/js/root.js"></script>
      <script type="text/javascript" src="assets/js/static_local.js"></script>  
      <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
 
    <body >
      <div>
        

          <div id="localId" data-title="LEARN" style="height: 433px">
            <div
              class="local bounceInUp animated"
              id="localContainerId"
              style="display: block"
            > 
       
              <div class="columnsTitle" id="columnsTitleId">                   
                <div   class="white-border-white-background-bubble bubble-padding italic-bold justify"
                  style="color: #97bf3a"
                  >LEARN
                </div>
              </div>
                <!-- //search  -->
              <div class="search-container" style="width:50%;margin-left:25%;margin-top:10px;">
                <input type="text" class="search-input" id="searchInput" placeholder="Search city...">
                <button class="voice-button" id="voiceButton"> 
                  <img src="assets/img/microphone.png" style="height:20px;" alt="">
                </button>
              </div>
 
     
              <div class="staticLocalContainer" id="staticLocalContainerId">
                <table style="width: 100%; display: table; text-align: center">
                  <tbody>
                    <tr>
                      <td id="title-show">
                        <span
                          class="black-border-black-background-bubble bubble-padding italic-bold justify margin-top-bottom"
                          >Get inspired in one of our worldwide conference, meeting
                          and classroom facilities.</span
                        >
                      </td>
                     
                    </tr>
                    <tr>
                      <td id="show-data"></td>
                    </tr>
                    <tr>
                      <td id="show-data-city"></td>
                      <td id="loading-indicator" style="display: none;">Loading...</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="prev-button" onclick="clickLearnLeftNavigator();"></div>
            <div class="next-button" onclick="clickLearnRightNavigator();"></div>
          </div>  
          <div id="menu-navigator-payment"></div> 

             
    <?php include('appjs.php');?> 
      </div> 
   </body>
</html>


