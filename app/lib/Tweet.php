<?php

namespace App\Lib;

use App\Lib\Database;
use JsonSerializable;
use PDO;

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



        public function showTweets() {
            $sql = "SELECT * FROM tweets t INNER JOIN users u ON t.user_id = u.id";
            $stmt = $this->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ ."\\{$this->getClassName()}");

            return $stmt->fetchAll();

        }
    }




?>