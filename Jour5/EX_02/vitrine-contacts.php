<!DOCTYPE html>
<html>
    <title>Contact</title>
    <meta charset="uf-8">
    <link rel="stylesheet" href="vitrine.css">

    <?php include("header.php"); ?>

    <body>
        <h2>CONTACT</h2>

        <form method="POST" action="traitement.php">
            <p>
                <label>Votre Nom et Prénom : </label>
                
                <input type="text" name="Nom Prénom" id="pseudo" placeholder="Ex: Jean Meyer" size="30">
            </p>
            <p>
                <label>Votre adresse e-mail : </label>
                
                <input type="text" name="Adresse e-mail" id="e-mail" placeholder="Ex: jean.meyer@gmail.com" size="30">
            </p>
            <p>
                <label for="améliorer">Votre message : </label><br/>
                <textarea name="Message du contact" id="message" placeholder="Ex: Comment améliorer mon site ?"></textarea>
            </p>
            <p><input type="submit" id="bouton" value="Envoyer"></p>
        </form>
    </body>
    
    <!--Pied de page-->
    <br/>
    <br/>
    <br/>
    <?php include("footer.php"); ?>
</html>