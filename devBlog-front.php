<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <h1>TOUS SUR LES CHEVAUX !!</h1>

    <nav class="content">
        <a href="http://localhost/ISCC/ISCC-2020-MydevBlog/devBlog-front.php?page=Accueil">Accueil</a>
        <a href="http://localhost/ISCC/ISCC-2020-MydevBlog/devBlog-front.php?page=Articles">Articles</a>
        <a href="http://localhost/ISCC/ISCC-2020-MydevBlog/devBlog-front.php?page=Contact">Contact</a>
        <a href="http://localhost/ISCC/ISCC-2020-MydevBlog/devBlog-front.php?page=Connexion">Connexion</a>
    </nav>
</header>
<body>
    
<?php
    if($_GET)
    {
    if($_GET["page"]== "Accueil")
    {
        echo "<h1>Mon projet !</h1>";
        include("accueil.php");
    }
    if($_GET["page"]== "Articles")
    {
        echo "<h1>Tout mes articles !</h1>";
        include("articles.php");
    }
    if($_GET["page"]== "Contact")
    {
        echo "<h1>Contactez moi !</h1>";
        include("contact.php");
    }
    if($_GET["page"]== "Connexion")
    {
        echo "<h1>Connexion</h1>";
        include("connexion.php");
    }
    }

    ?>

</body>

<footer>
    <h3>Mes autres sites :</h3>

    <ul>
    <li><a href="http://localhost/ISCC/ISCC-2020-J05/EX_02/vitrine-accueil.php">Epitech</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J05/EX_03/t-shirt.php">T-shirt</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J07/EX_01/commandes.php">commandes</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J07/EX_02/double-tableau.php">Doubles tableaux</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J07/EX_02/produits.php">Tableau simple</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J07/EX_02/utiliser-objet.php">Timing</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/">Summer Code Camp</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php">Mini-site routing</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J03/mon-cv.html">CV</a></li>
    <li><a href="http://localhost/ISCC/ISCC-2020-J12/EX_01/mini-site-routing.php">Mini-site routing (2)</a></li>
    </ul>

    <h3>Mes réseaux</h3>

    <a href="https://www.facebook.com/pauline.baur1"><img src="assetsD13/fb-logo.jpg" width="50" height="50" alt="Facebook"></a>
    <a href="https://www.instagram.com/p.baur/"><img src="assetsD13/instagram-1581266_1280.webp" width="50" height="50" alt="Instagram"></a>
    <a href="https://www.linkedin.com/in/pauline-baur-473578198/"><img src="assetsD13/kisspng-linkedin-computer-icons-logo-professional-networks-5b0d65b29ec943.2054111815276046586504.jpg" width="50" height="50" alt="Linkedin" ></a>
    <a href="https://twitter.com/paulinebaur"><img src="logo-twitter-circle-png-transparent-image-1.png" width="50" height="50" alt="Twitter"></a>
    <a href="https://github.com/pauline901"><img src="github_PNG20.png" width="50" height="50" alt="Github"></a>

</footer>

</html>