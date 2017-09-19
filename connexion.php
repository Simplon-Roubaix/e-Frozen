<!--page qui recoit les données du formulaire-->

<!--conexion base de donnée-->
<?php
include('connectToDb.php');
include ('header.php');


// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM cpte_user WHERE nom = :pseudo AND login = :login');
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

// on peut dire au membre qu'il est connecté sur toute les pages du site

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour'. $_SESSION['pseudo'] , ' vous pouvez ajouter un nouvel article grace au formulaire ci-dessous: ';
}
?>
<form action="deconnexion.php" method="post">
  <button type="submit" value="valider">Déconnexion</button>
</form>
<?php include ('formulaire.php');?>
<?php include ('footer.php');?>
