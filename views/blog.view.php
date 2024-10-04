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
            <form>
                <p>Name</p>
                <input type="text">
                <p>Username</p>
                <input type="text">
                <button type="button">Add User</button>
            </form>
        </section>
        <section>
            <form>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </form>
        </section>

    </aside>
<?php
require './views/layout/footer.php';
?>