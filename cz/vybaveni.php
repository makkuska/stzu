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
      <div id="first" class="vybaveni">
      
        <div id="vybaveni" class="container container-padding">
          <h1 class="page-header">Strojní vybavení</h1>
          <div class="container container-padding">

          <!-- první řada -->
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h2> CNC frézovací centra </h2>
                <h3>
                  HAAS VF 9
                </h3>
                <p>
                  2134 x 1016 x 760 mm
                  <img src=<?php echo "{$filespath}files/img/vyb_vf9.png" ?> alt="CNC HAAS VF 9" /><br />
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h2><span class="skryty">Bla</span></h2>
                <h3>
                  HAAS VF 6
                </h3>
                <p>
                  1600 x 810 x 760 mm
                  <img src=<?php echo "{$filespath}files/img/vyb_vf6.png" ?> alt="CNC HAAS VF 6" /><br />
                </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h2><span class="skryty">Bla</span></h2>
                <h3>
                HAAS VM 2
                </h3>
                <p>
                  762 x 508 x 508 mm
                  <img src=<?php echo "{$filespath}files/img/vyb_vm2.png" ?> alt="CNC HAAS VM 2" /><br />
                </p>
              </div>
            </div>

            <div class="row"> <!-- druhá řada -->
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                <h2>Drátová řezačka</h2>
                <h3>FANUC Alpha C400iA</h3>
                  <p>
                  600 x 400 x 310 mm
                    <img src=<?php echo "{$filespath}files/img/vyb_fanuc.png" ?> alt="FANUS Alpha C400iA" /><br />
                  </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                  <h2>CNC Hloubička</h2><h3>PENTA 650G</h3>
                  <p>
                    600 x 500 x 500 mm
                    <img src=<?php echo "{$filespath}files/img/vyb_p650g.png" ?> alt="Penta 650G" /><br />
                  </p>
                </div>
              </div>
            </div>
              
            <div class="row"> <!-- třetí řada -->
              <div class="col-lg-5 col-lg-offset-1 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
                <h3>Horizontální vyvrtávačka WH 10NC</h3>
                  <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
                    <img src=<?php echo "{$filespath}files/img/vyb_vyvrtavacka.png" ?> alt="Horizontální vyvrtávačka" /><br />
                  </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <h3>Brusky na rovinné a rotační plochy</h3>
                  <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
                    <img src=<?php echo "{$filespath}files/img/vyb_bruska_2.png" ?> alt="Bruska" /><br />
                  </div>
              </div>
            </div>

          </div><!-- div vybaveni -->
          <h3 class="page-header"><span class="skryty">B</span>Používaný software CAD/CAM</h3>
            <div class="container container-padding">
              <p>Solid Edge<br />
              VISI
              </p>
            </div>

        </div><!-- div vybaveni -->
        <?php include_once("footer.html") ?>
      </div> <!-- id="box" class="container" -->
    </div> <!-- id="first" class="container" -->
  </body> 
</html>
