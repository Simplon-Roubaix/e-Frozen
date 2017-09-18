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

	<header>
      	<div class="header">
        	<figure>
        		<img class="responsive-img" src="<?php echo $infosSite['logo'];?>" alt="logo">
      		</figure>
      		<div id="container">
        		<h1><?php echo $infosSite['titre'];?></h1>
        		<span><?php echo $infosSite['sousTitre'];?></span>
      		</div>
      	</div>
	</header>

  <form action="connexion.php" method="post" class="form-inline">
        <div class="form-group">

          <label for="inputPassword4">Password</label>

          <input type="password" name="mot_de_passe" id="inputPassword4" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">

          <button type="submit" value="valider">Submit</button>
          <form action="deconnexion.php" method="post">
            <button type="submit" value="valider">Déconnexion</button>
          </form>
        </div>
      </form>
