<?php
//Appel du fichier de connexion
require_once('connexion_db/conn_db.php');

//Récupération des données par post
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$phone=$_POST['phone'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$password=$_POST['password'];

//Définition de la requête d'insertion
$sql_ajout="insert into customers values(null,'$prenom',
        '$nom','$sexe',null,null,null,'$phone','$prenom$nom','$email','$password',null,null,null)";

//Exécution de la requête
$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));
echo"<h2>Merci $prenom $nom! </h2><br><h1>Votre inscription a bien été prise en compte! Vous pouvez maintenant vous authentifier avec votre Email et Mot de passe récemment renseignés</h1>
    <a href='login.php'>Login</a>";
?>