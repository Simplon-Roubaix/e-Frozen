<?php
include('connectToDb.php');
include ('header.php');
// récupère les articles et leur image correspondante
$req = $bdd->query('SELECT img.source src, art.*
                    FROM articles art
                    INNER JOIN images img
                    ON img.id_article = art.id');
?>

<!--cartes des produits-->
<div class="container">
  <section class="row">
<?php
while ($donnees = $req->fetch())
{
// echo '<pre>';
// print_r($donnees);
// echo '<pre>';
?>
      <article class="col s12 m6 l4">
        <div class="card blue lighten-4">
          <figure class="card-image">
            <img src="<?php echo $donnees ['src']; ?>" >
            <p > <?php echo $donnees ['titre']; ?></p>
            <p> <?php echo $donnees ['prix']; ?> </p>
          </figure>
          <div class="card-content">
            <p> <?php echo $donnees ['mini_contenu']; ?> </p>
            <a class="btn-floating  waves-effect waves-light blue" href="detailProduit.php?article=<?php echo $donnees['id']; ?>"><i class="material-icons">add</i></a>
          </div>
        </div>
      </article>
<?php
}
$req->closeCursor();
?>
</section>
</div>

<?php include ('footer.php'); ?>
