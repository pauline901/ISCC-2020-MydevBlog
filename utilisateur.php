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



function afficher_utilisateur($pdo)
{
$query=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

foreach($query as $user)
{
    echo '<li><strong>Login : </strong>'.$user['loginn'].'</li><br/><strong>Mot de passe : </strong>'.$user['passwordd'].'';
    echo '<br/>';

?>
<br/>
<form method="post" action="supprimer_utilisateur.php?id=<?php echo $user['id']?>">
<button type="submit" name="bouton_suppr">Supprimer l'utilisateur</button>
</form>
<br/>

<?php
}
}

$pdo = connect_to_database();
afficher_utilisateur($pdo);

?>