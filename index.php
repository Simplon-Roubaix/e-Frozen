

<?php
require ('products.php');
include ("header.php");?>

<!--cartes des produits-->

<?php foreach ($products as $key => $value): ?>

  <section class="row">
      <article class="col s12 m6">
        <div class="card">
          <figure class="card-image">
            <img src="<?php echo $value ['image'] ?>" >
            <span > <?php echo $value ['titre'] ?></span>
            <span> <?php echo $value ['prix'] ?> </span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </figure>
          <div class="card-content">
            <p> <?php echo $value ['descriptif'] ?> </p>
          </div>
        </div>
      </article>
    </section>



<?php endforeach; ?>

<?php include ('footer.php') ?>
