<?php
function connect_to_database()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "devblog";

    try
    {
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e)
    {
        echo "Erreur :". $e->getMessage();
    }

}

function supprimer_utilisateur($pdo)
{
    $id_user=$_GET['id'];
    $_POST['boutton_suppr']= $sql = "DELETE FROM utilisateurs WHERE id='$id_user'";
    $sth=$pdo->prepare($sql);
    $sth->execute();
    echo '<p>Suppression exécuté</p>';
}

$pdo=connect_to_database();
supprimer_utilisateur($pdo);
?>