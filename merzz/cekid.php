  
  <?php require 'cek.php' ?>
<html

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
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
  <body>  
  <div class="padding hero-slider-container">
      <h3 class="heading is-slider-title">
        <?php 
 if (isset($_POST['id'])) {
  $id = $_POST['id'];
  if (in_array($id, $daftar_id_dilarang)) {
    echo "ID ini tidak aman.";
  } else {
    echo "ID ini aman.";
  }
}
?>
</h3>
    </div>
  
 <style>
  #heading {
    position: absolute;
    z-index: -1;
    
  }
 </style>
    <div class="password">
      <div class="password-form w-password-page w-form">
     

        <form
          name="id-form"
          data-name="ID Form"
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
                id="id" />
               <input
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
           <div class="global-styles w-embed"></div>


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
          
          </div>
        </form>    
  
      
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
    <script>
    swal({
      title: "Invisible Alert",
      text: "This alert will disappear immediately",
      timer: 0
    });
  </script>
    <script
      src="jquery-3.5.1.min.dc5e7f18c8.js"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script>
    <script
      src="webflow.310bdc54d.js"
      type="text/javascript"></script>
  </body>
</html>
