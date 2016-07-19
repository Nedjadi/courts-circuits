    <script>function message()
     {
       alert("<?php echo htmlspecialchars('Voici un message en JS écrit par PHP', ENT_QUOTES); ?>")
     }
     </script>
<?php


    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Enregistrer les erreurs dans un fichier de log
    ini_set('log_errors', 1);
    // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
    ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
    // Afficher les erreurs et les avertissements



// On commence par récupérer les champs
if(isset($_POST['regulier_ponctuel']))      $regulier_ponctuel=$_POST['regulier_ponctuel'];
else      $regulier_ponctuel="";

if(isset($_POST['heure_depart']))      $heure_depart=$_POST['heure_depart'];
else      $heure_depart="";

if(isset($_POST['adresse_depart']))      $adresse_depart=$_POST['adresse_depart'];
else      $adresse_depart="";

if(isset($_POST['adresse_arrivee']))      $adresse_arrivee=$_POST['adresse_arrivee'];
else      $adresse_arrivee="";

//if(isset($_POST['date']))      $date=$_POST['date'];
//else      $date="";
if(isset($_POST['date']))      $heure_depart=$_POST['date'];
else      $heure_depart="";

if(isset($_POST['heure']))      $heure=$_POST['heure'];
else      $heure="";

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description="";

if(isset($_POST['vehicule']))      $vehicule=$_POST['vehicule'];
else      $vehicule="";


// connexion à la base

$servername = "localhost";
$username = "root"; //marche avec Guillaume
$password = "Cikatan13"; //marche avec my2m3
$dbname = "courts-circuits"; //marche avec test

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);


// Check connection
// if ($con->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";



$bdd = new PDO('mysql:host=localhost;dbname=courts-circuits;charset=utf8','root','Cikatan13', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


// $bdd = new PDO('mysql:host=localhost;dbname=courts-circuits;charset=utf8', 'root', 'Cikatan13');
// sélection de la base

    // on écrit la requête sql
    $sql = "INSERT INTO HK_trajets(regulier_ponctuel,adresse_depart,adresse_arrivee,heure_depart,description,vehicule)
    VALUES('$regulier_ponctuel','$adresse_depart','$adresse_arrivee','$heure_depart','$description','$vehicule')";
    // echo($sql);
    // on insère les informations du formulaire dans la table

    $reponse = $bdd->query($sql);



    //mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    // on affiche le résultat pour le visiteur
    // echo 'Vos infos on été ajoutées.';

  echo("<script language='javascript'>
  alert('Votre trajet a bien été enregistré');
  document.location.href='formulaire_trajet.php';
  </script>");







?>
