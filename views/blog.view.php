<?php
require './views/layout/header.php';
?>
    <main class="main">
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis commodi culpa dignissimos
            ducimus excepturi hic ipsa, maxime molestias nam officia porro possimus qui quos rem sequi vitae. Id,
            vero.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, mollitia voluptas! Dignissimos, dolor, odit.
            A alias corporis eaque impedit ipsum itaque maiores, reiciendis repudiandae vel veritatis. At distinctio
            fuga magni.
        </p>
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