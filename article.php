<!DOCTYPE html>
<html>
<head>
<title>Tout sur les chevaux</title>
<meta charset="utf-8">

<?php

session_start();

function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "devblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
} 
$pdo=connect_to_database();

    $number_article=$_GET['numéro'];


    $articles=$pdo->query("SELECT numéro,nom,datee,auteur,contenu
    FROM article
    WHERE numéro='$number_article'")->fetchAll();

    foreach ($articles as $article)
    {
    echo '<h3>'.$article['nom'].'</h3>';
    echo '<p>'.$article['contenu'].'</p>';
    }


?>

</html>