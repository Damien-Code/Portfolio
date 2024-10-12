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
            <p class="blog-title">What's on your mind?</p>
        </section>
            <form method="post" class="blog-form" action="/blog?action=save">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
                <label for="content">Content:</label>
                <input type="text" id="content" name="title">
                <button>Add</button>
            </form>

    </aside>
<?php
require './views/layout/footer.php';
?>