<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main class="main">
        <!--            Main titel      -->
        <!--    echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Main text       -->
        <section class="profiletext">
            <p>Who are you?</p>
            <p>What is your job?</p>
            <p>What is your degree?</p>
            <p>What are your recent projects?</p>
            <p>What are the programming languages that you use?</p>
        </section>
<!--        input velden waar je je profiel kunt updaten-->
        <form class="profile-input">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
        </form>
        <button>Save</button>
    </main>
    <!--            Aside           -->
    <aside class="profile-aside">
<!--       Profielfoto van gebruiker die je kan aanpassen-->
        <img src="./asset/login.pic.png" alt="Profile picture" class="login-pic">
        <button>Choose new picture</button>

    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>