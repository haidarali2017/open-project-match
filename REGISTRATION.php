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
    <link href="css/cookie.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" />
    <script type="text/javascript" src="js/vh-check.js"></script>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

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

    <script src="https://www.paypal.com/sdk/js?client-id=ASiTxcxJDwNbpc70kYBqHGubQNofFKOKphK5tFCUHOhLldtfSgzsakCCpTYmXzp0ZKZcbaPQ5046KuWS&currency=USD"></script>
    <script type="text/javascript">
      var calendarDaySift = 6;
      var calculatedValue = 0.01;
      var perDay = false;
      var currentCalendarStart = "";
      var selfStudyProduct = false;
      var registrationDayAmount = 1;

      var selectedStartingDay;

      var currentYear;
      var calendarYear;
      var currentMonth;
      var calendarMonth;
      var currentDay;
      var calendarDay;
      var currentLastDay;
      var calendarLastDay;
      var calendarStart;
      var currentRemainingDayOfCurrentMonth;
      var currentStartDate;
      var calenderStartDate;

      var month = new Array();
      month[0] = "January";
      month[1] = "February";
      month[2] = "March";
      month[3] = "April";
      month[4] = "May";
      month[5] = "June";
      month[6] = "July";
      month[7] = "August";
      month[8] = "September";
      month[9] = "October";
      month[10] = "November";
      month[11] = "December";

      var day = new Array();
      day[0] = "Sun";
      day[1] = "Mon";
      day[2] = "Tue";
      day[3] = "Wed";
      day[4] = "Thu";
      day[5] = "Fri";
      day[6] = "Sat";
    </script>
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
    <div>
      <div id="fullscreenId">
        <div id="fullscreen-bg">
          <video
            muted
            autoplay
            loop
            playsinline
            poster="img/background.png"
            id="fullscreen-bg-video"
          >
            <source src="_video/background.mp4" type="video/mp4" />
            <source src="_video/background.ogv" type="video/ogg" />
            <source src="_video/background.mp4" type="video/webm" />
          </video>
        </div>

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
                      onClick="confirmEmailClick(event);"
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
                    <textarea
                      class="red"
                      rows="1"
                      style="
                        height: 45px;
                        padding: 11px 16px 11px 14px !important;
                      "
                      name="solution_provider_mobile"
                      id="Mobile"
                      placeholder="Mobile*"
                      oninput="auto_height(this, 45);"
                      autocomplete="off"
                      autocorrect="off"
                      autocapitalize="off"
                    ></textarea>
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
                                name="checkboxInvoice"
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
                  <a href="#" onclick="submitFormData()" style="text-decoration:none;"><span class="no-border-c2d223-background-bubble to-no-border-black-background bubble-13px-important-padding word-break-all custom-background"  >
                     <strong>
                        Submit
                        <img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg"> 
                     </strong></span></a>
                  </td>
                </tr> 
              </table>
 
          
            </form>

            <script>
              function submitFormData() {
                  // Create an empty FormData object
                  var formData = new FormData(document.getElementById("registration_form"));

                  console.log(formData)

                  // If you need to debug, print all the form data
                  for (var pair of formData.entries()) {
                      console.log(pair[0] + ': ' + pair[1]);
                  }

                  // Send the data via AJAX (without page reload)
                  fetch("submit_form.php", {
                      method: "POST",
                      body: formData
                  })
                  .then(response => response.json()) // Assume server returns JSON
                  .then(data => {
                      if (data.success) {
                          alert("Form submitted successfully!");
                      } else {
                          alert("Submission failed.");
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
      <script type="text/javascript" src="js/signup.js"></script>

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
    <script
      type="text/javascript"
      src="https://global-vision.world/js/ajax-save-log.js"
    ></script>
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
  <script type="text/javascript">
    function testDrivenRegistration() {
      showMyProgress("Transaction completed.\n\nOrder ID: 1234567890");
      document.getElementById("paid-amount").value =
        registrationDayAmount *
        productPrice *
        parseInt(document.getElementById("registration_form").amount.value);
      document.getElementById("product-code").value = productCode;
      document.getElementById("product-title").value = productTitle;
      document.getElementById("product-path").value = productPath;
      document.getElementById("order-id").value = "1234567890";
      var registrationForm = document.getElementById("registration_form");
      regformhash(
        registrationForm,
        registrationForm.firstname,
        registrationForm.surname,
        registrationForm.street,
        registrationForm.housenumber,
        registrationForm.zipcode,
        registrationForm.city,
        registrationForm.email,
        registrationForm.confirmemail,
        registrationForm.amount,
        registrationForm.calendarstart
      );
    }
  </script>
  <script>
    paypal
      .Buttons({
        style: {
          color: "gold",
          shape: "pill",
          height: 45,
        },
        createOrder: function (data, actions) {
          return actions.order.create({
            purchase_units: [
              {
                amount: {
                  value: calculatedValue,  
                },
              },
            ],
          }); 
        },
        onShippingChange: function (data, actions) {
          return actions.resolve();
        },
        onApprove: function (data, actions) { 
          return actions.order.capture().then(function (details) { 
            showMyAlert(
              "Transaction completed by " +
                details.payer.name.given_name +
                " " +
                details.payer.name.surname +
                "\n\nOrder ID: " +
                details.id
            );
            document.getElementById("paid-amount").value =
              productPrice * parseInt(document.getElementById("amount").value) -
              productPrice *
                parseInt(document.getElementById("amount").value) *
                (productDiscount / 100);
            document.getElementById("product-code").value = productCode;
            document.getElementById("product-title").value = productTitle;
            document.getElementById("product-path").value = productPath;
            document.getElementById("order-id").value = details.id;
            var registrationForm = document.getElementById("registration_form");
            console.log(
              "REGISTRATION FORM: " +
                registrationForm +
                " productPrice: " +
                productPrice +
                " amount: " +
                parseInt(
                  document.getElementById("registration_form").amount.value
                )
            );
            regformhash(
              registrationForm,
              registrationForm.firstname,
              registrationForm.surname,
              registrationForm.street,
              registrationForm.housenumber,
              registrationForm.zipcode,
              registrationForm.city,
              registrationForm.email,
              registrationForm.confirmemail,
              registrationForm.amount,
              registrationForm.calendarstart
            );
          });
        },
      })
      .render("#paypal-button-container");
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

    function addNewImputsInContainerTable() {
      var elm = document.getElementById("amount");
      if (!elm.value) {
        elm.value = 1;
      }
      var size = parseInt(elm.value) + 1;
      elm.value = size;
      addNewImputsItem(size);
    }

    function addNewImputsItem(size) { 
      var tableRef = document.getElementById("formTable");
      var totalNumbeOfRows = tableRef.rows.length; 
      var newRow;
      if (selfStudyProduct && perDay) {
        newRow = tableRef.insertRow(totalNumbeOfRows - 8);
      } else if (selfStudyProduct && !perDay) {
        newRow = tableRef.insertRow(totalNumbeOfRows - 8);
      } else {
        newRow = tableRef.insertRow(totalNumbeOfRows - 7);
      }
      newRow.innerHTML +=
        '<td><table class="table-additional bubble-5mm-padding"><tr><td><textarea class="red" rows="1" style="height: 45px; padding: 11px 16px 11px 14px !important;" name="firstname-' +
        size +
        '" id="firstname-' +
        size +
        '" placeholder="First name*" oninput="auto_height(this, 45);" autocomplete="off" autocorrect="off" autocapitalize="off" ></textarea></td></tr><tr><td><textarea class="red" rows="1" style="height: 45px; padding: 11px 16px 11px 14px !important;" name="surname-' +
        size +
        '" id="surname-' +
        size +
        '" placeholder="Last name*" oninput="auto_height(this, 45);" autocomplete="off" autocorrect="off" autocapitalize="off" ></textarea></td></tr><tr><td><textarea class="red" rows="1" style="height: 45px; padding: 11px 16px 11px 14px !important;" name="email-' +
        size +
        '" id="email-' +
        size +
        '" placeholder="Email*" oninput="auto_height(this, 45);" autocomplete="off" autocorrect="off" autocapitalize="off" ></textarea></td></tr></table></td>';
    }

    function addNewImputs() {
      var trCount =
        document
          .getElementById("participantsContainer")
          .getElementsByTagName("tr").length / 3;
      var firstnameArray = new Array(trCount);
      var surnameArray = new Array(trCount);
      var emailArray = new Array(trCount);
      for (var i = 0; i < trCount; i++) {
        firstnameArray[i] = document.getElementById(
          "firstname-" + (i + 2)
        ).value;
        surnameArray[i] = document.getElementById("surname-" + (i + 2)).value;
        emailArray[i] = document.getElementById("email-" + (i + 2)).value;
      }
      var root = document.getElementById("participantsContainer");
      var elm = document.getElementById("amount");
      if (!elm.value) {
        elm.value = 1;
      }
      var size = parseInt(elm.value) + 1;
      elm.value = size;
     
      root.innerHTML +=
        '<tr><td><table class="table-additional bubble-5mm-padding"><tr><td><input class="red" style="width:100%;" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" name="firstname-' +
        size +
        '" id="firstname-' +
        size +
        '" placeholder="First name*"></td></tr><tr><td><input class="red" style="width:100%;" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" name="surname-' +
        size +
        '" id="surname-' +
        size +
        '" placeholder="Last name*"></td></tr><tr><td><input class="red" style="width:100%;" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" name="email-' +
        size +
        '" id="email-' +
        size +
        '" placeholder="Email*"></td></tr></table></td></tr>';
      for (var i = 0; i < trCount; i++) {
        if (document.getElementById("firstname-" + (i + 2))) {
          document.getElementById("firstname-" + (i + 2)).value =
            firstnameArray[i];
          document.getElementById("surname-" + (i + 2)).value = surnameArray[i];
          document.getElementById("email-" + (i + 2)).value = emailArray[i];
        } else {
          break;
        }
      }
      document
        .getElementById("paypal-integration")
        .setAttribute("onClick", "mouseOnClickCheck();");
      document.getElementById("paypal-button-container").style.pointerEvents =
        "none";
      resizeContainer();
    }

    function changeNumberOfDays(elm) {
      var elm = document.getElementById("paidamountbyhand");
      if (elm.value < 0) {
        elm.value *= -1;
      }
      if (elm.value && elm.value < 1) {
        elm.value = 1;
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

    function changeAmount(elm) {
    
      var trCount =
        document
          .getElementById("participantsContainer")
          .getElementsByTagName("tr").length / 3;
      var firstnameArray = new Array(trCount);
      var surnameArray = new Array(trCount);
      var emailArray = new Array(trCount);
      for (var i = 0; i < trCount; i++) {
        firstnameArray[i] = document.getElementById(
          "firstname-" + (i + 2)
        ).value;
        surnameArray[i] = document.getElementById("surname-" + (i + 2)).value;
        emailArray[i] = document.getElementById("email-" + (i + 2)).value;
      }
      var size = parseInt(elm.value);
      var root = document.getElementById("participantsContainer");
      if (size < 1) {
        while (root.hasChildNodes()) {
          root.removeChild(root.firstChild);
        }
        elm.value = 1;
      } else if (size == 1) {
        while (root.hasChildNodes()) {
          root.removeChild(root.firstChild);
        }
      } else if (size > 1) {
        while (root.hasChildNodes()) {
          root.removeChild(root.firstChild);
        }
        root.innerHTML += "";
        for (var i = 2; i <= size; i++) {
          root.innerHTML +=
            '<table id="participantsContainer" class="table-additional bubble-5mm-padding"><tr><td><input class="red" style="width:100%;" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" name="firstname-' +
            i +
            '" id="firstname-' +
            i +
            '" placeholder="First name*"></td></tr><tr><td><input class="red" style="width:100%;" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" name="surname-' +
            i +
            '" id="surname-' +
            i +
            '" placeholder="Last name*"></td></tr><tr><td><input class="red" style="width:100%;" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" name="email-' +
            i +
            '" id="email-' +
            i +
            '" placeholder="Email*"></td></tr></table>';
        }
      }
      for (var i = 0; i < trCount; i++) {
        if (document.getElementById("firstname-" + (i + 2))) {
          document.getElementById("firstname-" + (i + 2)).value =
            firstnameArray[i];
          document.getElementById("surname-" + (i + 2)).value = surnameArray[i];
          document.getElementById("email-" + (i + 2)).value = emailArray[i];
        } else {
          break;
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
    function calendarInner(
      currentYearByParam,
      currentMonthByParam,
      currentDayByParam,
      currentLastDayByParam,
      currentStartDateByParam,
      calendarDaySiftByParameter
    ) {
      calendarYear = currentYearByParam;
      calendarMonth = currentMonthByParam;
      calendarDay = currentDayByParam;
      calendarLastDay = currentLastDayByParam;
      calenderStartDate = currentStartDateByParam;
      var tempCalendarDay = currentMonth == calendarMonth ? calendarDay : 0;
      if (calendarStart.length < 3) {
        console.log(
          "%cCALENDAR INNER 1st: " + calendarDay + " :: " + calendarDaySift,
          "background: #d8b481; color: #1f630a"
        );
        // DEBUG CHECKING THE CALENDAR
        console.log(
          "1st: CURR YEAR: " +
            currentYear +
            " && CURR MONTH: " +
            currentMonth +
            " && CURR DAY: " +
            currentDay +
            " && CURR LAST: " +
            currentLastDay +
            " && CURR REMAINING: " +
            currentRemainingDayOfCurrentMonth
        );
        var monthContainer = document.getElementById(
          "calendar-month-container"
        );
        var innerTd = month[calendarMonth] + " " + calendarYear;
        monthContainer.innerHTML = innerTd;
        var dayContainer = document.getElementById("calendar-day-container");
        var incrementedDay = 1;
        var heightIncrement = 1;
        var innerTable = "";

        for (var i = 0; i < 6; i++) {
          innerTable += "<tr>";
          for (var j = 0; j < 7; j++) {
            var d = j + i * 7;
            console.log(
              "%cCALENDAR INNER 1st: " +
                calendarYear +
                ">=" +
                currentYear +
                "&&" +
                calendarMonth +
                ">=" +
                currentMonth +
                " calendarDaySiftByParameter: " +
                calendarDaySiftByParameter,
              "background: #d8b481; color: #1f630a"
            );
            if (
              (calendarYear > currentYear ||
                (calendarYear == currentYear &&
                  calendarMonth >= currentMonth)) &&
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay &&
              incrementedDay >= tempCalendarDay + calendarDaySiftByParameter
            ) {
              innerTable +=
                "<td data-selectable='true' class='bordered-a8f785' style='background-color:#a8f785;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay
            ) {
              innerTable +=
                "<td data-selectable='false' class='bordered' style='cursor:not-allowed;'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else {
              innerTable += "<td data-selectable='false'></td>";
            }
          }
          innerTable += "</tr>";
          if (incrementedDay > calendarLastDay) {
            break;
          }
          heightIncrement++;
        }
        dayContainer.innerHTML = innerTable;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
        var elmRect = elm.getBoundingClientRect();
        calendarContainerDisplay.style.top =
          elmRect.bottom + window.scrollY - 2 + "px";

        calendarContainerDisplay.style.display =
          calendarContainerDisplay.style.display == "block" ? "none" : "block";
      } else if (
        parseInt(calendarStart[0]) == calendarYear &&
        parseInt(calendarStart[1]) - 1 == calendarMonth
      ) {
        console.log(
          "%cCALENDAR INNER 2nd",
          "background: #d8b481; color: #1f630a"
        );
        console.log(
          "%cCALENDAR INNER 2nd: " +
            calendarStart[0] +
            "==" +
            currentYear +
            "&&" +
            (parseInt(calendarStart[1]) - 1) +
            "==" +
            currentMonth,
          "background: #d8b481; color: #1f630a"
        );
       
        var monthContainer = document.getElementById(
          "calendar-month-container"
        );
        var innerTd = month[calendarMonth] + " " + calendarYear;
        monthContainer.innerHTML = innerTd;
        var dayContainer = document.getElementById("calendar-day-container");
        var incrementedDay = 1;
        var heightIncrement = 1;
        var innerTable = "";
      
        for (var i = 0; i < 6; i++) {
          innerTable += "<tr>";
          for (var j = 0; j < 7; j++) {
            var d = j + i * 7;
            if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay &&
              incrementedDay >= tempCalendarDay + calendarDaySiftByParameter
            ) {
              if (parseInt(calendarStart[2]) == incrementedDay) {
                innerTable +=
                  "<td data-selectable='true' class='bordered-368513' style='background-color:#368513;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                  incrementedDay +
                  "</td>";
              } else {
                innerTable +=
                  "<td data-selectable='true' class='bordered-a8f785' style='background-color:#a8f785;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                  incrementedDay +
                  "</td>";
              }
              incrementedDay++;
            } else if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay
            ) {
              innerTable +=
                "<td data-selectable='false' class='bordered' style='cursor:not-allowed;'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else {
              innerTable += "<td data-selectable='false'></td>";
            }
          }
          innerTable += "</tr>";
          if (incrementedDay > calendarLastDay) {
            break;
          }
          heightIncrement++;
        }
        dayContainer.innerHTML = innerTable;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
      } else {
        console.log(
          "%cCALENDAR INNER 3rd",
          "background: #d8b481; color: #1f630a"
        );

        var dayContainer = document.getElementById("calendar-day-container");
        dayContainer.innerHTML = "";

        var incrementedDay = 1;
        var innerTable = "";

        for (var i = 0; i < 6; i++) {
          innerTable += "<tr>";
          for (var j = 0; j < 7; j++) {
            var d = j + i * 7;
            console.log(
              "#################### " +
                incrementedDay +
                " >= " +
                tempCalendarDay +
                " + " +
                calendarDaySiftByParameter
            );
            if (
              (calendarYear > currentYear ||
                (calendarYear == currentYear &&
                  calendarMonth >= currentMonth)) &&
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay &&
              incrementedDay >= tempCalendarDay + calendarDaySiftByParameter
            ) {
              if (
                parseInt(calendarStart[0]) == calendarYear &&
                parseInt(calendarStart[1]) - 1 == calendarMonth &&
                parseInt(calendarStart[2]) == incrementedDay
              ) {
                innerTable +=
                  "<td data-selectable='true' class='bordered-368513' style='background-color:#368513;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                  incrementedDay +
                  "</td>";
              } else {
                innerTable +=
                  "<td data-selectable='true' class='bordered-a8f785' style='background-color:#a8f785;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                  incrementedDay +
                  "</td>";
              }
              incrementedDay++;
            } else if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay
            ) {
              innerTable +=
                "<td data-selectable='false' class='bordered' style='cursor:not-allowed;'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else {
              innerTable += "<td data-selectable='false'></td>";
            }
          }
          innerTable += "</tr>";
          if (incrementedDay > calendarLastDay) {
            break;
          }
        }
        dayContainer.innerHTML = innerTable;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
      }
    }

    function createCalendar(elm) {
      var d = new Date();
      currentYear = d.getFullYear();
      currentMonth = d.getMonth();
      currentDay = d.getDate();
      currentLastDay = lastday(currentYear, currentMonth);
      currentRemainingDayOfCurrentMonth = currentLastDay - currentDay + 1;
      currentStartDate = startOfMonth(currentYear, currentMonth);
      calendarStart = document.getElementById("calendarstart").value.split("/");
      // DEBUG CHECKING THE CALENDAR
      console.log("WHEN OPENING THE CALENDAR: " + calendarStart.length);
      if (calendarStart.length < 3) {
        console.log(
          "%cCREATE CALENDAR 1st",
          "background: #baff00; color: #02194d"
        );
        // DEBUG CHECKING THE CALENDAR
        console.log(
          "1st: CURR YEAR: " +
            currentYear +
            " && CURR MONTH: " +
            currentMonth +
            " && CURR DAY: " +
            currentDay +
            " && CURR LAST: " +
            currentLastDay +
            " && CURR REMAINING: " +
            currentRemainingDayOfCurrentMonth
        );
        calendarYear = currentYear;
        calendarMonth = currentMonth;
        calendarDay = currentDay;
        calendarLastDay = currentLastDay;
        calenderStartDate = currentStartDate;
        console.log(
          "WHEN OPENING THE CALENDAR ======== currentYear: " +
            currentYear +
            " calendarYear: " +
            calendarYear +
            " currentMonth: " +
            currentMonth +
            " calendarMonth: " +
            calendarMonth +
            " currentStartDate: " +
            currentStartDate
        );
        var tempCalendarDay = currentMonth == calendarMonth ? calendarDay : 0;
        console.log(
          "################## WHEN OPENING THE CALENDAR currentMonth: " +
            currentMonth +
            " currentDay: " +
            currentDay +
            " tempCalendarDay: " +
            tempCalendarDay +
            " calendarDaySift: " +
            calendarDaySift
        );
        var monthContainer = document.getElementById(
          "calendar-month-container"
        );
        var innerTd = month[calendarMonth] + " " + calendarYear;
        monthContainer.innerHTML = innerTd;
        var dayContainer = document.getElementById("calendar-day-container");
        var incrementedDay = 1;
        var heightIncrement = 1;
        var innerTable = "";
        // DEBUG <tr>
        /*
		innerTable += "<tr><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>Su</td><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>Mo</td><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>Tu</td><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>We</td><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>Th</td><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>Fr</td><td class='bordered_inner_bubble' style='background-color:#ff00ff;'>Sa</td></tr><tr style='position: relative;overflow: hidden;width: 100%;display: inline-block;'><td colspan='7' style='position: absolute;left: 0;top: 0;'><table style='width:236px;height:32px !important;table-layout:fixed;table-layout:fixed;display:table;padding:0px;margin:0px;text-align:center;border: 2px solid #d3d3d3;border-radius: 28px;-webkit-border-radius: 28px;-moz-border-radius: 28px;'><tr><td></td></tr></table></td></tr>";
		*/
        for (var i = 0; i < 6; i++) {
          innerTable += "<tr>";
          for (var j = 0; j < 7; j++) {
            var d = j + i * 7;
            if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay &&
              incrementedDay >= tempCalendarDay + calendarDaySift
            ) {
              innerTable +=
                "<td data-selectable='true' class='bordered-a8f785' style='background-color:#a8f785;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay
            ) {
              innerTable +=
                "<td data-selectable='false' class='bordered' style='cursor:not-allowed;'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else {
              innerTable += "<td data-selectable='false'></td>";
            }
          }
          innerTable += "</tr>";
          if (incrementedDay > calendarLastDay) {
            break;
          }
          heightIncrement++;
        }
        dayContainer.innerHTML = innerTable;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
        var elmRect = elm.getBoundingClientRect();
        calendarContainerDisplay.style.top =
          elmRect.bottom + window.scrollY - 2 + "px";
        //calendarContainerDisplay.style.top = elmRect.top - (31 + 24 + heightIncrement * 25) + document.documentElement.scrollTop + "px";
        //calendarContainerDisplay.style.height = (31 + 24 + heightIncrement * 25) + "px";
        calendarContainerDisplay.style.display =
          calendarContainerDisplay.style.display == "block" ? "none" : "block";
        resizeContainer();
      } else if (
        parseInt(calendarStart[0]) == currentYear &&
        parseInt(calendarStart[1]) - 1 == currentMonth
      ) {
        console.log(
          "%cCREATE CALENDAR 2nd",
          "background: #baff00; color: #02194d"
        );
        // DEBUG CHECKING THE CALENDAR
        console.log(
          "2nd: " +
            parseInt(calendarStart[0]) +
            " ?= " +
            currentYear +
            " && " +
            parseInt(calendarStart[1]) +
            " ?= " +
            currentMonth +
            " && " +
            parseInt(calendarStart[2]) +
            " ?= " +
            currentDay
        );
    
        calendarYear = currentYear;
        calendarMonth = currentMonth;
        calendarDay = currentDay;
        calendarLastDay = currentLastDay;
        calenderStartDate = currentStartDate;
        var tempCalendarDay = currentMonth == calendarMonth ? calendarDay : 0;
        var monthContainer = document.getElementById(
          "calendar-month-container"
        );
        var innerTd = month[calendarMonth] + " " + calendarYear;
        monthContainer.innerHTML = innerTd;
        var dayContainer = document.getElementById("calendar-day-container");
        var incrementedDay = 1;
        var heightIncrement = 1;
        var innerTable = "";
      
        for (var i = 0; i < 6; i++) {
          innerTable += "<tr>";
          for (var j = 0; j < 7; j++) {
            var d = j + i * 7;
            if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay &&
              incrementedDay >= tempCalendarDay + calendarDaySift
            ) {
              innerTable +=
                "<td data-selectable='true' class='bordered-a8f785' style='background-color:#a8f785;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay
            ) {
              innerTable +=
                "<td data-selectable='false' class='bordered' style='cursor:not-allowed;'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else {
              innerTable += "<td data-selectable='false'></td>";
            }
          }
          innerTable += "</tr>";
          if (incrementedDay > calendarLastDay) {
            break;
          }
          heightIncrement++;
        }
        dayContainer.innerHTML = innerTable;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
        var elmRect = elm.getBoundingClientRect();
        calendarContainerDisplay.style.top =
          elmRect.bottom + window.scrollY - 2 + "px";

        calendarContainerDisplay.style.display =
          calendarContainerDisplay.style.display == "block" ? "none" : "block";
        resizeContainer();
        var allTd = dayContainer.getElementsByTagName("td");
        for (var i = 0; i < allTd.length; i++) {
          if (allTd[i].innerHTML == parseInt(calendarStart[2])) {
            selectDay(allTd[i], calendarYear, calendarMonth);
          }
        }
      } else {
        console.log(
          "%cCREATE CALENDAR 3rd",
          "background: #baff00; color: #02194d"
        );

        var tempCalendarDay = currentMonth == calendarMonth ? calendarDay : 0;
        var dayContainer = document.getElementById("calendar-day-container");
        dayContainer.innerHTML = "";
        if (calendarMonth + 1 <= 11) {
          calendarMonth += 1;
        } else {
          calendarMonth = 0;
          calendarYear += 1;
        }
        calendarYear = parseInt(calendarStart[0]);
        calendarMonth = parseInt(calendarStart[1]) - 1;

        var monthContainer = document.getElementById(
          "calendar-month-container"
        );
        var innerTd = month[calendarMonth] + " " + calendarYear;
        monthContainer.innerHTML = innerTd;
        calendarLastDay = lastday(calendarYear, calendarMonth);
        calenderStartDate = startOfMonth(calendarYear, calendarMonth);
        var incrementedDay = 1;
        var innerTable = "";

        for (var i = 0; i < 6; i++) {
          innerTable += "<tr>";
          for (var j = 0; j < 7; j++) {
            var d = j + i * 7;
            if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay &&
              incrementedDay >= tempCalendarDay + calendarDaySift
            ) {
              innerTable +=
                "<td data-selectable='true' class='bordered-a8f785' style='background-color:#a8f785;cursor:pointer;' onClick='selectDay(this,calendarYear,calendarMonth);'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else if (
              d >= calenderStartDate &&
              incrementedDay <= calendarLastDay
            ) {
              innerTable +=
                "<td data-selectable='false' class='bordered' style='cursor:not-allowed;'>" +
                incrementedDay +
                "</td>";
              incrementedDay++;
            } else {
              innerTable += "<td data-selectable='false'></td>";
            }
          }
          innerTable += "</tr>";
          if (incrementedDay > calendarLastDay) {
            break;
          }
        }
        dayContainer.innerHTML = innerTable;
        var calendarContainerDisplay =
          document.getElementById("calendar-container");
        var elmRect = elm.getBoundingClientRect();
        calendarContainerDisplay.style.top =
          elmRect.bottom + window.scrollY - 2 + "px";
        calendarContainerDisplay.style.display =
          calendarContainerDisplay.style.display == "block" ? "none" : "block";
        resizeContainer();
        var allTd = dayContainer.getElementsByTagName("td");
        for (var i = 0; i < allTd.length; i++) {
          if (allTd[i].innerHTML == parseInt(calendarStart[2])) {
            selectDay(allTd[i], calendarYear, calendarMonth);
          }
        }
      }
    }

    function backwardCalendar() {
      var dayContainer = document.getElementById("calendar-day-container");
      dayContainer.innerHTML = "";
      if (calendarMonth - 1 >= 0) {
        calendarMonth -= 1;
      } else {
        calendarMonth = 11;
        calendarYear -= 1;
      }
      var monthContainer = document.getElementById("calendar-month-container");
      var innerTd = month[calendarMonth] + " " + calendarYear;
      monthContainer.innerHTML = innerTd;
      calendarLastDay = lastday(calendarYear, calendarMonth);
      calenderStartDate = startOfMonth(calendarYear, calendarMonth);
      calendarDaySiftPassParameter = 0;
      if (currentYear == calendarYear && currentMonth == calendarMonth) {
        calenderStartDate = currentStartDate;
        calendarDay = currentDay;
        if (calendarDaySift > 0) {
          calendarDaySiftPassParameter = calendarDaySift;
        } else {
          calendarDaySiftPassParameter = 0;
        }
      } else if (
        (currentYear + 1 == calendarYear && calendarMonth == 0) ||
        (currentYear == calendarYear && currentMonth + 1 == calendarMonth)
      ) {
        calendarDay = currentDay;
        if (calendarDaySift > 0) {
          calendarDaySiftPassParameter =
            calendarDaySift - (calendarLastDay - currentDay);
        } else {
          calendarDaySiftPassParameter = 0;
        }
      } else if (calendarYear <= currentYear && calendarMonth < currentMonth) {
        calendarDay = 32;
      } else {
        calendarDay = 1;
      }
      console.log(
        "======== currentYear: " +
          currentYear +
          " calendarYear: " +
          calendarYear +
          " currentMonth: " +
          currentMonth +
          " calendarMonth: " +
          calendarMonth +
          " currentStartDate: " +
          currentStartDate
      );
      calendarInner(
        calendarYear,
        calendarMonth,
        calendarDay,
        calendarLastDay,
        calenderStartDate,
        calendarDaySiftPassParameter
      );
    }
    function forwardCalendar() {
      var dayContainer = document.getElementById("calendar-day-container");
      dayContainer.innerHTML = "";
      console.log(
        "BEFORE INCREMENT ========== currentYear: " +
          currentYear +
          " calendarYear: " +
          calendarYear +
          " currentMonth: " +
          currentMonth +
          " calendarMonth: " +
          calendarMonth +
          " currentStartDate: " +
          currentStartDate
      );
      if (calendarMonth + 1 <= 11) {
        calendarMonth += 1;
      } else {
        calendarMonth = 0;
        calendarYear += 1;
      }
      console.log(
        "AFTER INCREMENT ========== currentYear: " +
          currentYear +
          " calendarYear: " +
          calendarYear +
          " currentMonth: " +
          currentMonth +
          " calendarMonth: " +
          calendarMonth +
          " currentStartDate: " +
          currentStartDate
      );

      var monthContainer = document.getElementById("calendar-month-container");
      var innerTd = month[calendarMonth] + " " + calendarYear;
      monthContainer.innerHTML = innerTd;
      calendarLastDay = lastday(calendarYear, calendarMonth);
      calenderStartDate = startOfMonth(calendarYear, calendarMonth);
      calendarDaySiftPassParameter = 0;
      console.log(
        "INNER FORWARD calendarDaySift: " +
          calendarDaySift +
          " ( " +
          currentYear +
          " == " +
          calendarYear +
          " && " +
          currentMonth +
          " == " +
          calendarMonth +
          ") || ( " +
          (calendarLastDay - currentDay)
      );
      if (currentYear == calendarYear && currentMonth == calendarMonth) {
        calenderStartDate = currentStartDate;
        calendarDay = currentDay;
        if (calendarDaySift > 0) {
          calendarDaySiftPassParameter = calendarDaySift;
        } else {
          calendarDaySiftPassParameter = 0;
        }
      } else if (
        (currentYear + 1 == calendarYear && calendarMonth == 0) ||
        (currentYear == calendarYear && currentMonth + 1 == calendarMonth)
      ) {
        calendarDay = 1;
        if (calendarDaySift > 0) {
          calendarDaySiftPassParameter =
            calendarDaySift - (calendarLastDay - currentDay);
        } else {
          calendarDaySiftPassParameter = 0;
        }
        console.log(
          "INNER FORWARD DAY SHIFT CALCULATION 1 ======================= " +
            calendarDaySift +
            " =================="
        );
      } else {
        console.log(
          "INNER FORWARD DAY SHIFT CALCULATION 2 ======================= " +
            calendarDaySift +
            " =================="
        );
        calendarDay = 1;
      }
      console.log(
        "======== currentYear: " +
          currentYear +
          " calendarYear: " +
          calendarYear +
          " currentMonth: " +
          currentMonth +
          " calendarMonth: " +
          calendarMonth +
          " currentStartDate: " +
          currentStartDate
      );
      calendarInner(
        calendarYear,
        calendarMonth,
        calendarDay,
        calendarLastDay,
        calenderStartDate,
        calendarDaySiftPassParameter
      );
    }
    function lastday(y, m) {
      return new Date(y, m + 1, 0).getDate();
    }
    function startOfMonth(y, m) {
      return new Date(y, m, 1).getDay();
    }
    function selectDay(elm, calendarYear, calendarMonth) {
      calendarMonth++;
      calendarMonth =
        calendarMonth < 10
          ? "0" + calendarMonth.toString()
          : calendarMonth.toString();
      var calendarDay = parseInt(elm.innerHTML);
      calendarDay =
        calendarDay < 10
          ? "0" + calendarDay.toString()
          : calendarDay.toString();
      document.getElementById("calendarstart").value =
        calendarYear + "/" + calendarMonth + "/" + calendarDay;
      calendarStart = document.getElementById("calendarstart").value.split("/");
      if (elm.getAttribute("data-selectable") == "true") {
        if (selectedStartingDay) {
          selectedStartingDay.style.backgroundColor = "#a8f785";
          selectedStartingDay.setAttribute("class", "bordered-a8f785");
          selectedStartingDay.style.color = "#000000";
        }
        elm.style.backgroundColor = "#368513";
        elm.setAttribute("class", "bordered-368513");
        elm.style.color = "#ffffff";
        selectedStartingDay = elm;
      }
    }
    function checkIsParticipant(elm) {
      if (document.getElementById("isParticipant").checked) {
        if (document.getElementById("firstname")) {
          document.getElementById("firstname-1").value =
            document.getElementById("firstname").value;
        } else if (document.getElementById("firstname")) {
          document.getElementById("firstname-1").value =
            document.getElementById("firstname").value;
        }
        auto_height(document.getElementById("firstname-1"), 45);
        if (document.getElementById("surname")) {
          document.getElementById("surname-1").value =
            document.getElementById("surname").value;
        } else if (document.getElementById("surname")) {
          document.getElementById("surname-1").value =
            document.getElementById("surname").value;
        }
        auto_height(document.getElementById("surname-1"), 45);
        document.getElementById("email-1").value =
          document.getElementById("email").value;
        auto_height(document.getElementById("email-1"), 45);
      } else {
        document.getElementById("firstname-1").value = "";
        document.getElementById("surname-1").value = "";
        document.getElementById("email-1").value = "";
      }
      var validity = mouseOverCheck();
      if (validity) {
        document
          .getElementById("paypal-integration")
          .removeAttribute("onClick");
        document.getElementById("paypal-button-container").style.pointerEvents =
          "auto";
      } else {
        document
          .getElementById("paypal-integration")
          .setAttribute("onClick", "mouseOnClickCheck();");
        document.getElementById("paypal-button-container").style.pointerEvents =
          "none";
      }
    }
    function checkValid(str) {
      return !str || str.length === 0 || /^\s*$/.test(str);
    }
    function showMyFileName() {
      var myFileName = document.getElementById("upload-myfile");
      document.getElementById("myfile-name").value =
        myFileName.files.item(0).name;
      auto_height(document.getElementById("myfile-name"), 45);
    }
    function formatDate(date) {
      var d = new Date(date),
        month = "" + (d.getMonth() + 1),
        day = "" + d.getDate(),
        year = d.getFullYear();
      if (month.length < 2) {
        month = "0" + month;
      }
      if (day.length < 2) {
        day = "0" + day;
      }
      return [year, month, day].join("/");
    }
  
    if (selfStudyProduct) {
      document.getElementById("calendarstartTr").style.display = "none";
      document.getElementById("calendarstart").value = registrationDate;
    }
    changeAmountInContainerTable(parseInt(document.getElementById("amount")));
    //setTimeout(function(){ resizeContainer(); }, 100);
    setInterval(function () {
      /*
  var registrationFormAmount = document.getElementById("registration_form").amount.value ? parseInt(document.getElementById("registration_form").amount.value) : 0;
  */
      var registrationFormAmount = document.getElementById("amount").value
        ? parseInt(document.getElementById("amount").value)
        : 0;
      registrationDayAmount = document.getElementById("paidamountbyhand").value
        ? parseInt(document.getElementById("paidamountbyhand").value)
        : 1;
      if (!perDay) {
        var paypalCalculatedValue = productPrice * registrationFormAmount;
        document.getElementById("full-amount").value = paypalCalculatedValue;
        paypalCalculatedValue =
          paypalCalculatedValue -
          paypalCalculatedValue * (productDiscount / 100);
        document.getElementById("paid-amount").value = paypalCalculatedValue;
        document.getElementById("calendarstartforend").value = registrationDate;
        if (document.getElementById("calendarend").value != "2122/12/31") {
          document.getElementById("calendarend").value = "2122/12/31";
        }
      } else if (perDay) {
        document.getElementById("calendarstartforend").value =
          document.getElementById("calendarstart").value;
        var paypalCalculatedValue =
          productPrice * registrationFormAmount * registrationDayAmount;
        document.getElementById("full-amount").value = paypalCalculatedValue;
        paypalCalculatedValue =
          paypalCalculatedValue -
          paypalCalculatedValue * (productDiscount / 100);
        document.getElementById("paid-amount").value = paypalCalculatedValue;
        // ENDING DATE HAS TO BE SET
        const calendarStartConst = document
          .getElementById("calendarstart")
          .value.replace(/\//g, "-");
        // IN FORMAT AS Date(2027, 6, 24)
        const calendarStartNext = new Date(calendarStartConst);
        calendarStartNext.setDate(
          calendarStartNext.getDate() +
            parseInt(document.getElementById("paidamountbyhand").value)
        );
        const currentFormatDate = formatDate(calendarStartNext);
        if (document.getElementById("calendarend").value != currentFormatDate) {
          document.getElementById("calendarend").value = currentFormatDate;
        }
      }
      calculatedValue = parseInt(document.getElementById("paid-amount").value);

      document.getElementById("paid-currency").value = calculatedValue + " USD";
    }, 500);
    setInterval(function () {
      auto_height(document.getElementById("product-title"), 45);
      resizeContainer();
    }, 500);
  </script>
</html>
