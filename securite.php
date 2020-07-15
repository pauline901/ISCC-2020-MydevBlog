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
        echo "Vous êtes connecté à la base de donnée.<br/>";
        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function login($pdo)
{
    try{
        if (!empty($_POST['Login']) && !empty($_POST['Password'])){

            $login=$_POST['Login'];
            $password=$_POST['Password'];

            $requete=$pdo->query("SELECT passwordd
            FROM utilisateurs
            WHERE loginn='$login'");
            $res=$requete->fetchAll();

            if ($res){

                if($password == $res[0]['passwordd']){
                    echo "Bonjour ".$_POST['Login']. " !";
                    echo '<br>';
                    echo 'Vous êtes connectés';
                    echo '<br>';
                    echo '<p><a href="./devBlog-back.php">Page administrateur</a></p>';
                }
            }
            else{
                echo "<p>Mauvais couple identifiant / mot de passe.</p>";
                echo '<p><a href="./devBlog-front.php?page=Connexion">Revenir à la page de connexion</a></p>';
            }
        }
    }
    catch(PDOException $e){
        echo "Login erreur".$e->getMessage();
    }
}

$pdo = connect_to_database();
login($pdo);
?>