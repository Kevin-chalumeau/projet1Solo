<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Sites touristiques </title>
        <meta name="description" content="Sites touristiques">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
<body>
    <a href="index.php">
    <?php require "inc/header.php";
    ?>
    <main class="main-2">
        
        <h2>Sites touristiques</h2>
        <div class="book-ctn">
            
            <section class="art-cadre">
                <div>
              <img class="book-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Tours_cathedrale_face_NS_ter.jpg/852px-Tours_cathedrale_face_NS_ter.jpg" alt="Cathédrale Saint-Gatien">
              </div>
              <div>
              <h3>Cathédrale</h3>
              <p class="p-2">La cathédrale de Tours de style gothique et gothique flambloyant est un symbole de la ville chargé d'histoire. Elle est classée monument historique depuis 1862.</p>
              <p class="p-2">Pour plus d'informations, visitez le <br> <a href="https://www.tours-tourisme.fr/voir-faire/activites-gratuites/468069-cathedrale-saint-gatien">site de la ville.</a></p>
            </div >
            </section>
            <section class="art-cadre">
                <div>
              <img class="book-img" src="https://cdn.pixabay.com/photo/2019/12/05/18/20/loire-4675855_1280.jpg" alt="Bords de Loire">
            </div>
            <div class="grid-box">
              <h3>Bords de Loire</h3>
              <p class="p-2">A pied ou à vélo, venez flâner sur les bords de Loire.</p>
              <p class="p-2"><a href="https://www.loireavelo.fr">La Loire à vélo</a> <br>
              <a href="https://www.visorando.com/randonnee-tours.html">Randonnnées à Tours</a></p>
            </div>
            </section>
            <section class="art-cadre">
                <div>
              <img class="book-img" src="https://cdn.pixabay.com/photo/2016/01/05/09/11/royal-chateau-of-amboise-1122154_1280.jpg" alt="Château d'Amboise">
              </div>
              <div class="grid-box">
              <h3>Amboise</h3>
              <p class="p-2">La ville de Tours est située au coeur des châteaux de la Loire. <br>
              <a href="https://www.amboise-valdeloire.com/patrimoine-culturel/chateau-royal-damboise/">Venez visiter le château d'Amboise !</a></p>
            </div>
            </section>
        </div>
     </main>
        <?php require "inc/footer.php";
        ?>
    </body>
</html>
