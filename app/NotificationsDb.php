<?php  

use App\Lib\Notification;
use App\Lib\User;

include 'autoloader.php';

$unread_notifications = [];

if(isset($_GET['userId'])) {
    $notifications = new Notification();
    $notifications = $notifications->getNotificationsByUserId($_GET['userId']);
    foreach($notifications as $notification) {
   
        if($notification->getIs_read() == 0) {
            $unread_notifications[] = [
              'id' => $notification->getId(),
              'user_id' => $notification->getUser_id(),
              'action_user_id' => $notification->getAction_user_id(),
              'tweet_id' => $notification->getTweet_id(),
              'notification_type' => $notification->getNotification_type(),
              'is_read' => $notification->getIs_read()
    
            ];
        }
       
    }

}
else {
    echo 'User id is not set';
}
 


header('Content-Type: application/json; charset=utf-8');

echo json_encode($unread_notifications);

?>