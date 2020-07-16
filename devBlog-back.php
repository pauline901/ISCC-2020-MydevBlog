<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./back.css">
    <title>Administrateurs</title>
</head>
<header>
    <h1>TOUS SUR LES CHEVAUX !!</h1>

    <nav class="content">
        <a href="./devBlog-back.php?page=Accueil">Accueil</a>
        <a href="./devBlog-back.php?page=Ajout_articles">Ajout-articles</a>
        <a href="./devBlog-back.php?page=Ajout_utilisateurs">Ajout-utilisateurs</a>
        <a href="./devBlog-back.php?page=Utilisateurs">Utilisateurs</a>
    </nav>
</header>
<body>
    
<?php
    if($_GET)
    {
    if($_GET["page"]== "Accueil")
    {
        echo "<h1>Bienvenue !</h1>";
        include("accueil_back.php");
    }
    if($_GET["page"]== "Ajout_articles")
    {
        echo "<h1>Rajoutez vos articles !</h1>";
        echo "<h5>N'oubliez pas de signer ;) </h5>";
?>

        <form enctype="multipart/form-data" action="ajout-articles.php" method="POST">
                <p>Nom de l'article : <input type="text" name="nom" placeholder="Ex : Les différentes robes des chevaux."/></p><br/>
                <p>Date de publication : <input type="datetime-local" name="date" placeholder="Ex : 15/07/2020"/></p><br/>
                <p>Image : <input type="file" name="image"/></p><br/>
                <p>Auteur : <input type="text" name="auteur" placeholder="Ex : Jean Meyer"/></p><br/>
                <textarea id="contenu" name="contenu" rows="30" cols="100">Contenu de l'article</textarea><br/>
                <textarea id="extrait" name="extrait" rows="20" cols="100">Extrait de l'article</textarea><br/>
                <input type="submit" name="submit" value="Envoyer"/><br/>

        </form>
<?php
        include("ajout-articles.php");
    }
    if($_GET["page"]== "Ajout_utilisateurs")
    {
        echo "<h1>Inscrivez-vous !</h1>";

?>

        <form enctype="multipart/form-data" action="ajout-utilisateur.php" method="POST">
                <p>Login : <input type="text" name="Login"/></p>
                <p>Password : <input type="password" name="Password" placeholder="Ex : 0000"/></p>
                <input type="submit" name="submit" value="Envoyer"/><br/>
        </form>

<?php
        include("ajout-utilisateur.php");
    }
    if($_GET["page"]== "Utilisateurs")
    {
        echo "<h1>Les membres :</h1>";
        include("utilisateur.php");
    }
    }

    ?>



</body>
<br/>
<br/>
<br/>
<footer>

<a href="./devBlog-front.php"><b>Clique ici pour retourner au front-office !</b></a><br/>
<br/>
<img src="assetsD13/mustangs-photo-couverture-blog-cheval-aventure.jpg" alt="Chevaux">

</footer>

</html>