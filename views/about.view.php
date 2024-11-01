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
                <p>For whom is this website?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus eaque earum explicabo
                    quisquam, sint? Ex impedit nisi nostrum quisquam vitae. Autem cum, dolore fugit minima reprehenderit
                    ullam
                    vitae voluptatem?</p>
            </section>
            <section>
                <p>Employers and Employees</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate debitis delectus deleniti
                    dicta
                    eligendi facilis incidunt ipsa quam reprehenderit sapiente vel, vero. A id illo molestiae recusandae
                    tempora
                    voluptatem!
                </p>
            </section>
            <section>
                <p>Contact</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, dolorem est ex facilis fugit ipsam
                    minima
                    placeat, quibusdam reprehenderit tempora tenetur voluptatibus! Aliquam blanditiis dicta esse illo,
                    ipsam
                    nam
                    quos!
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
        <section >
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