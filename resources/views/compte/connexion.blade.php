<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion | ComiTIM</title>
    <link rel="stylesheet" href="css/compte.css">
    <?php include "html/links.html"; ?>
</head>

<body>
    <div id="transition"></div>
    <main>
        <h1>Connexion</h1>
        <form action="/connecter">
            <input type="text" name="courriel">
            <input type="text" name="mot_passe">
            <button type="submit">Connexion</button>
        </form>
        <button onclick="changePage(`creation`)">Créer un compte</button>
    </main>
</body>

</html>