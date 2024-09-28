<?php
?>
<!-- In de footer een date function -->
<footer>
    <section>
        <!-- Timezone instellen want anders ben je heel lang bezig uit te zoeken waarom je if statement niet werkt :) -->
        <p> <?php
            date_default_timezone_set('Europe/Amsterdam');
            echo "© " . date("Y-M-d"); ?></p>
        <?php
        $hour = date("H-i");
        if ($hour < "04-59") {
            echo "Good night!";
        } elseif ($hour <= "11-59") {
            echo "Good morning!";
        } elseif ($hour <= "17-59") {
            echo "Good afternoon!";
        } elseif ($hour < "20-59") {
            echo "Good evening!";
        } else {
            echo "Good night!";
        }
        ?>
    </section>
    <section>
        <a href="https://github.com/Damien-Code" target="_blank">Github</a>
    </section>
</footer>
</body>
</html>
