<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>t-shirt PHP</title>
</head>
<body>
    <?php
        $nom_produit="T-shirt simple";
        $couleur="Blanc";
        $prix=10.50;
        $disponible=false;
        $quantite=10;
        $prix_trois=$prix*3;
        $prix_total=$prix*$quantite;
        $reste_stock=$quantite-3;

        echo"<h3>Le nom du produit est $nom_produit</h3>";
        echo"<h3>Il reste $quantite produits en stock</h3>";
        echo"<h3>Le produit $nom_produit est de couleur $couleur</h3>";

        echo"<h4>Acheter 3 produits couterait $prix_trois</h4>";
        echo"<h4>Acheter la totalité des produits disponibles couterait $prix_total</h4>";
        echo"<h4>Si 3 produits sont vendus, il me reste $reste_stock produits en stock</h4>";

        if($disponible==true)
        {
            echo"<p>Le produit $nom_produit est disponible en ligne.</p><br/>";
        }
        else
        {
            echo"<p>Le produit $nom_produit n'est malheureusement plus disponible.</p><br/>";
        }
        if($quantite>5)
        {
            echo"<p>Il reste $quantite produits en magasin.</p><br/>";
            $autorisation_enter="Oui";
        }
        else
        {
            echo"<p>Il ne reste plus que $quantite produits en magasin.</p><br/>";
            $autorisation_enter="Non";
        }
        if($quantite=1)
        {
            echo"<p>Il ne reste qu'un produit en magasin.</p><br/>";
        }
        if($quantite=0)
        {
            echo"<p>Il ne reste plus de produit en magasin.</p><br/>";
        }
    ?>
</body>
</html>