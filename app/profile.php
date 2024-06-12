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

    <main class="main-part-profile d-flex flex-grow-1">

        <div class="section-wrapper">

        <section class="main-section">
            <nav class="navbar py-0 position-sticky top-0 z-1" id="profile-nav">
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
                    <img class="h-100" src="img/twitterheadquarters.jpg" alt="tw">
                </div>

                <div class="profile-pic-container border-5 position-absolute">
                    <img class="profile-pic" src="img/elonmusk.jpg" alt="elon">
                </div>

                <div class="follow-toolkit d-flex justify-content-end my-3 gap-2 me-3">
                    <!-- <button class="follow-toolkit-button">
                        <svg class="follow-toolkit-svg" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(15, 20, 25);"><g><path d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"></path></g></svg>
                    </button>
                    <button class="d-none follow-toolkit-button">
                        <svg class="follow-toolkit-svg" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(15, 20, 25);"><g><path d="M22 5v2h-3v3h-2V7h-3V5h3V2h2v3h3zm-.86 13h-4.241c-.464 2.281-2.482 4-4.899 4s-4.435-1.719-4.899-4H2.87L4 9.05C4.51 5.02 7.93 2 12 2v2C8.94 4 6.36 6.27 5.98 9.3L5.13 16h13.73l-.38-3h2.02l.64 5zm-6.323 0H9.183c.412 1.164 1.51 2 2.817 2s2.405-.836 2.817-2z"></path></g></svg>
                    </button> -->
                    <button class="btn rounded-5 text-black" id="setup-toolkit-setup-btn">
                        Set up profile
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

                <div>
                    <div class="d-inline-block ps-3 linky">
                        <a href="#followinglink" class="text-decoration-none">
                            <span class="text-black fw-bolder">34</span>
                            <span id="following-text">Following</span>
                        </a>
                    </div>
                    <div class="d-inline-block ms-4 linky">
                        <a href="#followerslink" class="text-decoration-none">
                            <span class="text-black fw-bolder">3</span>
                            <span id="following-text">Followers</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </section>

        <nav class="navbar navbar-expand" id="profile-navbar">
                <div class="container profile-nav-items border-bottom">
                    <div class="row w-100 h-100 align-content-center">
                        <div class="col d-flex justify-content-center h-100">
                            <a href="#" id="post-link" class="nav2-link profile-link w-100 h-100 text-center pt-3 active">Posts</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" id="replies-link" class="nav2-link profile-link w-100 h-100 text-center pt-3">Replies</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="#" id="likes-link" class="nav2-link profile-link w-100 h-100 text-center pt-3">Likes</a>
                        </div>
                    </div>
                </div>
            </nav>


            <div class="profile-tweets" id="tweets">
            <div class="container-fluid postContainer border-bottom">
                <form class="p-4">
                  <div class="d-flex align-content-center gap-2 flex-wrap">
                    <svg class="retweeting-button" viewBox="0 0 24 24" aria-hidden="true"><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg>
                    <a href="#" class="repost-hover-link">Albion reposted</a>
                  </div>
                 <div class="retweet-wrapper d-flex post gap-2">
                    <div class="background-profile">
                      <img class="h-100" src="img/new-twitter-logo-x-2023-twitter-x-logo-official-vector-download_691560-10797.avif" alt="img">
                    </div>

                    <div class="postAndInfo text-wrap">
                      <div class="userInfo d-flex gap-1">
                        <p class="fw-bold">Elon Musk</p>
                        <p id="u_name">@elonmusk</p>
                        <p id="u_name">Apr 14</p>

                      </div>

                      
                        <p class="content"> 
                          The propaganda level in legacy media has become tediously high, but also remarkable for how almost all legacy media repeat the same lies verbatim
                        </p>
                      
                        <div class="replyRetweet d-flex gap-5">
                          <div class="d-flex gap-1 align-content-center">
                            <button class="replyButton">
                              <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true">
                                <g><path d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"></path></g></svg>
                            </button>
                            <p id="noOfPosts" class="mb-0 align-self-center">11K</p>
                          </div>

                          <div class="d-flex gap-1">
                            <button class="retweetButton">
                              <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1xvli5t r-1hdv0qi"><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg>
                            </button>
                            <p id="noOfPosts" class="mb-0 align-self-center">11K</p>
                          </div>

                          <div class="d-flex gap-1">
                            <button class="likeButton">
                              <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1xvli5t r-1hdv0qi"><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg>
                            </button>
                            <p id="noOfPosts" class="mb-0 align-self-center">11K</p>
                          </div>
                          
                        </div>

                    </div>
                 </div>
                  

                </form>
              </div>
            </div>

        </div>
        
        <?php 
            include "inc/aside.php";
        ?>

           
    </main>

    <div id="svg-template" class="hidden-template">
        <svg viewBox="0 0 24 24" aria-hidden="true" class="likebutton">
            <g>
                <path d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"></path>
            </g>
        </svg>

        <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1xvli5t r-1hdv0qi"><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg>

        <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1xvli5t r-1hdv0qi"><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg>
        <svg class="likebtn" viewBox="0 0 24 24" aria-hidden="true">
          <g>
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
          </g>
        </svg>

    </div>


    <script src="js/userinfo.js"></script>
    <script src="js/unreadnotifications.js"></script>
    <script src="js/showPosts.js"></script>
    

   


    <script>

        


        function clickProfileLink() {
            var links = document.getElementsByClassName('profile-link');
            for(let i = 0; i < links.length; i++) {
                links.item(i).classList.remove('active');
            }
            this.classList.add('active');
        }


        var link_buttons = document.getElementsByClassName('profile-link');
        for(let i = 0; i < link_buttons.length; i++) {
            link_buttons.item(i).addEventListener('click', clickProfileLink);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const post_link = document.getElementById("post-link");
            post_link.click();
        })

       
        function showTweets(callbackFn) {
      
            var xhr = new XMLHttpRequest();
                xhr.open('GET', 'Tweets.php', true);
                xhr.onreadystatechange = function() {
                    if(xhr.readyState == 4 && xhr.status == 200) {
                        showPosts(xhr.responseText);
                        callbackFn();
                    }
                }
            xhr.send();
    }

    function like() {

        var post = this.parentElement.
        parentElement.parentElement.
        parentElement.parentElement;

        var tweetID =  post.id;
        console.log(tweetID);

        var url = 'Likes.php?tweetID=' + tweetID;

        var p = this.nextElementSibling;
        var mybutton_svg = this.firstElementChild;
        console.log(mybutton_svg);


        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.onreadystatechange = function() {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                
                var json =JSON.parse(xhr.responseText);
                if(json[0].result == 'true') {
                var numLikes = parseInt(p.innerHTML) + 1;
                p.innerHTML = numLikes;
                mybutton_svg.style.fill = 'red';
                
                }
                else {
                var numLikes = parseInt(p.innerHTML) - 1;
                p.innerHTML = numLikes;
                mybutton_svg.style.fill = 'black';
                
                }
                
            } 
        }
        }

        xhr.send();
    }


    function isLiked(user_id, tweet_id) {
     
     return new Promise((resolve, reject) =>{
       var  url = `Checklikes.php?user_id=${user_id}&tweet_id=${tweet_id}`;
       var  xhr = new XMLHttpRequest();
       xhr.open('GET', url, true);
       xhr.onreadystatechange = function() {
         if(xhr.readyState == 4) {
           if(xhr.status == 200) {
             console.log(xhr.responseText);
             console.log(xhr.responseText == "true");
             if(xhr.responseText == 'true') {
               
               resolve(true);
             }
             else {
               reject(false);
             }
           }
         }
       }

       xhr.send();
     });

   }


    function bindThem() {

        var likeButtons = document.querySelectorAll('.likeButton');
          console.log(likeButtons);
          for(let i = 0; i < likeButtons.length; i++) {
            console.log("Binded in profile");
            likeButtons.item(i).addEventListener('click', like);
            console.log(likeButtons.item(i));
          }
    }



    setInterval(getNumberOfUnreadNotifications, 1000);
    window.onload = function () {

        showTweets(bindThem);
    }




        

    </script>
</body>

  