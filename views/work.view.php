<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main class="main">
        <!--            Main titel      -->
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Main text        -->
        <section>
            <p>Recent projects:</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus eaque earum explicabo
                quisquam, sint? Ex impedit nisi nostrum quisquam vitae. Autem cum, dolore fugit minima reprehenderit
                ullam
                vitae voluptatem?</p>
        </section>
        <section>
            <p>My skills</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate debitis delectus deleniti dicta
                eligendi facilis incidunt ipsa quam reprehenderit sapiente vel, vero. A id illo molestiae recusandae
                tempora
                voluptatem!
            </p>
        </section>
        <section>
            <p>Coding languages:</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, dolorem est ex facilis fugit ipsam minima
                placeat, quibusdam reprehenderit tempora tenetur voluptatibus! Aliquam blanditiis dicta esse illo, ipsam
                nam
                quos!
            </p>
        </section>
    </main>
    <!--            Aside           -->
    <aside class="aside-work">
        <!--fotos van recente projecten met animate on scroll of een knop dat je kan switchen tussen fotos-->
        <div class="scroll-container">
            <img src="../asset/Codeafbeelding.png" class="codePic" alt="Picture of code">
            <img src="../asset/website.png" alt="Website" class="codePic">
            <img src="../asset/JS.svg.png" alt="Logo" class="codePic js-logo">
        </div>
    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>