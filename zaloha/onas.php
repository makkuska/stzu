<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "onas" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
      <?php include_once("../head.html") ?>
    <title>SOLANSKÝ s.r.o. Nákladní autodoprava | O společnosti</title>
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

      <div id="onas" class="container container-padding">
        <h1 class="page-header">O společnosti</h1>
          <?php include_once("ospolecnosti.html") ?>
        <h2 class="page-header">Historie</h2>
          <p>Dopravní firma SOLANSKÝ s.r.o., jejíž hlavní specializací je
          přeprava sypkých hmot, jako jsou štěrky, písky, drcené kamenivo a
          podobně, byla založena panem Solanským v roce 1991 pod názvem Zdeněk
          Solanský – autodoprava.</p>
          <p>Firma začínala podnikat s jedním vozidlem značky LIAZ. V počátcích
          podnikání se vozidla této značky stala páteří vozového parku. Postupně
          s přibývajícím množstvím zakázek, začal majitel firmy rozšiřovat vozový
          park o nákladní automobily dalších značek, především Volvo a DAF.</p>
          <p>Další krok vpřed v podnikání pana Solanského znamenal rok 2003, kdy
          společně se svojí ženou Ivanou založil společnost SOLANSKÝ s.r.o.. Nově
          vzniklý subjekt převzal všechny aktivity a pole působnosti rozšířil o
          další služby jako je velkoobchod a maloobchod se sypkými hmotami,
          maloobchod s motorovými vozidly a jejich příslušenství, zasilatelství a
          opravy silničních vozidel a karoserií.</p>
          <p>V současnosti společnost SOLANSKÝ s.r.o. provozuje 35 nákladních
          vozidel značky Volvo, MAN, DAF a Mercedes-Benz.</p>

        <h2 class="page-header">Náš kolektiv</h2> 
          <div class="col-lg-12 col-md-12 col-sm-12">
              <img src="../files/img/Koliba.jpg" alt="Fotka zaměstnanců firmy Solanský s.r.o.">
          </div>
      </div><!-- div onas -->

      <?php include_once("footer.html") ?>

    </div> <!-- div container -->
  </body> 
</html>
