<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main class="main">
        <!--            Main titel      -->
        <!--    echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Main text       -->
        <form>
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
        </form>
        <button>Save</button>
    </main>
    <!--            Aside           -->
    <aside>
        <!--fotos van recente projecten met animate on scroll of een knop dat je kan switchen tussen fotos-->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">

        </form>

    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>