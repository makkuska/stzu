<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <?php $name_page = "equipment" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "../cz/" ?>
  <?php $enpath = "" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Technical equipment</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
      <?php include_once("header.html") ?>

      <div class="jumbotron">
      </div> <!-- class="jumbotron" -->
    
      <div id="vybaveni" class="container container-padding">
        <h1 class="page-header">Technical equipment</h1>
        <p>
        <strong>SOLANSKÝ s.r.o.</strong> operates with <strong>35 vehicles</strong> including the VOLVO, MAN,
          DAF, and Mercedes Benz tipper trucks, and the Stas, Schmitz, Benalu,
          and Panav tipping semi-trailers. Trucks are equiped with the
          transport information system <strong>Dynafleet</strong>, which has many functions,
          such as tracking of the vehicle, monitoring of fuel consumption,
          monitoring of travelling time, etc.     
        </p>
      <?php include_once("../cz/fotogalerie.html") ?>
      </div><!-- div vybaveni -->
      <?php include_once("footer.html") ?>
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
