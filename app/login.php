
<?php 



use App\Lib\Session;
use App\Lib\User;

require_once "autoloader.php";

?>

<?php 
     
    $session = new Session();
   
    if ($session->isSignedIn()) {
        header("Location: index.php");
    }

?>

<h1>Login Page</h1>

<form method="post" id="login">
<label for="name">
        Email:
    </label>
    <input type="email" name="email">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <input type="submit" name="login" value="Login">


</form>

<?php 
    if(isset($_POST['login'])) {
        $user = new User();
         $u = $user->verifyUser($_POST['email'], $_POST['password']);
          
        if($u) {
            $session->login($u);
            header("Location: index.php");
        }
        else {
        $session->message("Could not log in");
        }
        
    }


?>