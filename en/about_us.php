<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <?php $name_page = "about_us" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "../cz/" ?>
  <?php $enpath = "" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | About us</title>
  </head>
  
  <body>
    <div id="box" class="container">
      <?php include_once("header.html") ?>

      <div class="jumbotron">
      </div> <!-- class="jumbotron" -->

      <div id="onas" class="container container-padding">
        <h1 class="page-header">About company</h1>
          <?php include_once("aboutcompany.html") ?>
        <h2 class="page-header">History</h2>
        <p>
        The company SOLANSKÝ s.r.o. was founded by Mr. Solanský in 1991 and it
        was called Zdeněk Solanský – Transportation. The company’s main subject
        of business is the transportation of powdery materials such as gravel,
        sand, aggregate, and agricultural products.
        </p>
        <p>
        The owner started his business with one LIAZ vehicle. At the beginning, the
        LIAZ vehicles were the backbone of the company’s fleet. Gradually, with the
        increasing amount of orders, the owner started to expand the fleet with other
        brands, mainly VOLVO and DAF.
        </p>
        <p>
        In 2003, the company SOLANSKÝ s.r.o. was founded by Mr. Solanský and
        his wife Ivana. The new company took over all activites and extended
        its business so that it included other activities, such as wholesale
        and retail of powdery materials, retail sale of trucks and their
        accessories, and repairs.
        </p>
        <p>
        Now, the company SOLANSKÝ s.r.o. operates with 35 VOLVO, MAN, DAF and Mercedes
        Benz tipper trucks. 
        </p>
        <h2 class="page-header">Our team</h2>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="../files/img/Koliba.jpg" alt="Fotka zaměstnanců firmy Solanský s.r.o.">
        </div>
      </div><!-- div onas -->
      <?php include_once("footer.html") ?>

    </div> <!-- id="box" class="container" -->
  </body> 
</html>
