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

<!--cartes des produits-->
<div class="container">
  <section class="row">
    <p>Appercue de votre article</p>

      <article class="col s12 m6 l4">
        <div class="card blue lighten-4">
          <figure class="card-image">
            <img src="<?php echo $_POST ['monfichier'] ?>" >
            <p > <?php echo $_POST ['titre'] ?></p>
            <p> <?php echo $_POST ['prix'] ?> </p>
          </figure>
          <div class="card-content">
            <p> <?php echo $_POST ['descriptif'] ?> </p>
            <a class="btn-floating  waves-effect waves-light blue" href="detailProduit.php?article=<?php echo $key; ?>"><i class="material-icons">add</i></a>
          </div>
        </div>

</section>
</div>

<p><a id="retour" href="connexion.php">Retour au formulaire</a></p>
<span>ou</span><input type="button" name="valider" value="valider">
</body>
</html>
