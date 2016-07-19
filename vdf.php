
<?php


    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(e_all);


// On commence par récupérer les champs
if(isset($_POST['regulier_ponctuel']))      $regulier_ponctuel=$_POST['regulier_ponctuel'];
else      $regulier_ponctuel="";

if(isset($_POST['heure_depart']))      $heure_depart=$_POST['heure_depart'];
else      $heure_depart="";

if(isset($_POST['adresse_depart']))      $adresse_depart=$_POST['adresse_depart'];
else      $adresse_depart="";

if(isset($_POST['adresse_arrivee']))      $adresse_arrivee=$_POST['adresse_arrivee'];
else      $adresse_arrivee="";

if(isset($_POST['date']))      $date=$_POST['date'];
else      $date="";


if(isset($_POST['heure']))      $heure=$_POST['heure'];
else      $heure="";

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description="";


// connexion à la base

$bdd = new PDO('mysql:host=localhost;dbname=courts-circuits','root','Cikatan13', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// sélection de la base

    // on écrit la requête sql
    $sql = "INSERT INTO courts-circuits ('regulier_ponctuel', 'heure_depart', 'adresse_depart', 'adresse_arrivee', 'date', 'heure', 'description') VALUES('','$regulier_ponctuel','$heure_depart','$adresse_depart','$adresse_arrivee','$date','$heure','$description')";

    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';


    mysql_close();  // on ferme la connexion











































    <?php


    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements
    error_reporting(e_all);

    // On commence par récupérer les champs
    if(isset($_POST['regulier_ponctuel']))      $regulier_ponctuel=$_POST['regulier_ponctuel'];
    else      $regulier_ponctuel="";

    if(isset($_POST['heure_depart']))      $heure_depart=$_POST['heure_depart'];
    else      $heure_depart="";

    if(isset($_POST['adresse_depart']))      $adresse_depart=$_POST['adresse_depart'];
    else      $adresse_depart="";

    if(isset($_POST['adresse_arrivee']))      $adresse_arrivee=$_POST['adresse_arrivee'];
    else      $adresse_arrivee="";

    if(isset($_POST['date']))      $date=$_POST['date'];
    else      $date="";


    if(isset($_POST['heure']))      $heure=$_POST['heure'];
    else      $heure="";

    if(isset($_POST['description']))      $description=$_POST['description'];
    else      $description="";


    // connexion à la base








    try {
      $bdd = new PDO('mysql:host=localhost;dbname=courts-circuits','root','Cikatan13', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (PDOException $e) {
       echo 'Échec lors de la connexion : ' . $e->getMessage();
    }

    // sélection de la base

        // on écrit la requête sql
        $sql = "INSERT INTO courts-circuits ('regulier_ponctuel', 'heure_depart', 'adresse_depart', 'adresse_arrivee', 'date', 'heure', 'description') VALUES('','$regulier_ponctuel','$heure_depart','$adresse_depart','$adresse_arrivee','$date','$heure','$description')";

        // on insère les informations du formulaire dans la table


        // on affiche le résultat pour le visiteur
        echo 'Vos infos on été ajoutées.';


        mysql_close();  // on ferme la connexion

    ?>

?>


























<?php




// On commence par récupérer les champs
if(isset($_POST['regulier_ponctuel']))      $regulier_ponctuel=$_POST['regulier_ponctuel'];
else      $regulier_ponctuel="";

if(isset($_POST['heure_depart']))      $heure_depart=$_POST['heure_depart'];
else      $heure_depart="";

if(isset($_POST['adresse_depart']))      $adresse_depart=$_POST['adresse_depart'];
else      $adresse_depart="";

if(isset($_POST['adresse_arrivee']))      $adresse_arrivee=$_POST['adresse_arrivee'];
else      $adresse_arrivee="";

if(isset($_POST['date']))      $date=$_POST['date'];
else      $date="";


if(isset($_POST['heure']))      $heure=$_POST['heure'];
else      $heure="";

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description="";


// connexion à la base

$bdd = new PDO('mysql:host=courtsciepcc.mysql.db;dbname=courtsciepcc','courtsciepcc','Mandr4gore', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));






try {
    $pdo = new PDO('mysql:host=localhost;dbname=northwind;charset=utf8', 'root', 'mdp');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
   echo 'Échec lors de la connexion : ' . $e->getMessage();
}
// sélection de la base

    // on écrit la requête sql
    $sql = "INSERT INTO courtsciepcc ('regulier_ponctuel', 'heure_depart', 'adresse_depart', 'adresse_arrivee', 'date', 'heure', 'description') VALUES('','$regulier_ponctuel','$heure_depart','$adresse_depart','$adresse_arrivee','$date','$heure','$description')";

    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';


    mysql_close();  // on ferme la connexion

?>


























<?php


var_dump($_POST);


// On commence par récupérer les champs
if(isset($_POST['regulier_ponctuel']))      $regulier_ponctuel=$_POST['regulier_ponctuel'];
else      $regulier_ponctuel="";

if(isset($_POST['regulier']))      $regulier=$_POST['regulier'];
else      $regulier="";

if(isset($_POST['heure_depart']))      $heure_depart=$_POST['heure_depart'];
else      $heure_depart="";

if(isset($_POST['adresse_depart']))      $adresse_depart=$_POST['adresse_depart'];
else      $adresse_depart="";

if(isset($_POST['adresse_arrivee']))      $adresse_arrivee=$_POST['adresse_arrivee'];
else      $adresse_arrivee="";

if(isset($_POST['date']))      $date=$_POST['date'];
else      $date="";


if(isset($_POST['heure']))      $heure=$_POST['heure'];
else      $heure="";

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description="";





// On vérifie si les champs sont vides
if(empty($ponctuel) OR empty($regulier) OR empty($date) OR empty($heure) OR empty($description))
    {
    echo '<font color="red">Attention, aucun champs ne peut rester vide !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else
    {
       // connexion à la base
$db = mysql_connect('localhost', 'courtsciepcc', 'Mandr4gore')  or die('Erreur de connexion '.mysql_error());
// sélection de la base

    mysql_select_db('courtsciepcc',$db)  or die('Erreur de selection '.mysql_error());

    // on écrit la requête sql
    $sql = "INSERT INTO courtsciepcc(ponctuel regulier date heure description) VALUES('','$ponctuel','$regulier','$date','$heure','$description')";

    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';


    mysql_close();  // on ferme la connexion
    }
?>
