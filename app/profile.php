<?php

require_once "autoloader.php";

?>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profile</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>


    <?php
        include "inc/header.php";    
    ?>

    <main class="main-part">
        <section class="main-section">
            <nav class="navbar py-0">
                <div class="container">
                    <ul class="navbar-nav col-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg class="profile-back" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(15, 20, 25);"><g><path d="M7.414 13l5.043 5.04-1.414 1.42L3.586 12l7.457-7.46 1.414 1.42L7.414 11H21v2H7.414z"></path></g></svg>
                            </a>
                        </li>
                    </ul>
                    <div class="col-11 d-flex flex-column justify-content-center">
                        <div>
                            <p class="my-0 profile-navbar-name">Albion</p>
                        </div>
                        <div>
                            <p class="my-0 profile-navbar-noOfPosts">23 posts</p>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="profile-info position-relative">
                <div class="ms-1 profileHeaderContainer w-100">
                    <img class="h-100 w-100" src="img/twitterheadquarters.jpg" alt="tw">
                </div>

                <div class="profile-pic-container border-5 position-absolute">
                    <img class="profile-pic" src="img/elonmusk.jpg" alt="elon">
                </div>

                <div class="follow-toolkit d-flex justify-content-end my-3 gap-2 me-3">
                    <button class="follow-toolkit-button">
                        <svg class="follow-toolkit-svg" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(15, 20, 25);"><g><path d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"></path></g></svg>
                    </button>
                    <button class="d-none follow-toolkit-button">
                        <svg class="follow-toolkit-svg" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(15, 20, 25);"><g><path d="M22 5v2h-3v3h-2V7h-3V5h3V2h2v3h3zm-.86 13h-4.241c-.464 2.281-2.482 4-4.899 4s-4.435-1.719-4.899-4H2.87L4 9.05C4.51 5.02 7.93 2 12 2v2C8.94 4 6.36 6.27 5.98 9.3L5.13 16h13.73l-.38-3h2.02l.64 5zm-6.323 0H9.183c.412 1.164 1.51 2 2.817 2s2.405-.836 2.817-2z"></path></g></svg>
                    </button>
                    <button class="btn bg-black rounded-5 text-white" id="follow-toolkit-follow-btn">
                        Follow
                    </button>
                </div>
                

                <div class="profile-name d-flex flex-column mt-4 mb-3 ms-3">
                    <div>
                        <p class="fs-5 fw-black profile-full-name my-0">Mark Zukerberg</p>
                    </div>
                    <div>
                        <p class="profile-username my-0">@mark</p>
                    </div>
                </div>
            </div>
            
        </section>
    </main>





</body>

  