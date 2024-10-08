<?php
require './views/layout/header.php';
?>
    <main class="main">
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <section class="blogs">
            <div class="input-div">

            </div>
            <div class="input-div">

            </div>
        </section>
    </main>
    <aside>
        <section>
            <p>What's on your mind?</p>
        </section>
            <form class="blog-form">
                <input type="text">
                <input type="text">
            </form>

    </aside>
<?php
require './views/layout/footer.php';
?>