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

      <form id="ajout">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="titre">Titre du produit</label>
          <input type="text" class="form-control" id="titre">
        </div>
        <div class="form-group">
          <label for="prix">Prix du produit</label>
          <input type="text" class="form-control" id="prix">
        </div>
        <div class="form-group">
          <label for="descriptif">Descriptif</label>
          <textarea class="form-control" id="descriptif" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="image">Ajout fichier</label>
          <input type="file" class="form-control-file" id="image" aria-describedby="fileHelp">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>



    </body>
    </html>
