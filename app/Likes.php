<?php 

use App\Lib\Like;
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
        $success[] = ['result' => 'true'];
        echo json_encode($success);


    }

   

}



?>
