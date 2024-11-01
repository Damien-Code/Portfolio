<?php
require './views/layout/header.php';
?>
    <!--            Titel           -->

    <main>
        <!--            main titel      -->
        <!--        echo de titel die ik in de controller definieer-->
        <section>
            <h2 class="pageTitle"><?php echo $title ?></h2>
        </section>
        <!--            Main text        -->
        <section class="about-text">
            <section>
                <p class="descr">For whom is this website?</p>
                <p>For everyone who wants to show the world their portfolio. Upload, show and update your profile and
                    show the world the creations you make!</p>
            </section>
            <section>
                <p class="descr">Who am i?</p>
                <p>
                    I am Damiën. A software developer who is just starting out, but already fell in love with coding!
                    The task of this project was to create a portfolio website for my own, but I also wanted to create a
                    hub for other programmers to show off their work!
                </p>
            </section>
            <section>
                <p class="descr">About the website</p>
                <p>
                    This website is to display my skills as a software developer. You can view my own portfolio by
                    visiting the "Portfolio" page or you can contact me at the "contact" page.
                </p>
            </section>
            <section>
                <p class="descr">The programming languages behind this project:</p>
                <p>
                    For this website, I used HTML, CSS, JavaScript, PHP and MySQL.
                </p>
            </section>
        </section>
    </main>
    <!--            Aside           -->
    <aside>
        <!--            Game            -->
        <section class="game">
            <p class="gameexpl">Rock, Paper or Scissors</p>
            <section class="gameinput">
                <input type="text" name="input" id="input">
                <button class="buttonGame" onclick="playGame()">Play!</button>
            </section>
            <!--            Game result         -->
            <section>
                <div id="result"></div>
            </section>
        </section>
        <section class="about-pics">
            <p>My code when i first started out:</p>
            <img src="/asset/Codeafbeelding.png" alt="Code" class="about-pic">
            <p>My code now:</p>
            <img src="/asset/recentcode.png" alt="Code" class="about-pic">
        </section>
        <section>

        </section>

    </aside>

    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>