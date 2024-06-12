<?php 

use App\Lib\Retweet;

include "autoloader.php";  

if(isset($_GET['user_id']) && isset($_GET['tweet_id'])) {

    $retweet = new Retweet();
    
    if($retweet->isRetweeted($_GET['user_id'], $_GET['tweet_id'])) {
        echo 'true';
    }
    else {
        echo 'false';
    }


}



?>