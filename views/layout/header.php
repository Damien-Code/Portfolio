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
    <link rel="icon" type="image/x-icon" href="./asset/favicon.png">
    <meta name="author" content="Damiën van den IJssel">
    <!--    font ingeladen-->
    <link rel="stylesheet" href="/views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <!--    js hier ingeladen want als ik hem in de footer inlaadt geeft hij al zonder input een result aan. -->
    <script src="/views/javascript/main.js"></script>
</head>
<body id="body">
<!--          Header             -->
<header>
    <!--    Titel    -->
    <section>
        <a href="/" id="headerTitle"><p>Damiën van den IJssel</p></a>
    </section>
    <!--    Links    -->
    <section class="linkTo">
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/login">My Profile</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><button type="button" onclick="darkMode()" id="button">Change</button></li>
            </ul>
            <ul>
                <li class="hideOnMobile"><a href="/">Home</a></li>
                <li class="hideOnMobile"><a href="/portfolio">Portfolio</a></li>
                <li class="hideOnMobile"><a href="/login">My Profile</a></li>
                <li class="hideOnMobile"><a href="/about">About</a></li>
                <li class="hideOnMobile"><a href="/blog">Blog</a></li>
                <li class="hideOnMobile"><button type="button" onclick="darkMode()" id="button">Change</button></li>
                <li onclick=showSidebar() class="hideOnFullscreen"><a><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>

<!--                <li><button type="button" onclick="darkMode()" id="button">Change</button></li>-->
            </ul>
        </nav>
        <!--        koppel de functie in JS met onclick zodat er geswitched kan worden naar darkmode-->
        <!--        Uitzoeken hoe session_start precies werkt en hoe ik dit met de darkmode functie moet toepassen-->
        <!--        <button type="submit" name="button1">Change-->
<!--        <button type="button" onclick="darkMode()" id="button">Change</button>-->
    </section>
</header>
