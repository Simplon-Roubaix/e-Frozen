<?php
require ('products.php');
require ('infoSite.php');
include ('header.php');
$article = $_GET['article'];
?>

<section class="container blue lighten-4">
    <div class="row">
        <h3 class="center-align"><?php echo $products[$article]['titre'] ?></h3>

        <figure class="col s12 m6 l4">
            <img src="<?php echo $products[$article]['image'] ?>" alt="">
        </figure>
        
        <div class="col s4 right">
            <p class="blue lighten-5 prix center-align"><?php echo $products[$article]['prix'] ?></p>
            <p class="blue lighten-5 addArticle center-align">add</p>
        </div>
        <p class="blue lighten-5 col s12"><?php echo $products[$article]['descriptif1'] ?></p>
        <p class="blue lighten-5 col s12"><?php echo $products[$article]['descriptif2'] ?></p>
        <p class="blue lighten-5 col s12"><?php echo $products[$article]['descriptif3'] ?></p>
    </div>
</section>

<?php 
include ('footer.php');
?>
