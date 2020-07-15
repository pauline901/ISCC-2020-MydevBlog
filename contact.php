<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>TOUS SUR LES CHEVAUX !!</title>

<body>

    <form method="POST" action="./traitement.php">
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
            <textarea name="Message du contact" id="message" size="200" placeholder="Ex: De quoi parler dans mon prochain article ?"></textarea>
        </p>
        <p><input type="submit" id="bouton" value="Envoyer"></p>
    </form>
</body>

</html>