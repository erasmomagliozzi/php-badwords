<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
  $paragraph = 'Lorem ipsum dolor sit Lorem, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  $badword = $_GET["parola"];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Badword</title>
   </head>
   <body>

     <p><?php
      $lung_testo = strlen($paragraph);
      echo $lung_testo; ?> </p>
     <p><?php echo str_replace($badword, '***', $paragraph);?></p>

   </body>
 </html>
