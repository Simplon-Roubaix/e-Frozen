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


        <div class="row">
    <form id="ajout" method="post" action="cible.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input name="titre" type="text" class="validate">
          <label for="titre">Titre</label>
        </div>
        <div class="input-field col s6">
          <input name="prix" type="text" class="validate">
          <label for="prix">prix</label>
        </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="descriptif" class="materialize-textarea"></textarea>
          <label for="descriptif">Descriptif</label>
        </div>
      </div>



    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>


  <input type="submit" value="Valider" />

      </form>
    </div>








    </body>
    </html>
