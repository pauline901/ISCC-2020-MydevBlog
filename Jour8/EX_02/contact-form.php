<?php
if (empty($_POST))
{
    echo "<p>Aucunes données reçus.</p>";
}
else{
    echo "<p>Nom et Prénom : ".$_POST["nom"]."</p>";
    echo "<p>E-mail : ".$_POST["email"]."</p>";
    echo "<p>Message : ".$_POST["message"]."</p>";

}
?>