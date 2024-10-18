<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main id="work-page">
        <!--            Main titel      -->
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Main text        -->
        <section class ="table-container">
            <table class="profile-description">
                <tr>
                    <th>ID:</th>
                    <th>Author:</th>
                    <th>Title:</th>
                    <th>Degree:</th>
                    <th>Projects:</th>
                    <th>Languages:</th>
                    <th colspan="3">Go to profile:</th>
                </tr>
                <?php
//                    oude code bijgewerkt en heb de connectie met de server toegevoegd met include
//                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($data as $row) {
                        echo "<tr>";
                        foreach ($row as $key => $value) {
                            echo "<td>$value</td>";
                        }
//                        echo "<td>$value</td>";
                        echo "<td><form action='/profile/update' method='get'><input name='action' value='update' hidden><input name='id' value=".$row['id']." hidden><button type='submit'>Update</button></form></td>";
                        echo "<td><form action='/delete' method='post'><input name='delete' value='delete' hidden><input name='id' value=".$row['id']." hidden><button type='submit'>Delete</button></form></td>";
                        echo "<td><form action='/portfolio/view' method='get'><input name='action' value='view' hidden><input name='id' value=".$row['id']." hidden><button type='submit'>View</button></form></td>";
                        echo "</tr>\n";
                    }
                ?>
            </table>
        </section>
    </main>
    <!--            Aside           -->
    <aside class="aside-work">
        <!--fotos van recente projecten met animate on scroll of een knop dat je kan switchen tussen fotos-->
        <img src="../asset/login.pic.png" alt="Login picture" class="login-pic">

    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>