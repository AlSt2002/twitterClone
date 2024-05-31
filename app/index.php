

<?php
require_once "autoloader.php";

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  
<?php include "inc/header.php" ?>

    <!-- End of nav -->

    <!-- Feed part -->
    <main class="container-sm-fluid flex-grow-1 flex-lg-grow-0 main-part overflow-y-auto overflow-x-hidden">
      <section class="main-section">
        <nav class="navbar border-bottom p-0 position-sticky" id="navbar-2">
          <div class="container-fluid p-0 d-flex flex-column">
            <div class="align-self-start d-md-none">
              <a class="navbar-brand d-md-none" href="#">Home</a>
            </div>
            <div class="container grid-container p-0">
              <div class="row h-100">
                <div class="col pe-0 d-flex justify-content-center align-content-center">
                  <a href="#firstlink" class="nav2-link d-flex justify-content-center align-items-center w-100 h-100" onclick="clickLink(this)" id="firstlink">For you</a>
                </div>
                <div class="col d-flex justify-content-center">
                  <a href="#" class="nav2-link  d-flex justify-content-center align-items-center w-100 h-100" onclick="clickLink(this)">Following</a>
                </div>
              </div>
            </div>
            
          </div>
        </nav>

        <article class="tweets" id="tweets-container">
          <div class="happeningContainer border-bottom">
            <form class="whatIsHappening p-4 d-flex gap-2" id="whatIsHappening">
              <div class="background-profile">
                <img src="img/user.png" class="w-100 h-100" alt="img">
              </div>
              <div class="happening flex-grow-1 d-flex flex-column">
                <div>
                  <textarea class="border-0" name="tweetText" id="tweetText" placeholder="What is happening?!"></textarea>
                </div>

                <div class="options">
                  <input type="file" id="fileInput" class="d-none">
                  <label for="fileInput" class= "media-label">
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="photo r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03">
                      <g>
                        <path class="alb" d="M3 5.5C3 4.119 4.119 3 5.5 3h13C19.881 3 21 4.119 21 5.5v13c0 1.381-1.119 2.5-2.5 2.5h-13C4.119 21 3 19.881 3 18.5v-13zM5.5 5c-.276 0-.5.224-.5.5v9.086l3-3 3 3 5-5 3 3V5.5c0-.276-.224-.5-.5-.5h-13zM19 15.414l-3-3-5 5-3-3-3 3V18.5c0 .276.224.5.5.5h13c.276 0 .5-.224.5-.5v-3.086zM9.75 7C8.784 7 8 7.784 8 8.75s.784 1.75 1.75 1.75 1.75-.784 1.75-1.75S10.716 7 9.75 7z"></path>
                      </g>
                    </svg>
                  </label>

                  <svg viewBox="0 0 24 24" aria-hidden="true" class="photo r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(29, 155, 240);"><g><path class="alb" d="M3 5.5C3 4.119 4.12 3 5.5 3h13C19.88 3 21 4.119 21 5.5v13c0 1.381-1.12 2.5-2.5 2.5h-13C4.12 21 3 19.881 3 18.5v-13zM5.5 5c-.28 0-.5.224-.5.5v13c0 .276.22.5.5.5h13c.28 0 .5-.224.5-.5v-13c0-.276-.22-.5-.5-.5h-13zM18 10.711V9.25h-3.74v5.5h1.44v-1.719h1.7V11.57h-1.7v-.859H18zM11.79 9.25h1.44v5.5h-1.44v-5.5zm-3.07 1.375c.34 0 .77.172 1.02.43l1.03-.86c-.51-.601-1.28-.945-2.05-.945C7.19 9.25 6 10.453 6 12s1.19 2.75 2.72 2.75c.85 0 1.54-.344 2.05-.945v-2.149H8.38v1.032H9.4v.515c-.17.086-.42.172-.68.172-.76 0-1.36-.602-1.36-1.375 0-.688.6-1.375 1.36-1.375z"></path></g></svg>
                  
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="photo r-4qtqp9 r-yyyyoo r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-z80fyv r-19wmn03" style="color: rgb(29, 155, 240);"><g><path class="alb" d="M8 9.5C8 8.119 8.672 7 9.5 7S11 8.119 11 9.5 10.328 12 9.5 12 8 10.881 8 9.5zm6.5 2.5c.828 0 1.5-1.119 1.5-2.5S15.328 7 14.5 7 13 8.119 13 9.5s.672 2.5 1.5 2.5zM12 16c-2.224 0-3.021-2.227-3.051-2.316l-1.897.633c.05.15 1.271 3.684 4.949 3.684s4.898-3.533 4.949-3.684l-1.896-.638c-.033.095-.83 2.322-3.053 2.322zm10.25-4.001c0 5.652-4.598 10.25-10.25 10.25S1.75 17.652 1.75 12 6.348 1.75 12 1.75 22.25 6.348 22.25 12zm-2 0c0-4.549-3.701-8.25-8.25-8.25S3.75 7.451 3.75 12s3.701 8.25 8.25 8.25 8.25-3.701 8.25-8.25z"></path></g></svg>


                  <input type="button" value="Post" name="post" id="post-button" class="p-button btn btn-primary rounded-5">

                </div>

              </div>
            </form>
          </div>

          <div id="tweets">
              <!-- <div class="container-fluid postContainer border-bottom">
                <form class="post p-4 d-flex gap-2">
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

                </form>
              </div>

                  <div class="postContainer border-bottom">
                    <form class="imagePost p-4 d-flex gap-2">
                      <div class="background-profile">
                        <img class="h-100" src="img/new-twitter-logo-x-2023-twitter-x-logo-official-vector-download_691560-10797.avif" alt="img">
                      </div>

                  <div class="infoAndPost">
                    <div class="userInfo d-flex gap-1">
                      <p class="fw-bold">Elon Musk</p>
                      <p id="u_name">@elonmusk</p>
                      <p id="u_name">Apr 14</p>
                    </div>

                    <p class="content">To thine own self be true</p>

                    <div class="imageContainer mb-3">
                      <img src="img/VODAFONE-IDEA-ELON-MUSK--0_1704468659371_1704676718132.avif" alt="">
                    </div>

                    <div class="replyRetweet d-flex gap-5">
                      <div class="d-flex gap-1 align-content-center">
                        <button class="replyButton">
                          <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true"><g><path d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"></path></g></svg>
                        </button>
                        <p id="noOfPosts" class="mb-0 align-self-center">11K</p>
                      </div>
                      <div class="d-flex gap-1">
                        <button class="replyButton">
                          <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true"><g><path d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"></path></g></svg>
                        </button>
                        <p id="noOfPosts" class="mb-0 align-self-center">11K</p>
                      </div>

                      <div class="d-flex gap-1">
                        <button class="replyButton">
                          <svg class="likebutton" viewBox="0 0 24 24" aria-hidden="true"><g><path d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"></path></g></svg>
                        </button>
                        <p id="noOfPosts" class="mb-0 align-self-center">11K</p>
                      </div>
                      
                    </div>
                  </div>
                </form>
              </div> -->

          </div>

        </article>
      </section>

    </main>

    <?php include 'inc/aside.php'; ?>
    <!-- SVG Template -->
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

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/showPosts.js"></script>
   


  <script>

  document.addEventListener('DOMContentLoaded', function() {
      var postButton = document.getElementById('post-button');
      postButton.addEventListener('click', addTweet);

  });


   
    function addTweet() {
        // get the form
        var form = document.getElementById("whatIsHappening");
        var url = 'AddTweet.php?' + new Date().getTime();

        // get the form data
        var formData = new FormData(form);
        formData.append('post', 'Post');

        // for([key, value] of formData.entries()) {
        //   console.log(key + ": " + value);
        // }

        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.onreadystatechange = function () {
          if(xhr.readyState == 4 && xhr.status == 200) {
           
            $('#tweets').load(location.href + " #tweets");
            showTweets(bindbuttons);
            form.reset();
            
          }
        }

        xhr.send(formData);
        
    }
   

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



    function userInfo() {

      return new Promise((resolve, reject) => {
      var  url = "UserInfo.php";
      var xhr = new XMLHttpRequest();
        
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function () {
          if(xhr.readyState == 4) {
              if(xhr.status == 200) {
                resolve(xhr.responseText);
              }
              else {
                reject("Error getting Id");
              }
         
          }
        }

        xhr.send();
      })
     
    }

    async function getUserId() {
      user_id = await userInfo();
      return user_id;
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

    function uptate_likes(responseText) {
      var result = JSON.parse(responseText);

      
      for(tweet of result) {
        var tweetByid = document.getElementById(`tweet-${tweet.id}`);
        
        var form = tweetByid.children[0];
        var postAndInfo = form.children[1];
        var replyRetweet = postAndInfo.children[2];
        var parentLikes = replyRetweet.children[2];
        var noOfLikes = parentLikes.children[1];

        noOfLikes.textContent = tweet.likes;

        

      }
    }

    function updateLikes() {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'Tweets.php', true);
      xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200) {
          uptate_likes(xhr.responseText);
        }

      }
      xhr.send();
    }


    function bindbuttons() {
      
        var likeButtons = document.querySelectorAll('.likeButton');
          console.log(likeButtons);
          for(let i = 0; i < likeButtons.length; i++) {
            console.log("Binded");
            likeButtons.item(i).addEventListener('click', like);
            console.log(likeButtons.item(i));
          }
    }

    
   
    window.onload = function() {
       
        showTweets(bindbuttons);

        (async () => {
          var user_id = await getUserId();


        })()

        setInterval(updateLikes, 5000);
      
    }

    

  </script>

  </body>
</html>
