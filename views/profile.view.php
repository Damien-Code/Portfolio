<?php
require './views/layout/header.php';
?>
    <!--            Main            -->
    <main class="main">
        <!--            Main titel      -->
        <!--    echo de titel die ik in de controller definieer-->
        <h2 class="pageTitle"><?php echo $title ?></h2>
        <!--            Form voor een niewe portfolio       -->
        <form method="post" class="account-form" action="/profile?action=save">
            <input type="hidden" id="id" name="id" value="<?php echo (empty($data))?'':$data['id'] ?>">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="<?php echo (empty($data))?'':$data['Author'] ?>">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo (empty($data))?'':$data['Title'] ?>">
            <label for="content">Degree:</label>
            <input type="text" id="content" name="degree" value="<?php echo (empty($data))?'':$data['Degree'] ?>">
            <label for="projects">Projects:</label>
            <input type="text" id="project" name="projects" value="<?php echo (empty($data))?'':$data['Projects'] ?>">
            <label for="languages">Languages:</label>
            <input type="text" id="languages" name="languages" value="<?php echo (empty($data))?'':$data['Languages'] ?>">
            <button type="submit">Save</button>
        </form>
<!--        input velden waar je je profiel kunt updaten-->

    </main>
    <!--            Aside           -->
    <aside class="profile-aside">
<!--       Profielfoto van gebruiker die je kan aanpassen-->
        <img src="./asset/login.pic.png" alt="Profile picture" class="login-pic">
        <button>Choose new picture</button>

    </aside>
    <!--            Footer          -->
<?php
require './views/layout/footer.php';
?>