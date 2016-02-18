<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <head>
    <meta charset="UTF-8" />
      <?php include_once("head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Kontakty</title>
  </head>
  
  <body>
    <div id="box" class="container">
      <?php include_once("header.html") ?>

    <?php
      //seznam mailů, na které se zpráva odešle
      $to = 'zdenek.solansky@gmail.com;
      $from = $_POST['odesilatel_mail'];
      //proměnné naplněné z formáře kontaktujte_nas.html
      $formSubject = $_POST['predmet'];
      $formMessage = $_POST['zprava'];
      $formURL = $_POST['url'];

      $pr = "Dotaz z webu: $predmet";

      //hlavicka
        $hlavicka = "From:$from\n" . "BCC:marketa.solanska@gmail.com";
        $hlavicka .= "Subject:$pr\n";
        $hlavicka .= "MIME-Version: 1.0\n";
        $hlavicka .= "Content-Transfer-Encoding: QUOTED-PRINTABLE\n"; //způsob kódování
        $hlavicka .= "X-Mailer: PHP\n";
        $hlavicka .= "Content-Type: text/plain; charset=UTF-8\n"; // kódování
      
      //kopie emailu odesílatele
      $subjectCopy = 'Kopie Vaší zprávy z webu solanskysro.cz';
      $messageCopy = 'Vaše zpráva, kterou jste odeslali přes web solanskysro.cz:' . "\n" . "Předmět: " . $formSubject . "\n" . $formMessage;

      //mail na 
      $subjectOrig = "Dotaz z webu: $formSubject";

      if (!empty($formUrl)) {
          $page1  = '<br /><div class="jumbotron"><div class="container"><p>' .$formUrl .
          $page1 .= '</p><a class="btn btn-default" href="http://www.solanskysro.cz">';
          $page1 .= ' Zpět na solanskysro.cz</a></p> </div></div>';
          echo ($page1);
      } else if (empty($from) or empty($formMessage) or empty($formSubject)) { 
          echo('<div class="jumbotron"></div><div class="container container-padding"><h1 class="page-header">Omlouváme se, někde nastala chyba. Váš e-mail nebyl odeslán. </<h2>><p>Zkuste zadat požadavek znovu, zkontrolujte, že jste vyplnili všechny kolonky. V případě, že to stále nepůjde, kontaktujte nám přímo na e-mailu solanskydoprava@quick.cz nebo na telefonním čísle +420 571 656 440. Děkujeme za pochopení.</p><p><a class="btn btn-info" href="kontakty.php">Zpět na kontakty</a></p></div></div>');
      } else {
          mail($to,   $subjectOrig, $formMessage, $hlavicka);
          mail($from, $subjectCopy, $messageCopy, $hlavicka);
          echo('<div class="jumbotron"></div><div class="container container-padding"><h1 class="page-header">Váš mail byl úspěšně odeslán</h1><p> Děkujeme za vaši zprávu či dotaz.</><p> Po přečtení se Vám budeme snažit, co nejdříve odpovědět na mail, který jste zadali ' . '('.$odesilatel.').</p><p><a class="btn btn-info" href="kontakty.php">Zpět na kontakty</a></p></div>');
      }
      
      include_once("footer.html");
?>
</body>
</html>
