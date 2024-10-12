<?php
require './views/layout/header.php';
?>
    <!--          Main                -->
    <main>
<!--        echo de titel die ik in de controller definieer-->
        <div class="typewriter">
                <h1><?php echo $title ?></h1>
        </div>
    </main>
    <!--          Aside               -->
    <aside class="homepage">
        <!--    Profielfoto   -->
        <section>
            <p class="descr">My name is:</p>
            <p><?php echo $author ?></p>

            <p class="descr">My coding languages are:</p>
            <p><?php echo $lang ?></p>

            <p class="descr">I study:</p>
            <p><?php echo $degree ?></p>

            <p class="descr">My recent projects are:</p>
            <p><?php echo $projects ?></p>
        </section>
        <section class="home-section">
            <img src="./asset/profielfoto.jpeg" alt="Profile picture" class="profilePic">
            <a href="/about" class="portfolio-button">
                <button>About me!</button>
            </a>
        </section>

    </aside>
    <!--           Footer            -->
<?php
require './views/layout/footer.php';
?>