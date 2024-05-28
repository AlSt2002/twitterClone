<?php 

use App\Lib\Like;
use App\Lib\Tweet;

include "autoloader.php";



if(isset($_GET['tweetID'])) {
    $raw_id = $_GET['tweetID'];
    echo $raw_id;
    echo "<br>";
    $id = preg_match('/tweet-(\d+)/', $raw_id, $matches);
    $tweet_id = $matches[1];
    echo $tweet_id;
    echo "<br>";
    $tweet = new Tweet();
    $tweet = $tweet->find_id($tweet_id);

    header('Content-Type: application/json; charset=utf-8');

    json_encode(print_r($tweet->getLikes()));

}
else{
    echo $_GET['tweetID'];
    echo "Id not set";
}


?>
