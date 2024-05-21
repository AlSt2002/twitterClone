<?php



use App\Lib\Session;
use App\Lib\Tweet;

include "autoloader.php";

$session = new Session();
$user_id = $session->userId;


if(isset($_POST['post'])) {
   
    $tweet = new Tweet();
    $tweet->setUser_id($user_id);
    $tweet->setTweetText($_POST['tweetText']);
    $tweet->create();
    
}











?>