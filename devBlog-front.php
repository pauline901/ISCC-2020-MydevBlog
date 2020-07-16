<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./front.css">
    <title>Pour tous</title>
</head>
<header>
    <h1>TOUS SUR LES CHEVAUX !!</h1>

    <nav class="content">
        <a href="./devBlog-front.php?page=Accueil">Accueil</a>
        <a href="./devBlog-front.php?page=Articles">Articles</a>
        <a href="./devBlog-front.php?page=Contact">Contact</a>
        <a href="./devBlog-front.php?page=Connexion">Connexion</a>
    </nav>
</header>
<body>
    
<?php
    if($_GET)
    {
    if($_GET["page"]== "Accueil")
    {
        echo "<h2>Mon projet !</h2>";
        include("accueil.php");
        ?>
        <br/>
        <img src="assetsD13/mustangs-photo-couverture-blog-cheval-aventure.jpg" alt="Chevaux">
        <br/>
        <?php


    }
    if($_GET["page"]== "Articles")
    {
        echo "<h2>Tout mes articles !</h2>";
        include("articles.php");
    }
    if($_GET["page"]== "Contact")
    {
        echo "<h2>Contactez moi !</h2>";
        include("contact.php");
    }
    if($_GET["page"]== "Connexion")
    {
        echo "<h2>Connexion</h2>";
        include("connexion.php");
    }
    if($_GET["page"]== "Article")
    {
        include("article.php");
    }
    }

    ?>

</body>

<footer>
    <h3>Mes autres sites :</h3>

    <ul>
    <li><a href="./Jour5/EX_02/vitrine-accueil.php">Epitech</a><p>   </p><a href="./Jour5/EX_02/vitrine-contacts.php">Epitech 2</a><p>   </p><a href="./Jour5/EX_02/vitrine-programme.php">Epitech 3</a></li>
    <br/>
    <li><a href="./Jour5/EX_03/t-shirt.php">T-shirt</a></li>
    <br/>
    <li><a href="./Jour7/EX_01/commandes.php">commandes</a></li>
    <br/>
    <li><a href="./Jour7/EX_02/double-tableau.php">Doubles tableaux</a></li>
    <br/>
    <li><a href="./Jour7/EX_02/produits.php">Tableau simple</a></li>
    <br/>
    <li><a href="./Jour7/EX_02/utiliser-objet.php">Timing</a></li>
    <br/>
    <li><a href="./Jour8/EX_02/">Summer Code Camp</a></li>
    <br/>
    <li><a href="./Jour12/EX_01/mini-site-routing.php">Mini-site routing</a></li>
    </ul>

    <h3>Mes réseaux</h3>

    <a href="https://www.facebook.com/pauline.baur1"><img src="assetsD13/fb-logo.jpg" width="50" height="50" alt="Facebook"></a>
    <a href="https://www.instagram.com/p.baur/"><img src="assetsD13/instagram-1581266_1280.webp" width="50" height="50" alt="Instagram"></a>
    <a href="https://www.linkedin.com/in/pauline-baur-473578198/"><img src="assetsD13/kisspng-linkedin-computer-icons-logo-professional-networks-5b0d65b29ec943.2054111815276046586504.jpg" width="50" height="50" alt="Linkedin" ></a>
    <a href="https://twitter.com/paulinebaur"><img src="logo-twitter-circle-png-transparent-image-1.png" width="50" height="50" alt="Twitter"></a>
    <a href="https://github.com/pauline901"><img src="github_PNG20.png" width="50" height="50" alt="Github"></a>
    <br/>
    <br/>
    <br/>
    <a href="./devBlog-back.php"><p>Page Administrateur</p></a>

</footer>

</html>