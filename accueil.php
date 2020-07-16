<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>TOUS SUR LES CHEVAUX !!</title>

<body>

    <p>Bonjour chers internautes et passionnés d'équitation ! <br/>
        Je m'appelle Baur Pauline, je pratique l'équitation depuis que j'ai 4 ans et je suis passionné d'équitation depuis toujours, j'ai 2 chevaux, une ponette et une autre ponette en demi-pension. 
        Vous les trouverez dans mon premier article ! ;) <br/>
        Mon projet est donc de vous partagez ma passion, vous donnez des petites astuces pour habituer vos chevaux à certaines choses qui pour le moment n'acceptent pas. <br/>
        Je vais vous expliquer les bien faits d'une demi-pension et ce que les chevux peuvent vous attribué comme sentiment de joie et de liberté. <br/>
        J'espère qu'aprés une petite visite sur mon blog vous serez encore plus passionné, et pour d'autres que vous trouverez l'équitation et les chevaux génials ! <br/> 
    </p>
</body>

<?php
function connect_to_database(){
    $servername ="localhost";
    $username="root";
    $password ="";
    $databasename="devblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return($pdo);
        echo"connexion";
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
function recup_5_articles($pdo){
            $articles=$pdo->query("SELECT * FROM article")->fetchAll();

            foreach($articles as $article){
                echo '<h4>' .$article['nom'].'<br></h4>';
                echo '<p>' .$article['extrait'].'</p>';
                $number_article=$article['numéro'];
            ?>

            <a href="./devBlog-front.php?page=Articles&numéro=<?php echo $number_article?>">Lire l'article en entier</a>




            <?php
            }
        }
        $pdo=connect_to_database();
        recup_5_articles($pdo);
        ?>

</html>