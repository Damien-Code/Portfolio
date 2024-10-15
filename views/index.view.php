<?php
//global $conn;
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
//                $servername = "localhost";
//                $username = "root";
//                $password = "root";
//                $dbname = "pa";
                try {
//                    oude code bijgewerkt en heb de connectie met de server toegevoegd met include
//                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    include "./models/database.php";
                    $conn = new Database();
                    $stmt = $conn->pdo->prepare("SELECT id, Author, Title, Degree, Projects, Languages FROM Posts");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach ($stmt->fetchAll() as $row) {
                        echo "<tr>";
                        foreach ($row as $key => $value) {
                            echo "<td>$value</td>";
                        }
//                        echo "<td>$value</td>";
                        echo "<td><a href='/profile?action=update&id=". $row['id']."'><button>Update</button></a></td>";
                        echo "<td><a href='/profile?action=delete&id=". $row['id']."'><button>Delete</button></a></td>";
                        echo "<td><a href='/profile?action=view&id=". $row['id']."'><button>View</button></a></td>";
                        echo "</tr>\n";
                    }

                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                ?>
            </table>
        </section>
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