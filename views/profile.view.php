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
        <!--        maxlength aangeven zodat het overeenkomt met db-->
        <form method="post" class="account-form" action="/profile">
            <input type="hidden" id="id" name="id" value="<?= (empty($data)) ? '' : $data['id'] ?>">
            <label for="author">Who are you?</label>
            <input type="text" id="author" name="author" value="<?= (empty($data)) ? '' : $data['Author'] ?>" required maxlength="32">
            <label for="title">What is your job title?</label>
            <input type="text" id="title" name="title" value="<?= (empty($data)) ? '' : $data['Title'] ?>" required maxlength="32">
            <label for="content">What do you study?</label>
            <input type="text" id="content" name="degree" value="<?= (empty($data)) ? '' : $data['Degree'] ?>" required maxlength="32">
            <label for="projects">What are your recent projects?</label>
            <input type="text" id="project" name="projects" value="<?= (empty($data)) ? '' : $data['Projects'] ?>" required maxlength="32">
            <label for="languages">What coding languages do you use?</label>
            <input type="text" id="languages" name="languages" value="<?= (empty($data)) ? '' : $data['Languages'] ?>" required maxlength="32">
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