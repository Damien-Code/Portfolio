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
            <p>My coding languages are:</p>
            <p><?php echo $lang ?></p>

            <p>I study:</p>
            <p><?php echo $degree ?></p>

            <p>My recent projects are:</p>
            <p><?php echo $projects ?></p>
        </section>
        <section class="home-section">
            <img src="./asset/profielfoto.jpeg" alt="Profile picture" class="profilePic">
            <a href="/about">
                <button>About me!</button>
            </a>
        </section>

    </aside>
    <!--           Footer            -->
<?php
require './views/layout/footer.php';
?>