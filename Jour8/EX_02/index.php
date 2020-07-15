
<html>
<head>
<meta charset="utf-8">
<title>site-vitrine</title>

<?php include("header.php"); ?>
</head>

<body>

<nav>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/?page=accueil">Accueil</a>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/?page=contact">Contact</a>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_02/?page=contact-form">Contact-form</a>
</nav>

<?php
if($_GET)
{

if($_GET["page"] == "accueil")
{
    include("vitrine-accueil.php");
}
elseif($_GET["page"]== "programme")
{
    include("vitrine-programme.php");
}
elseif($_GET["page"]== "contact")
{
    include("vitrine-contacts.php");
}
elseif($_GET["page"]== "contact-form")
{
    include("contact-form.php");
}
else
{
    include("fichier-404.php");
}
}

?>

<?php

include("footer.php");
?>
</body>

</html>
