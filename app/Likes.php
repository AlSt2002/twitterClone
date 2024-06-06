<?php 

use App\Lib\Like;
use App\Lib\Notification;
use App\Lib\Tweet;
use App\Lib\Session;

include "autoloader.php";



if(isset($_GET['tweetID'])) {
    $raw_id = $_GET['tweetID'];
  
    $id = preg_match('/tweet-(\d+)/', $raw_id, $matches);
    $tweet_id = $matches[1];
  
    $tweet = new Tweet();
    $session = new Session();
    $tweet = $tweet->find_id($tweet_id);
    $like = new Like();
    $notification = new Notification();

    $success = [];

    if($like->isLiked($session->userId, $tweet->getId())) {
      
        $like = $like->isLiked($session->userId, $tweet->getId());
        $like->delete();
        $success[] = ['result' => 'false'];
        echo json_encode($success);
      

    } else {
      
        $like->setUser_id($session->userId);
        $like->setTweet_id($tweet->getId());
        $like->create();

        $notification->setUser_id($tweet->getUser_id());
        $notification->setAction_user_id($session->userId);
        $notification->setTweet_id($tweet->getId());
        $notification->setNotification_type('like');

        $notification->create();
        


        $success[] = ['result' => 'true'];
        echo json_encode($success);


    }

   

}



?>
