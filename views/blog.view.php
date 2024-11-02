<?php
require './views/layout/header.php';
?>
    <!--Main-->
    <main id="blogpage">
        <!--        echo de titel die ik in de controller definieer-->
        <section>
            <h2 class="pageTitle"><?php echo $title ?></h2>
        </section>
        <!--        Hier komen de blogs te staan die ik elk een aparte waarde laat zien door middel van een foreach-->
        <section class="blogs">
            <?php
            foreach ($posts as $post) { ?>
                <div class="input-div">
                    <div class="input-list">
                        <?php
                        foreach ($post as $key => $value) {
                            echo "<p>$value</p>";
                        }
                        ?>
                    </div>
                    <!--                    Dit is de delete knop die onder elke blog komt te staan-->
                    <form action='/blog/delete' method='post'>
                        <input name='id' value="<?= $post['id'] ?>" hidden>
                        <input name='action' value='delete' hidden>
                        <button type='submit'>Delete</button>
                    </form>
                </div>
                <?php
            }
            ?>
        </section>
    </main>
    <!-- Aside -->
    <aside id="blog-input">
        <!--        De titel van de aside-->
        <section>
            <p class="blog-title">What's on your mind?</p>
        </section>
        <!--        Hier komt de form om een blogpost te maken-->
        <form method="post" class="blog-form" action="/blog/save">
            <input type="hidden" id="id" name="id">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="post">Content:</label>
            <input type="text" id="post" name="post" required>
            <button type="submit">Add</button>
        </form>
    </aside>
<?php
require './views/layout/footer.php';
?>