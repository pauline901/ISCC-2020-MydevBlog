<?php


function connect_to_database() 
{
    $severname="localhost";
    $username="root";
    $password="";
    $databasename="base-site-routing";

    try
    {
        $pdo=new PDO("mysql:host=$severname;dbname=$databasename",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "<b>Vous êtes connecté</b><br/>";
        return $pdo;
    }

    catch(PDOException $e)
    {
        echo "<b>La connexion a échoué</b><br/>".$e->getMessage();
    }

    $sth = $dbh->prepare('SELECT , login, password 
                FROM utilisateurs 
                WHERE id');

$sth->execute(array('admin', 'login')); 
$login = $sth->fetchAll();

$sth->execute(array('2020', 'password')); 
$password = $sth->fetchAll();
}

$pdo=connect_to_database();



?>
