<?php 
    
namespace App\Lib;

use JsonSerializable;
use PDO;

class Notification extends Database implements JsonSerializable {
    
    protected $id;
    protected $user_id;
    protected $action_user_id;
    protected $tweet_id;
    protected $notification_type;
    protected $is_read;


    protected static $db_table = "notifications";
    protected static $db_fields = ['id' , 'user_id', 'action_user_id', 'tweet_id', 'notification_type'];
    


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

    public function getAction_user_id()
    {
        return $this->action_user_id;
    }

    public function setAction_user_id($action_user_id)
    {
        $this->action_user_id = $action_user_id;

    }

    
    public function getTweet_id()
    {
        return $this->tweet_id;
    }

   
    public function setTweet_id($tweet_id)
    {
        $this->tweet_id = $tweet_id;

        return $this;
    }

    
    public function getNotification_type()
    {
        return $this->notification_type;
    }

   
    public function setNotification_type($notification_type)
    {
        $this->notification_type = $notification_type;

        return $this;
    }

    
    public function getIs_read()
    {
        return $this->is_read;
    }

   
    public function setIs_read($is_read)
    {
        $this->is_read = $is_read;
        
    }

    function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }


     function getNotificationsByUserId($user_id) {
        try {
            $this->user_id = $user_id;
            $sql = "SELECT * FROM notifications WHERE user_id=:user_id";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':user_id', $this->user_id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Notification");
            return $stmt->fetchAll();
           } catch (\Throwable $th) {
                $th->getMessage();
           }

        }
}



?>
