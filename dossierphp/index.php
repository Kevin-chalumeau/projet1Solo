<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Ville de Tours </title>
        <meta name="description" content="presentation de la ville de tours">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <?php require "inc/header.php";
    ?>
    
    <body>
        <main>
         <a class="link-T" href="sitestouristiques.php">
            <section class="Touristique main-cover">
            <h2>Sites touristiques</h2>
                <div class="txt-cadre">
                <p class="p-2">Vallée de la Loire classée au patrimoine mondial de l'UNESCO</p>
               </div>
          </section>
        </a>
        <a class="link-T" href="toursbynight.php">
           <section class="Toursbynight main-cover">
               <h2>toursbynight</h2>
               <div class="txt-cadre">
                <p class="p-2">Venez expérimenter la vie nocturne tourangelle</p>
               </div>   
            </section>
        </a>
        <a class="link-T" href="loisirs.php">
            <section class="Loisirs main-cover">
            <h2>Loisirs</h2>
            <div class="txt-cadre">
                <p class="p-2">Des activités pour tous les goûts et tout age</p>
            </div>
            </section>
        </a>
        </main>
        <?php require "inc/footer.php";
        ?>
    </body>
</html>
