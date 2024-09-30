<?php
require './views/layout/header.php';

?>
    <!--          Main                -->
    <main>
        <h1>Web <br>Developer</h1>
    </main>
    <!--          Aside               -->
    <aside>
        <!--    Profielfoto   -->
        <section class="homepage">
            <img src="asset/profielfoto.jpeg" alt="Profile picture" class="profilePic">
            <a href="/about">
                <button>About me!</button>
            </a>
        </section>
        <section>
            <p>Specialized in Web Development <br> and languages HTML, CSS and JavaScript.</p>
        </section>
    </aside>
    <!--           Footer            -->
<?php
require './views/layout/footer.php';
?>