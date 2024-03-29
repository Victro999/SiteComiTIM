<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil | ComiTIM</title>
    <link rel="stylesheet" href="css/accueil.css" />
    <?php include "html/links.html"; ?>
</head>

<body>
    <div id="transition"></div>
    <header class="hide">
        <?php include "html/main_nav.html"; ?>
        <nav class="secondary">
            <button onclick="showHeader()" id="expand">
                <span class="material-icons">expand_more</span>
            </button>
        </nav>
    </header>
    <main>
        <h1>Accueil</h1>
        <div id="apropos">
            <h2>À propos du ComiTim</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Laborum itaque quo beatae maiores quasi, nemo cupiditate
                aliquam omnis voluptatibus, expedita cumque velit asperiores
                totam temporibus at repellendus voluptatum inventore illum?
            </p>
        </div>
        <div id="fondateurs">
            <h2>Les fondateurs</h2>
            <div>
                <div>
                    <img src="img/test.png" alt="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Laborum itaque quo beatae maiores quasi, nemo cupiditate
                        aliquam omnis voluptatibus, expedita cumque velit asperiores
                        totam temporibus at repellendus voluptatum inventore illum?
                    </p>
                </div>
                <div>
                    <img src="img/test.png" alt="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Laborum itaque quo beatae maiores quasi, nemo cupiditate
                        aliquam omnis voluptatibus, expedita cumque velit asperiores
                        totam temporibus at repellendus voluptatum inventore illum?
                    </p>
                </div>
            </div>
        </div>
        <div id="discord">
            <h2>Devenez de vrais débiles du TIM!</h2>
            <a href="https://discord.gg/AEQnR9SSud">
                <img src="img/discord.svg" alt="Discord" />
                <p>Rejoignez le Discord!</p>
            </a>
        </div>
    </main>
</body>

</html>