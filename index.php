<?php
require ('products.php');
require ('infoSite.php');
include ('header.php');
?>

<!--cartes des produits-->
<div class="container">
  <section class="row">
<?php foreach ($products as $key => $value): ?>
      <article class="col s12 m6 l4">
        <div class="card blue lighten-4">
          <figure class="card-image">
            <img src="<?php echo $value ['image'] ?>" >
            <p > <?php echo $value ['titre'] ?></p>
            <p> <?php echo $value ['prix'] ?> </p>
          </figure>
          <div class="card-content">
            <p> <?php echo $value ['mini_description'] ?> </p>
            <a class="btn-floating  waves-effect waves-light blue" href="detailProduit.php?article=<?php echo $key; ?>"><i class="material-icons">add</i></a>
          </div>
        </div>
      </article>
<?php endforeach; ?>
</section>
</div>

<?php include ('footer.php'); ?>
