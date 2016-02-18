<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "vybaveni" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Nástrojárna Pečky s.r.o. | Strojní vybavení</title>
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
        <h1 class="page-header">Strojní vybavení</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <span>CNC frézovací centrum</span>
            <h2>
              HAAS VF 9
            </h2>
            <p>
              2134 x 1016 x 760 mm
            </p>
            <a href=<?php echo "{$filespath}files/img/CNC_haas_vf9.jpg" ?> title="CNC HAAS VF 9">
              <img src=<?php echo "{$filespath}files/img/CNC_haas_vf9.jpg" ?> alt="CNC HAAS VF 9" /><br />
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <span>CNC frézovací centrum</span>
            <h2>
              HAAS VF 6
            </h2>
            <p>
              1600 x 810 x 760 mm
            </p>
            <a href=<?php echo "{$filespath}files/img/CNC_haas_vf6.jpg" ?> title="CNC HAAS VF 6">
              <img src=<?php echo "{$filespath}files/img/CNC_haas_vf6.jpg" ?> alt="CNC HAAS VF 6" /><br />
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <span>CNC frézovací centrum</span>
            <h2>
            HAAS VM 2
            </h2>
            <p>
              762 x 508 x 508 mm
            </p>
            <a href=<?php echo "{$filespath}files/img/VM2_RC_SMTC.jpg" ?> title="CNC HAAS VM 2">
              <img src=<?php echo "{$filespath}files/img/VM2_RC_SMTC.jpg" ?> alt="CNC HAAS VM 2" /><br />
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h2>Drátová řezačka</h2>
            <span>
            FANUC Alpha C400iA
            </span>
            <p>
            600 x 400 x 310 mm
            </p>
            http://www.penta-edm.cz/alpha-c400ia-dratova-rezacka-fanuc/
          </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h2>CNC Hloubička</h2>
            <span>
              PENTA 650G
            </span>
            <p>
              600 x 500 x 500 mm
            </p>
            http://www.penta-edm.cz/hloubicka-penta-650g-cnc/
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            šestý obrázek použijeme z WWW stránek:
            <h2>Horizontální vyvrtávačka</h2>
            WH 10NC
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            sedmý obrázek použijeme z WWW stránek:

            <h2>Brusky na rovinné a rotační plochy</h2>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            Osmý obr. z WWW stránek:
            <h2>CAD/CAM</h2>
            Solid Edge
            VISI

          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          </div>
        </div>
      </div><!-- div vybaveni -->
      <?php include_once("footer.html") ?>
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
