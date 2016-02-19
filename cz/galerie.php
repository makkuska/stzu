<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "galerie" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Nástrojárna Pečky s.r.o. | Galerie výrobků</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
      <?php include_once("header.html") ?>

        <div id="first" class="galerie">


          <div id="galerie" class="container container-padding">
            <h1 class="page-header">Galerie výrobků</h1>
            <?php include_once("fotogalerie.html") ?>
            <p>
          </div><!-- div sluzby -->
          <?php include_once("footer.html") ?>
        </div> <!-- id="box" class="container" -->
      </div>
    </div>
  </body> 
</html>
