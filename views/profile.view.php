<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main class="main">
        <!--            Main titel      -->
        <!--    echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Form voor een nieuwe portfolio       -->
<!--     Ook zorg ik ervoor dat er al ingevoerde waardes worden weergeven als je ze wilt updaten   -->
        <form method="post" class="account-form" action="/profile" >
            <input type="hidden" id="id" name="id" value="<?= (empty($data)) ? '' : $data['id'] ?>">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="<?= (empty($data))?'':$data['Author'] ?>" required>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?=(empty($data))?'':$data['Title'] ?>" required>
            <label for="content">Degree:</label>
            <input type="text" id="content" name="degree" value="<?= (empty($data))?'':$data['Degree'] ?>" required>
            <label for="projects">Projects:</label>
            <input type="text" id="project" name="projects" value="<?= (empty($data))?'':$data['Projects'] ?>" required>
            <label for="languages">Languages:</label>
            <input type="text" id="languages" name="languages" value="<?= (empty($data))?'':$data['Languages'] ?>" required>
                                                                    <!-- shortcut php echo         -->
            <button type="submit">Save</button>
        </form>
    </main>
    <!--            Aside           -->
    <aside class="profile-aside">
<!--       Profielfoto van gebruiker die je kan aanpassen-->
        <img src="/asset/login.pic.png" alt="Profile picture" class="login-pic">
<!--        Deze knop heeft nog geen werking. In een later stadium wil ik dit wel werkend hebben-->
<!--        Ik ga dan gebruik maken van BLOBs maar omdat ik dit nog niet begrijp heb ik alleen een knop verwerkt-->
        <button>Choose new picture</button>

    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>