<?php 

use App\Lib\Session;

include 'autoloader.php';

$session = new Session();

if($session->isSignedIn()) {
    echo $session->userId;
}
else {
    echo "Id not set";
}





?>