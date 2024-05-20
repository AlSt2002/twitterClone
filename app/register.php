
<?php 
use App\Lib\User;

require_once "autoloader.php";


?>




<h1>Register form</h1>

<form method="post" id="register" class="registerForm">
    <label for="name">
        Username:
    </label>
    <input type="text" name="username">
    <label for="email">Email:</label>
    <input type="email" name="email">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname">
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname">
    <input type="submit" name="register" value="Register">

</form>

<?php 
    if(isset($_POST['register'])) {
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname']);
        $user->register();
    }



?>