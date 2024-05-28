<?php

use App\Lib\Tweet;
use App\Lib\User;

include 'autoloader.php';


$tweet = new Tweet();

$result  = [];

$tweets = $tweet->find_all();

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

            'id' => $tweet->getId() ,

            'tweetText' => $tweet->getTweetText(),
            'likes' => count($tweet->getLikes())

            
        
        ];

        
    }


    header('Content-Type: application/json; charset=utf-8');

   

    echo json_encode( array_reverse($result));



?>