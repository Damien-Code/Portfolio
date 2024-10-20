<?php
require './views/layout/header.php';
?>
    <main class="main" id="blogpage">
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <section class="blogs">
            <?php
            foreach ($posts as $post) {
                echo '<div class="input-div">';
                foreach ($post as $key => $value) {
                    echo "<p>$value</p>";
//                        echo '<p>$key["title"]</p>';
//                        echo '<p>$key["post"]</p>';
                }
                echo "<form action='/blog/delete' method='post'><input name='action' value='delete' hidden><input name='id' value=" . $post['id'] . " hidden><button type='submit'>Delete</button></a>";
                echo "</div>\n";
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