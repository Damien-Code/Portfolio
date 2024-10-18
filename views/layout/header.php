<?php
//Session boven de html tag callen, anders werkt het niet
//session_start();
?>

<!DOCTYPE html>
<html lang="nl" class="focus-outline-visible">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Damiën</title>
<!--    favicon ingeladen-->
    <link rel="icon" type="image/x-icon" href="/asset/favicon.png">
    <meta name="author" content="Damiën van den IJssel">
<!--    font ingeladen-->
    <link rel="stylesheet" href="/views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
<!--    js hier ingeladen want als ik hem in de footer inlaadt geeft hij al zonder input een result aan. -->
    <script src="/views/javascript/main.js"></script>
</head>
<body id="body" >
<!--          Header             -->
<header>
    <!--    Titel    -->
    <section>
        <a href="/" id="headerTitle"><p>Damiën van den IJssel</p></a>
    </section>
    <!--    Links    -->
    <section class="linkTo">
        <a href="/">Home</a>
        <a href="/portfolio">Portfolio</a>
        <a href="/login">My Profile</a>
        <a href="/about">About</a>
        <a href="/blog">Blog</a>
<!--        koppel de functie in JS met onclick zodat er geswitched kan worden naar darkmode-->
<!--        Uitzoeken hoe session_start precies werkt en hoe ik dit met de darkmode functie moet toepassen-->
<!--        <button type="submit" name="button1">Change--><?php //$_SESSION['.dark-mode'] = 'black'; ?><!--</button>-->
        <button type="button" onclick="darkMode()" id="button">Change</button>
    </section>
</header>
