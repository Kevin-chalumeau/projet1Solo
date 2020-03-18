<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title> Ville de Tours </title>
        <meta name="description" content="Contacts de la ville de tours">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <a href="index.php">
        <?php require "inc/header.php";
        ?>
        <main class="main-5">
            
            <section class="ctn-class">
                    <h2>Les contacts indispensables</h2>
                    <p class="p-3">L'office de Tourisme : </p>
                    <p class="p-3"><a href="https://www.tours-tourisme.fr/">Office de Tourisme</a></p>
                    <p class="p-3">La Ville de Tours : </p>
                    <p class="p-3"><a href="https://www.tours.fr/">Ville de Tours</a></p> 

                    <h2>Contactez les rédacteurs du site</h2>
                    <p class="p-3">Kévin 🤩 : 555-556-777</p>
                    <p class="p-3">Elise 🐿 : 555-557-888</p>
                    <p class="p-3">Moshtagh 🙉 : 555-559-767</p>
                    <p class="p-3">Benjamin 🤪 : 555-557-678</p>
            </section>
            <section>
                <h2>Expérience personnalisée</h2>
                <p class="p-3">Complétez ce formulaire afin que nous puissions vous proposer une expérience unique lors de votre séjour à Tours</p>
                <form >
                    <label for="fname">Nom : </label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Prenom : </label><br>
                    <input type="text" id="lname" name="lname"><br> 
                    <label for="email" >Mail</label> 
                    <input type="text" id="email" name="email">
                    <label for="story">Décrivez nous vos centres d'intérêts : </label><br>
                    <textarea id="story" name="story" rows="7" cols="40"></textarea><br>
                    <input type="submit" name="envoyer">
                    
                </form>
            </section>
        
        </main>
        <?php require "inc/footer.php";
        ?>
    </body>
</html>
