<!DOCTYPE html>
<html>
<head>
<title>Tout sur les chevaux</title>
<meta charset="utf-8">
</head>

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
<ul>
<?php
function articles($pdo){
    $articles=$pdo->query("SELECT * FROM article")->fetchAll();

    foreach ($articles as $article){
        echo '<h4><li>'.$article['nom'].'</li></h4>';
        echo '<p>'.$article['extrait'].'</p>';

        $number_article=$article['numéro'];
    ?>

    <a href="./devBlog-front.php?page=Article&numéro=<?php echo $number_article?>">Lire l'article en entier.</a>
    <?php
    }
}
$pdo=connect_to_database();
articles($pdo);
?>
</ul>
</html>