<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Dec 18 2023 10:43:47 GMT+0000 (Coordinated Universal Time) -->
<html
  data-wf-domain="ethos-fitness-sport-template.webflow.io"
  data-wf-page="64f1a4c13c8ab83aab9bdc06"
  data-wf-site="64f1a4c13c8ab83aab9bdbf6"
  lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Merzz Official</title>
    <meta
      content="Merzz Official adalah sebuah website jasa/layanan game Mobile Legends: Bang Bang."
      name="description" />
    <meta
      content="Merzz Official | Jual/Beli Akun Mobile Legends Terpercaya"
      property="og:title" />
    <meta
      content="Merzz Official adalah sebuah website jasa/layanan game Mobile Legends: Bang Bang."
      property="og:description" />
    <meta
      content="assets/img/brand.png"
      property="og:image" />
    <meta
      content="Merzz Official | Jual/Beli Akun Mobile Legends Terpercaya"
      property="twitter:title" />
    <meta
      content="Merzz Official adalah sebuah website jasa/layanan game Mobile Legends: Bang Bang."
      property="twitter:description" />
    <meta
      content="assets/img/brand.png"
      property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link
      href="../assets-global.website-files.com/64f1a4c13c8ab83aab9bdbf6/css/ethos-fitness-sport-template.webflow.52d613d46.min.css"
      rel="stylesheet"
      type="text/css" />
    <style>
      @media (min-width: 992px) {
        html.w-mod-js:not(.w-mod-ix)
          [data-w-id="42faa149-b6cd-9611-b226-6842ecbbe6c6"] {
          opacity: 0;
        }
      }
    </style>
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
    <link
      href="assets/img/icon.jpg"
      rel="shortcut icon"
      type="image/x-icon" />
    <link
      href="assets/img/icon.jpg"
      rel="apple-touch-icon" />
  
  </head>
  <body>   <div class="global-styles w-embed"></div>

    <div class="padding hero-slider-container">
      <h1 class="heading is-slider-title"><!-- COMMAND PHP UNTUK MENAMPILKAN NICKNAME DISINI! --></h1>
    </div>
  
 
   
    <div class="password">
      <div class="password-form w-password-page w-form">
        <form
          id="id"
          name="id-form"
          data-name="ID Form"
          action=".wf_auth"
          method="post"
          class="password-form-padding w-password-page"
          >
          <label for="id"
            class="password-form-label w-password-page">ID game</label>
          <div class="password-form-block">
            <div class="password-form-field">
              <input
                type="number"
                class="password-form-input w-password-page w-input"
                autofocus="true"
                maxlength="15"
                name="id"
                data-name="field"
                placeholder="Enter your ID"
                id="id" /><input
                type="submit"
                value="Enter"
                data-wait="Please wait..."
                class="password-form-submit w-password-page w-button" />
            </div>
          </div>
          <div class="password-error w-password-page w-form-fail">
            <div class="password-error-text">
              Incorrect ID Please try again.
            </div>
          </div>
          
          <div style="display: none" class="w-password-page w-embed w-script">
            <script type="application/javascript">
              (function _handlePasswordPageOnload() {
                if (/[?&]e=1(&|$)/.test(document.location.search)) {
                  document.querySelector(
                    ".w-password-page.w-form-fail"
                  ).style.display = "block";
                }
              })();
            </script>
            <?php
            $nickname = "";
        
            if (isset($_POST['save'])) {
                $id = $_POST['id'];
                $zone = $_POST['zone'];
        
        
                $id = filter_var($id, FILTER_VALIDATE_INT);
                $zone = filter_var($zone, FILTER_VALIDATE_INT);
        
                if ($id && $zone) {
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "https://cekid.solusimedia.my.id/v2/game/?code=MOBILE_LEGENDS&id=" . $id . "&other=" . $zone . "&key=14e46b20666b12d");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    $result = curl_exec($ch);
                    $error = curl_error($ch);
                    curl_close($ch);
        
                    if ($error) {
                        $nickname = "Error: " . $error;
                    } else {
                        $res = json_decode($result, true);
        
                        if (isset($res) && array_key_exists("nickname", $res)) {
                            $nickname = $res["nickname"];
                        } else {
                            $nickname = "Nickname not found";
                        }
                    }
                } else {
                    $nickname = "Invalid input";
                }
            }
            ?>
          </div>
        </form>
        <?php if (!empty($nickname)) { echo $nickname; } ?>
        <div class="padding-medium"></div>
        <div class="vertical-flex is-align-center">
          <a
            data-w-id="d539bbb6-4017-e786-84c8-0eb1e198df45"
            href="index.html"
            target="_blank"
            class="button-1 w-inline-block"><p class="button-1-text">back to homepage?</p>
            <img
              src="https://assets-global.website-files.com/64f1a4c13c8ab83aab9bdbf6/64f5e8c0cb1f1c2f324f35f5_arrow_downward_FILL0_wght700_GRAD0_opsz24-5.svg"
              loading="lazy"
              alt
              class="button-1-icon" />
            <div class="button-1-full-bg"></div></a>
        </div>
      </div>
      </div>
    </div>
    <style>
      .padding-medium {
        padding-top: 50px;
      }
    </style>
      
    <div class="password-background">
      <div class="password-background-blur"></div>
      <img
        src="assets/img/ceci.jpg"
        loading="lazy"
        sizes="100vw"
        srcset="
          assets/img/ceci.jpg  500w,
          assets/img/ceci.jpg  800w,
          assets/img/ceci.jpg 1080w,
          assets/img/ceci.jpg 1600w,
          assets/img/ceci.jpg 1920w
        "
        alt
        class="cover-image" />
    </div>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64f1a4c13c8ab83aab9bdbf6"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script>
    <script
      src="webflow.310bdc54d.js"
      type="text/javascript"></script>
  </body>
</html>
