<?php
$historique_commandes = array(5.49, 9.99, 5.49, 15.99, 25);

function afficher_commandes($historique_commandes) 
{
    foreach ($historique_commandes as $element)
    {
        echo "<p>Une commande de $element euros a été reçu.</p><br/>";
        
    }
    $array_sum = array_sum($historique_commandes);
    echo "<p>Le total des commandes est de $array_sum euros.</p>";
}

?>

<?php
afficher_commandes($historique_commandes);

?>