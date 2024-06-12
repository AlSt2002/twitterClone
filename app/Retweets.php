<?php

use App\Lib\Notification;
use App\Lib\Retweet;
use App\Lib\Session;
use App\Lib\Tweet;

include "autoloader.php";

if(isset($_GET['tweetID'])) {
    $raw_id = $_GET['tweetID'];
    $id = preg_match('/tweet-(\d+)/', $raw_id, $matches);
    $tweet_id = $matches[1];

    $tweet = new Tweet();
    $session = new Session();
    $tweet = $tweet->find_id($tweet_id);
    $retweet = new Retweet();
    $notification = new Notification();

    $success = [];

    if($retweet->isRetweeted($session->userId, $tweet->getId())) {
        $retweet = $retweet->isRetweeted($session->userId, $tweet->getId());
        $retweet->delete();
        $success[] = ['result' => 'false']; 
        echo json_encode($success);
    }
    else {
        $retweet->setUser_id($session->userId);
        $retweet->setTweet_id($tweet->getId());
        $retweet->create();

        $notification->setUser_id($tweet->getUser_id());
        $notification->setAction_user_id($session->userId);
        $notification->setTweet_id($tweet->getId());
        $notification->setNotification_type('retweet');

        $notification->create();

        $success[] = ['result' => 'true'];
        echo json_encode($success);
    }

    
}

?>