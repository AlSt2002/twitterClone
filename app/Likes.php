<?php 

use App\Lib\Like;
use App\Lib\Tweet;

include "autoloader.php";



if(isset($_GET['tweetID'])) {
    $raw_id = $_GET['tweetID'];
    //echo $raw_id;
    //echo "<br>";
    $id = preg_match('/tweet-(\d+)/', $raw_id, $matches);
    $tweet_id = $matches[1];
    //echo $tweet_id;
    //echo "<br>";
    $tweet = new Tweet();
    $tweet = $tweet->find_id($tweet_id);
    $like = new Like();

    $success = [];

    if($like->isLiked($tweet->getUser_id(), $tweet->getId())) {
      
        $like = $like->isLiked($tweet->getUser_id(), $tweet->getId());
        $like->delete();
        $success[] = ['result' => 'false'];
        echo json_encode($success);
      

    } else {
      
        $like->setUser_id($tweet->getUser_id());
        $like->setTweet_id($tweet->getId());
        $like->create();
        $success[] = ['result' => 'true'];
        echo json_encode($success);


    }

   

}



?>
