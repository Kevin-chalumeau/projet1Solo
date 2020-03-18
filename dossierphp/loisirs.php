<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Ville de Tours </title>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <a href="index.php">
        <?php require "inc/header.php";
        ?>
        <main class="main-4">
        <h2>Activités</h2>
        <div class="book-ctn-4">
        <section class="art-cadre">
            <div>
            <img class="book-img" src="https://images.pexels.com/photos/2527565/pexels-photo-2527565.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Parc d'accrobranche">
            </div>
            <div class="grid-box">
            <h3>Accro-branche</h3> 
            <p class="p-2">Tours possède deux parcs d'accrobranche <a href="http://www.gadawi-park.fr/">gadawi park</a>Le parc propose aussi des parties de paintball, entre amis ou même en famille.</p>
            </div>
        </section>
        <section class="art-cadre">
            <div>
            <img class="book-img" src="https://cdn.pixabay.com/photo/2016/01/22/11/50/live-escape-game-1155620_1280.jpg" alt="Escape Game">
            </div>
            <div class="grid-box">
            <h3>Escape Game</h3>
            <p class="p-2">Nous avons la chance d'avoir le choix en matière d'escape game à Tours : <br>
            <a href="https://tours.escapeyourself.fr/">Escape Yourself</a><br>
            <a href="https://toolate.fr/escape-game-tours/">Escape Too Late</a><br>
            <a href="https://www.escape-express.fr/">Escape express</a></p>
            
            </div>
        </section>
        <section class="art-cadre">
            <div>
            <img class="book-img" src="https://cdn.pixabay.com/photo/2016/01/19/14/55/mountain-bike-1149074_960_720.jpg" alt="Image Loire à Vélo">
            </div>
            <div class="grid-box">
            <h3>Loire à vélo</h3>
            <p class="p-2"><a href="https://www.loireavelo.fr/"> Loire à vélo</a> est un ensemble de chemin balisé permettant de rejoindre Nevers à Saint-Nazaire en passant par Tours.</p>
            </div>
        </section>
        </div>
        </main>
        <?php require "inc/footer.php";
        ?>
    </body>
</html>
