<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ajout_utilisateurs</title>
        
    </head>
<?php
session_start();
function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = "devblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();
        
    }
}

function login ($pdo){
    try{

     
            if (!empty($_POST['Login']) && !empty($_POST['Password']))
            {
                $login=$_POST['Login'];
                $password=$_POST['Password'];

                $requete=$pdo->query("SELECT loginn
                FROM utilisateurs");
                $res=$requete->fetchAll();
                $found = false;

                if ($res){
                    foreach($res as $user){
                        if ($user['loginn'] == $login) {
                            $found = true;
                        }
                    }
                    
                    if(!$found)
                    {
                        $sql="INSERT INTO utilisateurs (loginn, passwordd) VALUES('$login', '$password')";
                        $pdo->exec($sql);
                        echo '<p> Compte ajouté à la base de données avec succés.</p>';
                        echo '<p><a href="./devBlog-back.php?page=Utilisateurs">Retour à la liste des membres</a></p>';
                    } else{
                        echo "<p>Ce compte existe déjà.</p>";
                        echo '<p><a href="./devBlog-back.php?page=Utilisateurs">Retour à la liste des membres</a></p>';
                    }
                } else{
                    echo "<p>Ce compte n'a pas pu être enregistré dans la base de données. </p>";
                }
            }
        }
    catch(PDOException $e){
        echo "Login erreur" .$e->getMessage();

    }
}

$pdo= connect_to_database();
login($pdo);
?>
</html>
