<!--page qui recoit les données du formulaire-->
<!--conexion base de donnée-->
<?php include ('header.php');?>

<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=frozen;charset=utf8', 'root', 'simplon2017',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM cpte_user WHERE pseudo = :pseudo AND login = :login');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'login' => $_POST['login']));

$resultat = $req->fetch();

if (!$resultat)//si resultat=false
{
    echo 'Erreur identifiant ou mot de passe !';
}
else
{
  //creation des variables pour stocker l'id et pseudo du membre//
    session_start();//demarrage le systeme de session//
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo 'Vous êtes connecté !';
}
 ?>
<!--on peut dire au membre qu'il est connecté sur toute les pages du site-->
<?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour, ajouter un nouvel article ' . $_SESSION['pseudo'];
}
?>
