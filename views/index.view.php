<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main id="work-page">
        <!--            Main titel      -->
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Main text        -->
        <table class="profile-description">
            <tr>
                <th>Author:</th>
                <th>Title:</th>
                <th>Degree:</th>
                <th>Projects:</th>
                <th>Languages:</th>
            </tr>
            <tr>
                <td>Damiën</td>
                <td>Web Developer</td>
                <td>ADSD</td>
                <td>Web Application</td>
                <td>HTML, PHP and SQL</td>
                <td><a href="./portfolio"><button>Select:</button></a></td>
            </tr>
            <tr>
                <td>Mischa Sasse</td>
                <td>Full stack Engineer</td>
                <td>ADSD</td>
                <td>Portfolio's</td>
                <td>Javascript, Typescript and Three.JS</td>
                <td><button>Select:</button></td>
            </tr>
            <tr>
                <td>Lucas Pesiwarissa</td>
                <td>Back-end developer</td>
                <td>ADSD</td>
                <td>Database for Oracle</td>
                <td>MySQL, SQLite and MongoDB</td>
                <td><button>Select:</button></td>
            </tr>
        </table>
    </main>
    <!--            Aside           -->
    <aside class="aside-work">
        <!--fotos van recente projecten met animate on scroll of een knop dat je kan switchen tussen fotos-->
        <img src="./asset/login.pic.png" alt="Login picture" class="login-pic">

    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>