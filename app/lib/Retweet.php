<?php

namespace App\Lib;

use App\Lib\Database;
use PDO;

class Retweet extends Database {

    protected $id;
    protected $user_id;
    protected $tweet_id;


    protected static $db_table = "retweets";
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

    public function isRetweeted($user_id, $tweet_id) {
        try {
            
            $sql = "SELECT * FROM retweets WHERE user_id=:user_id && tweet_id=:tweet_id";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":tweet_id", $tweet_id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
    
            return $stmt->fetch();
        
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }
}




?>