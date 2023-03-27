<?php
include_once 'General.php';

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Solicitud de matenimiento">
  <meta name="description" content="">
  <title>Acerca de</title>
  <link rel="stylesheet" href="dist/css/niceSolicitud.css" media="screen">
  <link rel="stylesheet" href="dist/css/Solicitud.css" media="screen">
  <script class="u-script" type="text/javascript" src="dist/js/Solicitud.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="dist/js/niceSolicitud.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.6.16, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  
  <?php

  links();
  ?>

  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Solicitud">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<?php

StyleEx();
?>



<body class="u-body u-xl-mode" data-lang="es">

  <?php
  navbar();
  ?>


  <section class="u-align-center u-clearfix u-custom-color-1 u-section-1" src="" id="carousel_7349">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div
              class="u-align-center u-container-style u-grey-10 u-layout-cell u-radius-50 u-shape-round u-size-60 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-text u-text-default u-text-1">Solicitud de matenimiento</h2>
                <div class="u-form u-form-1">
                  <form action="https://forms.nicepagesrv.com/v2/form/process"
                    class="u-clearfix u-form-spacing-50 u-form-vertical u-inner-form" style="padding: 0px;"
                    source="email" name="form">
                    <div class="u-form-group u-form-name u-label-none u-form-group-1">
                      <label for="name-30a4" class="u-form-control-hidden u-label" wfd-invisible="true"></label>
                      <input type="text" placeholder="name" id="name-30a4" name="nombre"
                        class="u-border-2 u-border-white u-input u-input-rectangle u-radius-50 u-input-1" required="">
                    </div>

                    <div class="u-form-group u-form-phone u-label-none u-form-group-4">
                      <label for="text-8fe8" class="u-label">Entrada</label>
                      <input type="tel" id="text-8fe8" name="telephone"
                        class="u-border-2 u-border-white u-input u-input-rectangle u-radius-50 u-input-4"
                        required="required" placeholder="(506)1111-1111">
                    </div>
                    <div class="u-form-email u-form-group u-label-none u-form-group-2">
                      <label for="email-cd2c" class="u-form-control-hidden u-label" wfd-invisible="true"></label>
                      <input type="email" id="email-cd2c" name="email"
                        class="u-border-2 u-border-white u-input u-input-rectangle u-radius-50 u-input-2" required=""
                        placeholder="email">
                    </div>
                    <div class="u-form-group u-form-textarea u-label-none u-form-group-3">
                      <label for="textarea-6a3a" class="u-label">Area de Texto</label>
                      <textarea rows="4" cols="50" id="textarea-6a3a" name="textarea"
                        class="u-border-2 u-border-white u-input u-input-rectangle u-radius-50 u-input-3"
                        required="required" placeholder="Informacion del matenimiento"></textarea>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-label-none u-form-group-4">
                      <a href="#"
                        class="u-active-white u-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-white u-radius-50 u-text-active-black u-text-hover-black u-btn-1">Enviar</a>
                      <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                    </div>
                    <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Gracias tu matenimiento
                      hacido solicitado! </div>
                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> No se puede enviar su
                      mensaje. Corrija los errores y vuelva a intentarlo. </div>
                    <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                    <input type="hidden" name="formServices" value="34f12964d4bcf00627c3dbca0e472fb8">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  Footer();
  ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
	crossorigin="anonymous"></script>
</html>