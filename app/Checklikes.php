<?php 

use App\Lib\Like;


include 'autoloader.php';

if(isset($_GET['user_id']) && isset($_GET['tweet_id'])) {
    
    $like = new Like();
    $like= $like->isLiked($_GET['user_id'], $_GET['tweet_id']);
   
    if($like->isLiked($_GET['user_id'], $_GET['tweet_id'])){

        echo "true";
    }
    else {
        echo "false";
    }
}



?>