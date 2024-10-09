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
        <section class="home-section">
            <img src="./asset/profielfoto.jpeg" alt="Profile picture" class="profilePic">
            <a href="/about">
                <button>About me!</button>
            </a>
        </section>
        <section>
            <p>Specialized in Web Development and <br> languages like HTML, CSS, JavaScript and PHP.</p>
        </section>
    </aside>
    <!--           Footer            -->
<?php
require './views/layout/footer.php';
?>