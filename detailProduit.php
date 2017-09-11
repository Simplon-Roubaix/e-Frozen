<?php
require ('products.php');
require ('infoSite.php');
$_GET['article'] = htmlspecialchars($_GET['article']);
$article = $_GET['article'];

if(isset($_GET['article']) AND array_key_exists($article, $products))
{

    include ('header.php');
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
            <div class="container">
                <p class="white col s12 center-align"><?php echo $products[$article]['descriptif1'] ?></p>
                <p class="white col s12 center-align"><?php echo $products[$article]['descriptif2'] ?></p>
                <p class="white col s12 center-align"><?php echo $products[$article]['descriptif3'] ?></p>
            </div>
        </div>
    </section>
<?php  
    include ('footer.php');
}
else
{
    include('404.php'); 
}
?>
