<!DOCTYPE html>
<html>
    <title>Connexion</title>
    <meta charset="uf-8">

    <body>
        <h2>Connexion</h2>

        <form method="POST" action="securite.php">
            <p>
                <label for="nom">Login : </label>
                
                <input type="text" name="Login" id="nom" size="30">
            </p>
            <p>
                <label for="password">Password : </label>
                
                <input type="password" name="Password" id="password" size="30">
            </p>
            
            <p><input type="submit" id="bouton" value="Connexion"></p>
        </form>
    </body>
    
</html>