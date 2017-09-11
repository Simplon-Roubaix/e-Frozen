

<?php
require ('products.php');
include ("header.php");?>

<!--cartes des produits-->
<div class="container">
  <section class="row">
<?php foreach ($products as $key => $value): ?>
      <article class="col s12 m6 l4">
        <div class="card">
          <figure class="card-image">
            <img src="<?php echo $value ['image'] ?>" >
            <span > <?php echo $value ['titre'] ?></span>
            <span> <?php echo $value ['prix'] ?> </span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </figure>
          <div class="card-content">
            <p> <?php echo $value ['mini_description'] ?> </p>
          </div>
        </div>
      </article>
<?php endforeach; ?>
</section>
</div>

<?php include ('footer.php') ?>
