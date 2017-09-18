<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>E-commerce PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <?php
            // Connexion à la base de données
            try
            {
            	$bdd = new PDO('mysql:host=localhost;dbname=frozen;charset=utf8', 'root', 'simplon2017');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
      // requete mysql:On récupère les infos
            $req = $bdd->query('SELECT * FROM info_site');
            $reqimg = $bdd->query('SELECT * FROM images WHERE alt=\'logo\'');

            //affichage resultat de la requete//
            $donnees = $req->fetch();
            $imag=$reqimg->fetch();


            ?>


	<header>
      	<div class="header">
        	<figure>
        		<img class="responsive-img" src="<?php echo $imag['source'];?>" alt="logo">
      		</figure>
      		<div id="container">
        		<h1><?php echo ($donnees['titre']);?></h1>
        		<span><?php echo ($donnees['sous_titre']);?></span>
      		</div>
      	</div>
	</header>

  <?php
         // Fin de la boucle
        $req->closeCursor();
        ?>

  <form id="membre" action="connexion.php" method="post" class="form-inline">
        <div class="form-group">

          <label for="pseudo">Pseudo</label>

          <input type="text" name="pseudo" id="pseudo" class="form-control mx-sm-3">

          <label for="inputPassword4">Password</label>

          <input type="password" name="login" id="inputPassword4" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">

          <button type="submit" value="valider">connexion</button>


        </div>
      </form>

      
    </body>
    </html>
