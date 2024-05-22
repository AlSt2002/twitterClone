<?php

use App\Lib\Tweet;
use App\Lib\User;

include 'autoloader.php';


$tweet = new Tweet();

$result  = [];

$tweets = $tweet->showTweets();

    foreach($tweets as $tweet) {
        $user = new User();
        $user = $user->find_id($tweet->getUser_id());
       
        $result[] = 
        [
           
            'userInfo'=>
            [
                'firstname' => $user->getFirstname(), 
                'lastname' => $user->getLastname(), 
                'username' => $user->getUsername()
                
            ], 

            'tweetText' => $tweet->getTweetText()

            
        
        ];

        
    }


    header('Content-Type: application/json; charset=utf-8');


    echo json_encode($result);



?>