<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Création | ComiTIM</title>
    <link rel="stylesheet" href="css/compte.css">
    <?php include "html/links.html"; ?>
</head>

<body class="compte">
    <div id="transition"></div>
    <main>
        <h1>Créer un compte</h1>
        <form action="/creer">
            <div>
                <label for="nom_utilisateur">Nom d'utilisateur:</label>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur">
            </div>
            <div>
                <label for="mot_passe">Mot de passe:</label>
                <input type="text" name="mot_passe" id="mot_passe">
            </div>
            <div class="boutons">
                <button type="submit">Créer un compte</button>
                <button type="button" onclick="changePage(`connexion`)">Connexion</button>
            </div>
        </form>
    </main>
</body>

</html>