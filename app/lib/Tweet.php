<?php

namespace App\Lib;

use App\Lib\Database;
use JsonSerializable;
use PDO;
use PDOException;

    class Tweet extends Database implements JsonSerializable {

        protected $id;
        protected $user_id;
        protected $tweetText;
        //protected $tweetImageUrl;

        protected static $db_table = 'tweets';
        protected static $db_fields = ['id', 'user_id', 'tweetText'];

        
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

        
        public function getTweetText()
        {
            return $this->tweetText;
        }

       
        public function setTweetText($tweetText)
        {
            $this->tweetText = $tweetText;
        }


        public function jsonSerialize(): mixed
        {
            return get_object_vars($this);
        }


        public function getLikes() {

           try {
            $sql = "SELECT * FROM likes WHERE tweet_id=:tweet_id";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':tweet_id', $this->id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Like");
            return $stmt->fetchAll();
           } catch (\Throwable $th) {
                $th->getMessage();
           }

        }
        
    }




?>