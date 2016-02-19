<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kontakty" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Nástrojárna Pečky s.r.o. | Kontakty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="kontakty container">
      <?php include_once("header.html") ?>
        <div id="first" class="kontakty">

          <div id="kontakty" class="container container-padding">
            <h1 class="page-header">Kontakty</h1>
            <div id="sidlo" class="container">
              <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <address>
                  <span>Sídlo společnosti</span>
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd>Nástrojárna Pečky s.r.o.</dd>
                    <dt>adresa</dt>
                    <dd>Nádražní  664</dd>
                    <dt></dt>
                    <dd>Bystřice nad Pernštejnem</dd>
                    <dt></dt>
                    <dd>593 01</dd>
                  </dl>
                  <span>Provozovna</span>
                  <dl class="dl-horizontal">
                    <dt>adresa</dt>
                    <dd>Bezručova 2902</dd>
                    <dt></dt>
                    <dd>Rožnov pod Radhoštěm</dd>
                    <dt></dt>
                    <dd>756 61</dd>
                    <dt>email</dt>
                    <dd>info@stzu.cz</dd>
                  </dl>
                </address>
              </div><!-- class="container col-md-4">-->
              <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <?php include_once("mapa.html") ?>
              </div><!-- class="container col-md-6">-->
            </div><!-- div sidlo  class="container"-->

            <h2 class="page-header">Kontakty na jednotlivé osoby</h2>

            <div id="osoby" class="container">
              <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Vedoucí strojírny</i></dd>
                    <dt></dt>
                    <dd><strong>Zdeněk Bátrla</strong></dd>
                    <dt>mobil</dt>
                    <dd>603 878 953</dd>
                    <dt>e-mail</dt>
                    <dd>z.batrla@stzu.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Mistr výroby</i></dd>
                    <dt><br /></dt>
                    <dd><strong><br /></strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 734 259 299</dd>
                    <dt>e-mail</dt>
                    <dd>mistr@stzu.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
              </div><!-- div container-->

              <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Technolog</i></dd>
                    <dt></dt>
                    <dd><strong>Ing. Ladislav Pecha</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 733 735 757</dd>
                    <dt>e-mail</dt>
                    <dd>pecha@stzu.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Technolog</i></dd>
                    <dt></dt>
                    <dd><strong>Jan Magnusek</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 734 259 198</dd>
                    <dt>e-mail</dt>
                    <dd>magnusek@stzu.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
              </div><!-- div container-->

              <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Příprava výroby</i></dd>
                    <dt></dt>
                    <dd><strong>Vladana Mizerová</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 602 196 215</dd>
                    <dt>e-mail</dt>
                    <dd>mizerova@stzu.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <dl class="dl-horizontal">
                    <dt></dt>
                    <dd><i>Ekonomika</i></dd>
                    <dt></dt>
                    <dd><strong>Jana Solanská</strong></dd>
                    <dt>mobil</dt>
                    <dd>+420 724 063 868</dd>
                    <dt>e-mail</dt>
                    <dd>solanska@stzu.cz</dd>
                  </dl>
                </div><!-- class="container col-md-6">-->
              </div><!-- div container-->
            </div><!-- div osoby class="container"-->
          </div><!-- div kontakty -->

        <!--
        ?php include_once("kontakt_nas.html") ?> 
        -->
        <?php include_once("footer.html") ?>

      </div> <!-- id="first" -->
    </div> <!-- id="box" class="container" -->
  </body> 
</html>
