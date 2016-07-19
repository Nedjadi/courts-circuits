
<html>
<head>
  <title>Le Petit Prince
  </title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
  <form method="POST" action="add.php">
    <center>


      <input type="text" name="nom" size="30" value="nom" maxlength="35"> <input type="text" name="prenom" size="20" value="prenom" maxlength="35"><br>
<br><br><br><br>
      <input type="text" name="email" size="30" value="email" maxlength="70"> <input type="text" name="icq" size="20" value="icq" maxlength="11"><br>
<br><br><br><br>
      <input type="DATETIME" name="rdv" size="30" value="titre du site" maxlength="70"> <input type="datetime" name="heure-de-depart" size="20" value="url du site" maxlength="255"><br>
<br><br><br><br>
      <input type="submit" value="Envoyer" name="envoyer">
<br><br><br><br>
      <textarea name="message" rows="8" cols="45">
        Votre message ici.
      </textarea>
<br><br><br><br>
    </center>




    <tr><td>Heure Incident <td> <input type="date" name="IncidentH" value="<?php echo date("H:i"); ?>"  size="10">
  </form>
  <tr><td>Heure Incident <td> <input type="time" name="IncidentH" value="<?php echo date("H:i"); ?>"  size="10">
</form>


<br><br><br><br><br><br>
  <form method="post" action="cible.php">

  <p>
      On insèrera ici les éléments de notre formulaire.
  </p>

  </form>



<br><br><br><br><br><br>

  <p>
      Cette page ne contient que du HTML.<br />
      Veuillez taper votre prénom :
  </p>

  <form action="cible.php" method="post">
  <p>
      <input type="text" name="prenom" />
      <input type="submit" value="Valider" />
  </p>
  </form>


<br><br><br><br><br><br><br>

  <select name="choix">
      <option value="choix1">Choix 1</option>
      <option value="choix2">Choix 2</option>
      <option value="choix3">Choix 3</option>
      <option value="choix4">Choix 4</option>
  </select>



<br><br><br><br><br><br>

  Aimez-vous les frites ?
  <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
  <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

</html>
