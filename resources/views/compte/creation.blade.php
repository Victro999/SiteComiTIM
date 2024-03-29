<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Création | ComiTIM</title>
    <link rel="stylesheet" href="css/compte.css">
    <?php include "html/links.html"; ?>
</head>

<body>
    <div id="transition"></div>
    <main>
        <h1>Créer un compte</h1>
        <form action="/connecter">
            <input type="text" name="courriel">
            <input type="text" name="mot_passe">
            <button type="submit">Créer un compte</button>
        </form>
        <button onclick="changePage(`connexion`)">Connexion</button>
    </main>
</body>

</html>