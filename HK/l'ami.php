<?php
	// vérifie si les champ du formulaire son bien remplis
	if (isset($_POST['bdNom']) && isset($_POST['bdLogin']) && isset($_POST['bdPws']) && isset($_POST['bdHost']) && isset($_POST['adminLogin']) && isset($_POST['adminPws'])) {
​
		//nom du ficher de config
		$addFichier = 'var.php';

		// Variabe pour la basse de donner
		$bdNom=$_POST['bdNom'];
		$bdLogin=$_POST['bdLogin'];
		$bdPws=$_POST['bdPws'];
		$bdHost=$_POST['bdHost'];

		// Variable pour le compte admin
		$adminLogin=$_POST['adminLogin'];
		$adminPws=sha1($_POST['adminPws']);
​
		// connexion à Mysql sans base de données avec gestion d'erreur
		try {
			$pdo = new PDO('mysql:host='.$bdHost, $bdLogin, $bdPws);
		}
		catch (Exception $e) {
	        die('Erreur : ' . $e->getMessage());
		}

		// création de la Basse de donner
		$requete = "CREATE DATABASE IF NOT EXISTS `".$bdNom."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
		$pdo->prepare($requete)->execute();

		// connexion à la Basse de donner
		try {
			$pdo = new PDO("mysql:host=".$bdHost.";dbname=".$bdNom, $bdLogin, $bdPws);
		}
		catch (Exception $e) {
	        die('Erreur : ' . $e->getMessage());
		}

		// Création des tables : config, admin, catégorie, produit.
		$requete = "CREATE TABLE IF NOT EXISTS `config`(
			`non_du_site` VARCHAR( 255 ) NOT NULL PRIMARY KEY ,
			`slogan` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`url` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`description` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`mot_clef` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$pdo->prepare($requete)->execute();
		$requete = "CREATE TABLE IF NOT EXISTS `admin`(
			`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
			`pseudo` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`pws` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`facebook` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`twitter` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`telephone` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`mail` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$pdo->prepare($requete)->execute();
		$requete = "CREATE TABLE IF NOT EXISTS `categorie`(
			`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
			`categorie` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$pdo->prepare($requete)->execute();
		$requete = "CREATE TABLE IF NOT EXISTS `produit`(
			`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
			`id_categorie` int(255) NOT NULL ,
			`produit` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`photo` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
			`description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
			`prix` float(5,2) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		$pdo->prepare($requete)->execute();

		// on entre le login et le pws de l'admin
		$requete = "INSERT INTO admin VALUES (
			'',
			:pseudo,
			:pws,
			'',
			'',
			'',
			''
			)";
		$pdo->prepare($requete)->execute(array(
			'pseudo' => $adminLogin,
			'pws' => $adminPws,
			));
​
		// recupe des variable pour l’accès a la bdd dans un ficher et création de l'interrupteur d’installation
	    $varFichier = fopen('var.php', 'a+');
		fputs($varFichier, "<?php \r\n");
		fputs($varFichier, "// interupteur d'instalation\r\n");
		fputs($varFichier, "\$instBool=TRUE;\r\n");
		fputs($varFichier, "// variable pour les conection au basse de donner\r\n");
		fputs($varFichier, "\$bdNom='".$bdNom."';\r\n");
		fputs($varFichier, "\$bdLogin='".$bdLogin."';\r\n");
		fputs($varFichier, "\$bdPws='".$bdPws."';\r\n");
		fputs($varFichier, "\$bdHost='".$bdHost."';\r\n");
		fputs($varFichier, "?> \r\n");
		fclose($varFichier);

		//redirection sur l'index
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = '../index.php';
		header("Location: http://".$host.$uri."/".$extra."");
		exit;
	}
?>
