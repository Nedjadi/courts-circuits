
  <?php
  try
  {
      // On se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=paonBDD;charset=utf8', 'root', 'Cikatan13');
  }
  catch(Exception $e)
  {
      // En cas d'erreur, on affiche un message et on arrête tout
           die('Erreur : ' . $e->getMessage());
  }
  ?>
