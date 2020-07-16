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
} ?>

<?php 
function afficher_article_entier($pdo){
    $number_article=$_GET['numéro'];


    $articles=$pdo->query("SELECT * FROM article
    WHERE numéro='$number_article'")->fetchAll();

    echo '<h1>'.$articles[0]['nom'].'</h1>';
    echo '<p>'.$articles[0]['contenu'].'</p>';
}
$pdo=connect_to_database();
afficher_article_entier($pdo);
?>

</html>