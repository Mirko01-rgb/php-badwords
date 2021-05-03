<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

   <h1>
     <!-- Creare una variabile con un paragrafo di
     testo.
     Visualizzare a schermo il paragrafo con la
     relative lunghezza e sostituire la
     badword passata in GET con tre *. -->
     <?php
       $textLorem = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
       //echo "$textLorem";

       $badword = $_GET["badword"];
       $newSentence = str_replace($badword, '***', $textLorem);

       // var_dump( $textLorem, $badword, $newSentence);

        echo "$newSentence";
      ?>
    </h1>

    <h1>
     <?php
       $length = strlen($textLorem);
       echo "$length";

      ?>
    </h1>
  </body>
</html>
