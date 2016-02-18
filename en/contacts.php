<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <?php $name_page = "contacts" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "../cz/" ?>
  <?php $enpath = "" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Contacts</title>
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
      
      <div id="kontakty" class="container container-padding">
        <h1 class="page-header">Contacts</h1>
        <div id="sidlo" class="container">
          <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <address>
            <span>Company Headquarters/<br /> Sale of materials:</span>
              <dl class="dl-horizontal">
                <dt>address</dt>
                <dd>Vigantice 278</dd>
                <dt></dt>
                <dd>756 61</dd>
                <dt></dt>
                <dd>Czech republic</dd>
                <dt>tel.</dt>
                <dd>+420 571 656 440</dd>
              </dl>
              <span>Head Office:</span>
              <dl class="dl-horizontal">
                <dt>address</dt>
                <dd>Tylovice 2050</dd>
                <dt></dt>
                <dd>Rožnov pod Radhoštěm</dd>
                <dt></dt>
                <dd>756 61</dd>
                <dt></dt>
                <dd>Czech republic</dd>
                <dt>tel./fax</dt>
                <dd>+420 571 656 444</dd>
              </dl>
            </address>
          </div><!-- class="container col-md-4">-->
          <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <?php include_once("../cz/mapa.html") ?>
          </div><!-- class="container col-md-6">-->
        </div><!-- div sidlo  class="container"-->
        
        <h2 class="page-header">Individual contacts</h2>
        
        <div id="osoby" class="container">
          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Zdeněk Solanský</strong></dd>
                <dt></dt>
                <dd><i>managing director</i></dd>
                <dt>mobile</dt>
                <dd>+420 602 728 613</dd>
                <dt>tel.</dt>
                <dd>+420 571 656 444</dd>
                <dt>e-mail</dt>
                <dd>solanskyzdenek@quick.cz</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Martin Solanský</strong></dd>
                <dt></dt>
                <dd><i>head of auto service</i></dd>
                <dt>mobile</dt>
                <dd>+420 602 575 025</dd>
                <dt>e-mail</dt>
                <dd>martin.solansky@gmail.com</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
          </div><!-- div container-->
            
          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Zdeněk Krhut</strong></dd>
                <dt></dt>
                <dd><i>head dispatcher for international and national transport</i></dd>
                <dt>mobile</dt>
                <dd>+420 724 178 909</dd>
                <dt>tel.</dt>
                <dd>+420 571 656 440</dd>
                <dt>e-mail</dt>
                <dd>solanskydoprava@quick.cz</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>David Zářický</strong></dd>
                <dt></dt>
                <dd><i>dispatcher for international transport</i></dd>
                <dt>mobile</dt>
                <dd>+420 602 281 463</dd>
                <dt>tel.</dt>
                <dd>+420 571 656 440</dd>
                <dt>e-mail</dt>
                <dd>solanskydoprava@quick.cz</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
          </div><!-- div container-->
            
          <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Rudolf Vajgl</strong></dd>
                <dt></dt>
                <dd><i>dispatcher for national transport, billing</i></dd>
                <dt>mobile</dt>
                <dd>+420 724 124 705</dd>
                <dt>e-mail</dt>
                <dd>rudavajgl@gmail.com</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <dl class="dl-horizontal">
                <dt></dt>
                <dd><strong>Ivana Solanská</strong></dd>
                <dt></dt>
                <dd><i>accountant, billing</i></dd>
                <dt>mobile</dt>
                <dd>+420 724 178 910</dd>
              </dl>
            </div><!-- class="container col-md-6">-->
          </div><!-- div container-->
        </div><!-- div osoby class="container"-->
      </div><!-- div kontakty -->
      
      <?php include_once("contact_us.html") ?>
      <?php include_once("footer.html") ?>

    </div> <!-- id="box" class="container" -->
  </body> 
</html>
