<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profs | ComiTIM</title>
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
        <h1>Nos profs</h1>
        <img src="https://jtremblay.tim-cstj.ca/images/jt.png" alt="Jhonny" />
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Officiis, sed sapiente architecto, repellat nemo dolorum qui
            quasi, perspiciatis veritatis molestiae error consectetur
            laboriosam maiores et natus odio quaerat adipisci accusamus?
        </p>
    </main>
</body>

</html>