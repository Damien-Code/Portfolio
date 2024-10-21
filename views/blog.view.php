<?php
require './views/layout/header.php';
?>
    <main class="main" id="blogpage">
        <!--        echo de titel die ik in de controller definieer-->
        <section>
            <h2 class="pageTitle"><?php echo $title ?></h2>
        </section>
        <section class="blogs">
            <?php
            foreach ($posts as $post) { ?>
                <div class="input-div">
                    <div class="input-list">
                        <?php
                        foreach ($post as $key => $value) {
                            echo "<p>$value</p>";
        //                        echo '<p>$key["title"]</p>';
        //                        echo '<p>$key["post"]</p>';
                        }
                        ?>
                    </div>
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
    <aside id="blog-input">
        <section>
            <p class="blog-title">What's on your mind?</p>
        </section>
        <form method="post" class="blog-form" action="/blog/save">
            <input type="hidden" id="id" name="id">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <label for="post">Content:</label>
            <input type="text" id="post" name="post">
            <button type="submit">Add</button>
        </form>
    </aside>
<?php
require './views/layout/footer.php';
?>