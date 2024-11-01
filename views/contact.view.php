<?php
require './views/layout/header.php';
?>
<!--            Titel           -->

<main>
    <!--            main titel      -->
    <!--        echo de titel die ik in de controller definieer-->
    <section>
        <h2 class="pageTitle"><?php echo $title ?></h2>
    </section>
    <section class="about-text">
        <section>
            <p class="descr">Location:</p>
            <p>You can find me in Almere, The Netherlands</p>
        </section>
        <section>
            <p class="descr">My School:</p>
            <p>Windesheim, Almere</p>
        </section>
        <section>
            <p class="descr">Phone:</p>
            <p>
                +31 6 12345678
            </p>
        </section>
        <section>
            <p class="descr">Email:</p>
            <p>email@email.com</p>
        </section>
    </section>
</main>
<!--            Aside           -->
<aside>
    <section class="socmedlinks">
        <p class="descr">You can also find me at:</p>
<!--        link naar github-->
        <a href="https://github.com/Damien-Code" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 24 24">
                <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z"></path>
            </svg>
        </a>
<!--        link naar LinkedIn-->
        <a href="https://www.linkedin.com/in/dami%C3%ABn-van-den-ijssel-72b707331/">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                <path fill="#0288D1"
                      d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
                <path fill="#FFF"
                      d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
            </svg>
        </a>
        <p>Or download my resume!</p>
        <a href="/asset/CV-Damien-van-den-IJssel.docx" download="resume">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="grey">
                <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
            </svg>
        </a>

    </section>
    <!--    Downloadbare CV-->
    <section>

    </section>

</aside>
<?php
require './views/layout/footer.php';
?>