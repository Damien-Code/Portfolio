<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main id="work-page">
        <!--            Main titel      -->
        <!--        echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <section class="table-container">
            <!--            Eerst had ik de table nog een class gegeven. Nu verwijderd voor minder herhalende code-->
            <table>
                <tr>
<!--                    Waardes die boven aan de table staan-->
                    <th>ID:</th>
                    <th>Author:</th>
                    <th>Title:</th>
                    <th>Degree:</th>
                    <th>Projects:</th>
                    <th>Languages:</th>
                    <th colspan="3">Go to profile:</th>
                </tr>
                <?php
//                Hier komen de waardes uit de controller te staan
//                Door een foreach zorg ik ervoor dat elke geplaatste portfolio een eigen table row krijgt.

                foreach ($data as $row) {
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
//                    De update knop
                    echo "<td>
                                <form action='/profile/update' method='get'>
                                    <input name='action' value='update' hidden>
                                    <input name='id' value=" . $row['id'] . " hidden>
                                    <button type='submit'>Update</button>
                                </form>
                              </td>";
//                    De delete knop
                    echo "<td>
                                <form action='/delete' method='post'>
                                    <input name='delete' value='delete' hidden>
                                    <input name='id' value=" . $row['id'] . " hidden>
                                    <button type='submit'>Delete</button>
                                </form>
                              </td>";
//                    De view knop
                    echo "<td>
                                <form action='/portfolio/view' method='get'>
                                    <input name='action' value='view' hidden>
                                    <input name='id' value=" . $row['id'] . " hidden>
                                    <button type='submit'>View</button>
                                </form>
                              </td>";
                    echo "</tr>\n";
                }
                ?>
            </table>
        </section>
    </main>
    <!--            Aside           -->
    <aside>
<!--        De standaard profielfoto naast de portfolios-->
        <img src="../asset/login.pic.png" alt="Login picture" class="login-pic">
    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>