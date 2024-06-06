<?php 

require_once 'autoloader.php';

?>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Noitfications</title>
     
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/notifications.css" />
    </head>

    <?php
        include "inc/header.php";     
    ?>

    <main class="container-sm-fluid d-flex flex-grow-1 flex-lg-grow-0 main-part-notifications overflow-x-hidden border-end position-relative">
      <section class="main-section flex-grow-1" id="notification-section">
        <div class="notifications-wrapper position-sticky top-0">
            <div class="notifications-title d-flex ps-3 pe-3 pt-1 align-items-center position-sticky top-0">
                <h2 class="fw-bolder notification-h2 flex-grow-1">Notifications</h2>
            
                <div class="settings-link-container">
                    <a href="#" class="notif-settings-link d-block w-100">
                        <div class="settings-icon-container">
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="settings-icon r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-lrvibr r-m6rgpd r-z80fyv r-19wmn03" style="color: rgb(15, 20, 25);">
                                <g>
                                    <path d="M10.54 1.75h2.92l1.57 2.36c.11.17.32.25.53.21l2.53-.59 2.17 2.17-.58 2.54c-.05.2.04.41.21.53l2.36 1.57v2.92l-2.36 1.57c-.17.12-.26.33-.21.53l.58 2.54-2.17 2.17-2.53-.59c-.21-.04-.42.04-.53.21l-1.57 2.36h-2.92l-1.58-2.36c-.11-.17-.32-.25-.52-.21l-2.54.59-2.17-2.17.58-2.54c.05-.2-.03-.41-.21-.53l-2.35-1.57v-2.92L4.1 8.97c.18-.12.26-.33.21-.53L3.73 5.9 5.9 3.73l2.54.59c.2.04.41-.04.52-.21l1.58-2.36zm1.07 2l-.98 1.47C10.05 6.08 9 6.5 7.99 6.27l-1.46-.34-.6.6.33 1.46c.24 1.01-.18 2.07-1.05 2.64l-1.46.98v.78l1.46.98c.87.57 1.29 1.63 1.05 2.64l-.33 1.46.6.6 1.46-.34c1.01-.23 2.06.19 2.64 1.05l.98 1.47h.78l.97-1.47c.58-.86 1.63-1.28 2.65-1.05l1.45.34.61-.6-.34-1.46c-.23-1.01.18-2.07 1.05-2.64l1.47-.98v-.78l-1.47-.98c-.87-.57-1.28-1.63-1.05-2.64l.34-1.46-.61-.6-1.45.34c-1.02.23-2.07-.19-2.65-1.05l-.97-1.47h-.78zM12 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5c.82 0 1.5-.67 1.5-1.5s-.68-1.5-1.5-1.5zM8.5 12c0-1.93 1.56-3.5 3.5-3.5 1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5c-1.94 0-3.5-1.57-3.5-3.5z"></path>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <nav class="navbar navbar-expand position-sticky" id="notifications-navbar">
                <div class="container nav-items-container border-bottom">
                    <div class="row w-100 h-100 align-content-center">
                        <div class="col d-flex justify-content-center h-100">
                            <a href="#" id="all-link" class="nav2-link notification-link w-100 h-100 text-center pt-3">All</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" id="verified-link" class="nav2-link notification-link w-100 h-100 text-center pt-3">Verified</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" class="nav2-link notification-link w-100 h-100 text-center pt-3">Mentions</a>
                        </div>
                    </div>
                </div>
            </nav>


        </div>
        

        <div class="all-div" id="all-div">

            <div class="notification-container border-bottom">
                <div class="row notification-content ps-5 pt-2">
                    <div class="col-1 col-md-2 col-lg-1 pt-1">
                        <svg class="like-sign" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="col-10 pt-1">
                        <div class="circle-notifications">
                            <div class="background-profile w-100 h-100">
                                <img src="img/user.png" class="w-100 h-100" alt="">
                            </div>
                        </div>

                        <div class="text-container my-2">
                            <p>
                               Olsa liked your post     
                            </p>
                        </div>

                        <div>
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="notification-container border-bottom">
                <div class="row notification-content ps-5 pt-2">
                    <div class="col-1 col-md-2 col-lg-1 pt-1">
                        <svg class="like-sign" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="col-10 pt-1">
                        <div class="circle-notifications">
                            <div class="background-profile w-100 h-100">
                                <img src="img/user.png" class="w-100 h-100" alt="">
                            </div>
                        </div>

                        <div class="text-container my-2">
                            <p>
                               Olsa liked your post     
                            </p>
                        </div>

                        <div>
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="notification-container border-bottom">
                <div class="row notification-content ps-5 pt-2">
                    <div class="col-1 col-md-2 col-lg-1 pt-1">
                        <svg class="like-sign" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="col-10 pt-1">
                        <div class="circle-notifications">
                            <div class="background-profile w-100 h-100">
                                <img src="img/user.png" class="w-100 h-100" alt="">
                            </div>
                        </div>

                        <div class="text-container my-2">
                            <p>
                               Olsa liked your post     
                            </p>
                        </div>

                        <div>
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="notification-container border-bottom">
                <div class="row notification-content ps-5 pt-2">
                    <div class="col-1 col-md-2 col-lg-1 pt-1">
                        <svg class="like-sign" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="col-10 pt-1">
                        <div class="circle-notifications">
                            <div class="background-profile w-100 h-100">
                                <img src="img/user.png" class="w-100 h-100" alt="">
                            </div>
                        </div>

                        <div class="text-container my-2">
                            <p>
                               Olsa liked your post     
                            </p>
                        </div>

                        <div>
                            <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="verified-div">

        </div>


      </section>
      <?php include 'inc/aside.php'; ?>


      <script>

       var all_link = document.getElementById("all-link");
        all_link.addEventListener('click' , () => {
            var verified_div = document.getElementById('verified-div');
            verified_div.style.display = 'none';
            var all_div = document.getElementById('all-div');
            all_div.style.display = 'block';
            
        });

        var verified_link = document.getElementById('verified-link');

        verified_link.addEventListener('click', () => {
            var all_div = document.getElementById('all-div');
            all_div.style.display = 'none';
            var verified_div = document.getElementById('verified-div');
            verified_div.style.display = 'block';

            console.log("Link clicked");
        }); 

        function clickL() {
            var links = document.getElementsByClassName('notification-link');
            for(let i = 0; i < links.length; i++) {
                links.item(i).classList.remove('active');
            }
            this.classList.add('active');
        }


        var link_buttons = document.getElementsByClassName('notification-link');
        for(let i = 0; i < link_buttons.length; i++) {
            link_buttons.item(i).addEventListener('click', clickL);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const all_link = document.getElementById("all-link");
            all_link.click();
        })

        // function blur() {
        //     var scrollAmount = this.scrollTop;
        //     var units = scrollAmount / 2;
        //     var change = units * 0.1;

        //     let newOpacity = 1 - change;

        // }

      
      </script>
    </main>
</body>

