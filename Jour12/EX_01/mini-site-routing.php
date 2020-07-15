<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>mini-site-routing</title>
</head>

<body>
    <h2>NAVIGATION </h2>
    <nav class="menu">
        <li><a href="mini-site-routing.php?page=1">Accueil</a></li><br/>
        <li><a href="mini-site-routing.php?page=2">Page 1</a></li><br/>
        <li><a href="mini-site-routing.php?page=3">Page 2</a></li><br/>
        <li><a href="connexion.php?page=connexion">Connexion</a></li><br/>
    </nav>

    <?php
    if($_COOKIE['id'])
    {
        echo '<a href="admin.php?page=admin">Admin</a>';
    }
    ?>

    <form enctype="multipart/form-data" action="admin.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
        <input name="userfile" type="file" accept="image/x-png,image/jpg,image/jpeg" />
        <input name="descriptione" type="text" placeholder="Description" />
        <input name="titre" type="text" placeholder="Titre" />
        <input type="submit" value="Envoyer le fichier" />
    </form>

    <?php
        echo $_FILES;
    ?>

    <?php
    if($_GET)
    {
    if($_GET["page"]== "1")
    {
        echo "<h1>Accueil !</h1>";
    }
    if($_GET["page"]== "2")
    {
        echo "<h1>Page 2 !</h1>";
    }
    if($_GET["page"]== "3")
    {
        echo "<h1>Page 3 !</h1>";
    }
    if($_GET["page"]== "connexion")
    {
        echo "<h1>Connexion</h1>";
    }
    }

    ?>

</body>
<footer>
<?php

session_start();


if(isset($_SESSION["id"]))
{
    echo '<p>Login : ' .$_SESSION["id"]. '</p>';
    echo '<p> Description : ' .$_SESSION["description"]. '</p>';
}
else
{
    header('http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion');
}
?>

<img src="image/logo.jpg" alt="logo">
</footer>


</html>