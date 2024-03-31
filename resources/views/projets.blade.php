<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projets | ComiTIM</title>
    <link rel="stylesheet" href="css/projets.css" />
    <?php include "html/links.html"; ?>
</head>

<body>
    <div id="transition"></div>
    <header class="hide">
        <?php include "html/main_nav.html"; ?>
        <script>
            setCurrentPage(1)
        </script>
        <nav class="secondary">
            <ul>
                <li>
                    <button onclick="changePage(`jeux`)">Jeux</button>
                </li>
                <li>
                    <button onclick="changePage(`3d`)">3D</button>
                </li>
                <li>
                    <button onclick="changePage(`infographies`)">Infographies</button>
                </li>
                <li>
                    <button onclick="changePage(`animations`)">
                        Animations
                    </button>
                </li>
            </ul>
            <button onclick="showHeader()" id="expand">
                <span class="material-icons">expand_more</span>
            </button>
        </nav>
    </header>
    <main>
        <h1>Projets</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Officiis, sed sapiente architecto, repellat nemo dolorum qui
            quasi, perspiciatis veritatis molestiae error consectetur
            laboriosam maiores et natus odio quaerat adipisci
            accusamus?Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Officiis, sed sapiente architecto,
            repellat nemo dolorum qui quasi, perspiciatis veritatis
            molestiae error consectetur laboriosam maiores et natus odio
            quaerat adipisci accusamus?Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Officiis, sed sapiente
            architecto, repellat nemo dolorum qui quasi, perspiciatis
            veritatis molestiae error consectetur laboriosam maiores et
            natus odio quaerat adipisci accusamus?
        </p>
    </main>



</body>

</html>