<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="UTF-8" />
      <?php include_once("head.html") ?>
    <title>Solanský s.r.o. Nákladní autodoprava | Contacts</title>
  </head>
  
  <body>
    <div id="box" class="container">
      <?php include_once("header.html") ?>
 
     <?php
      //seznam mailů, na které se zpráva odešle
      $email = 'zdenek.solansky@gmail.com, ondrej.solansky@gmail.com, marketa.solanska@gmail.com';
      //proměnné naplněné z formáře kontaktujte_nas.html
      $zprava = $_POST['zprava'];
      $predmet = $_POST['predmet'];
      $odesilatel = $_POST['odesilatel_mail'];

      $pr = "Dotaz z webu: $predmet";

      //hlavicka
        $hlavicka = "From:$odesilatel\n";
        $hlavicka .= "Subject:$pr\n";
        $hlavicka .= "MIME-Version: 1.0\n";
        $hlavicka .= "Content-Transfer-Encoding: QUOTED-PRINTABLE\n"; //způsob kódování
        $hlavicka .= "X-Mailer: PHP\n";
        $hlavicka .= "Content-Type: text/plain; charset=UTF-8\n"; // kódování
      
      //kopie emailu odesílatele
      $zp_prijemce = 'This is your message which you sended from http://www.solanskysro.cz:' . "\n" . $zprava;
      mail($odesilatel, 'Copy of your message from www.solanskysro.cz', $zp_prijemce, $hlavicka);

      //mail na 
      $vysledek = mail($email, $pr, $zprava, $hlavicka);

      if ($vysledek)
          echo('<div class="jumbotron"></div><div class="container container-padding"><h1 class="page-header">You message was successfully sended</h1><p> Thank you for your message or question.</><p> We will reply you immediately after we will read it to mail ' . '('.$odesilatel.').</p><p><a class="btn btn-info" href="contacts.phtml">Back to Contacts</a></p></div>');
        else
          echo('<div class="jumbotron"></div><div class="container container-padding"><h1 class="page-header">We are sorry, your message was not sended.</<h2>><p>Please try to write it again or contact us directy on e-mail <a href="mailto:solanskydoprava@quick.cz">solanskydoprava@quick.cz or telefon number +420 571 656 440. Thank you for understanding.</p><p><a class="btn btn-info" href="contacts.phtml">Back to Contacts</a></p></div></div>');
      
      include_once("footer.html");
?>
</body>
</html>
