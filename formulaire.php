<?php include('header.php') ?>

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
