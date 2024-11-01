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
    <section>
        <!--        Downloadbare cv-->
        <a href="/asset/CV-Damien-van-den-IJssel.docx" download="resume">
            <button>Download my resume!</button>
        </a>
    </section>
    <section>

    </section>
</main>
<!--            Aside           -->
<aside>

</aside>
<?php
require './views/layout/footer.php';
?>
