<?php
require ('products.php');
require ('infoSite.php');
$_GET['article'] = htmlspecialchars($_GET['article']);
$article = $_GET['article'];

if(isset($_GET['article']) AND array_key_exists($article, $products))
{

    include ('header.php');
    $req = $bdd->query('SELECT img.source src, art.*
                        FROM articles art
                        INNER JOIN images img
                        ON img.id_article = art.id
                        WHERE art.id = \'' . $article . '\'');
    $donnees = $req->fetch();
?>

    <section class="container blue lighten-4">
        <div class="row">
            <h3 class="center-align"><?php echo $donnees['titre'] ?></h3>

            <figure class="col s12 m6 l4">
                <img src="<?php echo $donnees['src'] ?>" alt="">
            </figure>
            
            <div class="col s4 right">
                <p class="blue lighten-5 prix center-align"><?php echo $donnees['prix'] ?></p>
                <p class="blue lighten-5 addArticle center-align">add</p>
            </div>
            <div class="container">
                <p class="white col s12 center-align"><?php echo $donnees['contenu'] ?></p>
                <!-- <p class="white col s12 center-align"><?php //echo $donnees['descriptif2'] ?></p> -->
                <!-- <p class="white col s12 center-align"><?php //echo $donnees['descriptif3'] ?></p> -->
            </div>
        </div>
    </section>
<?php
    $req->closeCursor();
    include ('footer.php');
}
else
{
    include('404.php'); 
}
?>
