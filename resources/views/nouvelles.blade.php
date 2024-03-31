<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nouvelles | ComiTIM</title>
    <link rel="stylesheet" href="css/accueil.css" />
    <?php include "html/links.html"; ?>
</head>

<body>
    <div id="transition"></div>
    <header class="hide">
        <?php include "html/main_nav.html"; ?>
        <script>
            setCurrentPage(2)
        </script>
        <nav class="secondary">
            <button onclick="showHeader()" id="expand">
                <span class="material-icons">expand_more</span>
            </button>
        </nav>
    </header>
    <main>
        <h1>Nouvelles</h1>
    </main>
</body>

</html>