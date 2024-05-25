<?php

namespace App\Lib;

use App\Lib\Database;


class Like extends Database {

    protected $id;
    protected $user_id;
    protected $tweet_id;


    protected static $db_table = "likes";
    protected static $db_fields = ['id' , 'user_id', 'tweet_id'];


    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;
    }

 
    public function getUser_id()
    {
        return $this->user_id;
    }

   
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    
    public function getTweet_id()
    {
        return $this->tweet_id;
    }

    public function setTweet_id($tweet_id)
    {
        $this->tweet_id = $tweet_id;
    }
}










?>