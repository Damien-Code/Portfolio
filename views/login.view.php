<!DOCTYPE html>
<html lang="nl" class="focus-outline-visible">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Damiën</title>
    <!--    favicon ingeladen-->
    <link rel="icon" type="image/x-icon" href="../asset/favicon.png">
    <meta name="author" content="Damiën van den IJssel">
    <!--    font ingeladen-->
    <link rel="stylesheet" href="./views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <!--    js hier ingeladen want als ik hem in de footer inlaadt geeft hij al zonder input een result aan. -->
    <script src="./views/javascript/main.js"></script>
</head>
<body class="login-page">
<!--Een simpel login scherm-->
<header class="login-header">
    <h1>Web App</h1>
</header>
<main class="login-main">
    <form class="login-form">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
    </form>
    <!--Wanneer er op de knop gedrukt wordt, wordt je doorgestuurd naar je eigen profielpagina-->
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







