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
                    <button class="currentPage" onclick="changePage(`jeux`)">Jeux</button>
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
        <h1>Jeux</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Officiis, sed sapiente architecto, repellat nemo dolorum qui
            quasi, perspiciatis veritatis molestiae error consectetur
            laboriosam maiores et natus odio quaerat adipisci accusamus?
        </p>
        <div class="jeux">
            <div class="jeu">
                <div id="CommunityBalls" class="frame">
                    <iframe src="" game-src="http://localhost:1230" frameborder="0"></iframe>
                    <button onclick="startGame('CommunityBalls')">
                        <span class="material-icons">play_arrow</span>
                    </button>
                    <img src="img/test.png">
                </div>
                <div class="infos">
                    <h3>GameJam H23</h3>
                    <p class="createur">Bob Tanguay</p>
                    <p class="descrition">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Commodi vitae dolorem voluptate. Voluptates dolorem quam similique animi cumque.
                        Sit qui, autem vitae perferendis quae sequi dignissimos fugit omnis eius nam.
                    </p>
                </div>
            </div>
            <div class="jeu">
                <div id="Test2" class="frame">
                    <iframe src="" game-src="https://html-classic.itch.zone/html/4833805-935406/index.html" frameborder="0"></iframe>
                    <button class="play" onclick="startGame('Test2')">
                        <span class="material-icons">play_arrow</span>
                    </button>
                    <button class="fullscreen">
                        <span class="material-icons">
                            open_in_full
                        </span></button>
                    <img src="img/test.png">
                </div>
                <div class="infos">
                    <h3>Tiny Crate</h3>
                    <p class="createur">Bob Tanguay</p>
                    <p class="descrition">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Commodi vitae dolorem voluptate. Voluptates dolorem quam similique animi cumque.
                        Sit qui, autem vitae perferendis quae sequi dignissimos fugit omnis eius nam.
                    </p>
                </div>
            </div>
            <div class="jeu">
                <div id="Test3" class="frame">
                    <iframe src="" game-src="https://html-classic.itch.zone/html/6227603/index.html" frameborder="0"></iframe>
                    <button onclick="startGame('Test3')">
                        <span class="material-icons">play_arrow</span>
                    </button>
                    <img src="img/test.png">
                </div>
                <div class="infos">
                    <h3>Exhibit of Sorrows</h3>
                    <p class="createur">Bob Tanguay</p>
                    <p class="descrition">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Commodi vitae dolorem voluptate. Voluptates dolorem quam similique animi cumque.
                        Sit qui, autem vitae perferendis quae sequi dignissimos fugit omnis eius nam.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>

</html>