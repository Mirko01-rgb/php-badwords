<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

   <!-- Paragrafo originale -->
   <h1>Paragrafo originale</h1>
   <p>
     <!-- Creare una variabile con un paragrafo di
     testo.
     Visualizzare a schermo il paragrafo con la
     relative lunghezza e sostituire la
     badword passata in GET con tre *. -->
     <?php
       $textLorem = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
       echo "$textLorem";
       ?>
    </p>


    <!-- Lunghezza paragrafo -->
    <h1> Lunghezza paragrafo</h1>
    <p>
     <?php
       $length = strlen($textLorem);
       echo "$length";

       ?>
    </p>

    <!-- Paragrafo censurato -->
    <h1>Paragrafo censurato</h1>
    <p>
      <?php
        $badword = $_GET["badword"];
        $newSentence = str_replace($badword, '***', $textLorem);
        // var_dump( $badword, $newSentence);
        echo "$newSentence";
       ?>
    </p>

  </body>
</html>
