<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ajout articles</title>


    </head>
<?php
function connect_to_database(){
    $servername ="localhost";
    $username="root";
    $password ="";
    $databasename="devblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return($pdo);
        echo"connexion";
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
function login ($pdo){

    
    try{ 
        if($_POST)
        {
        $nom=$_POST['nom'];
        $date=$_POST['date'];
        $auteur=$_POST['auteur'];
        $contenu=$_POST['contenu'];
        $extrait=$_POST['extrait'];
        }


        if ( !empty($nom) && !empty($date) && !empty($auteur) && !empty($contenu) && !empty($extrait)){
            $contenu=addslashes($contenu);
            $extrait=addslashes($extrait);

            $sql="INSERT INTO
            article (nom, datee, auteur, contenu, extrait)
            VALUES('$nom', '$date', '$auteur', '$contenu', '$extrait')";
            $pdo->exec($sql);
            echo '<p>Article ajouté à la base de données avec succès! </p>';
            echo '<p><a href="./devBlog-front.php?page=Articles"</a>Voir la liste des articles. </p>';
            }
        }
        catch(PDOException $e){
            echo '<p> Erreur de publication</p>' .$e->getMessage();
        }
    }
$pdo = connect_to_database();
login($pdo);
?>
</html>