<?php
require './views/layout/header.php';
?>
    <main class="main" id="blogpage">
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <section class="blogs">
            <?php
            try {
                include "./controller/database.php";
                $stmt = $conn->prepare("SELECT id, author, title, post FROM blogs");
                $stmt->execute();

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $row) {
                    echo '<div class="input-div">';
                    foreach ($row as $key => $value) {

                        echo "<p>$value</p>";
//                        echo '<p>$key["title"]</p>';
//                        echo '<p>$key["post"]</p>';
                    }
                    echo "<a href='/blog?action=delete&id=" . $row['id'] . "'><button>Delete</button></a>";
                    echo '</div>';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            $conn = null;
            ?>
        </section>
    </main>
    <aside>
        <section>
            <p class="blog-title">What's on your mind?</p>
        </section>
        <form method="post" class="blog-form" action="/blog?action=save">
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