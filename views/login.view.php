<?php
require './views/layout/header.login.php';
?>
<!--Een simpel login scherm-->
<!--Main-->
<main class="login-main">
    <form class="login-form">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
    </form>
    <!--Wanneer er op de knop gedrukt wordt, wordt je doorgestuurd naar je eigen profielpagina-->
    <!--    Ik werk nog niet met users maar zodra ik dat ga implementeren zal deze pagina veranderen-->
    <section class="login-buttons">
        <a href="/profile">
            <button>Log In</button>
        </a>
        <a href="#">
            <button>Sign up</button>
        </a>
    </section>
</main>
</body>
</html>







