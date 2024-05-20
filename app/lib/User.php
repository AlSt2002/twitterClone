<?php 

namespace App\Lib;

use PDO;

class User extends Database {


    protected $id;
    protected $username;
    protected $email;
    protected $password;
    protected $profileImage;
    protected $firstname;
    protected $lastname;
    protected $imageArray;


    protected static $db_table = "users";
    protected static $db_fields = ['id' , 'username', 'email', 'password', 'profileImage', 'firstname', 'lastname'];

    
   
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }

   
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getEmail()
    {
        return $this->email;
    }

   
    public function setEmail($email)
    {
        $this->email = $email;
    }

    
    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

   
    public function getProfileImage()
    {
        return $this->profileImage;
    }

  
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;
    }

    
    public function getFirstname()
    {
        return $this->firstname;
    }

   
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    
    public function getLastname()
    {
        return $this->lastname;
    }

   
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

   
    public function getImageArray()
    {
        return $this->imageArray;
    }

   
    public function setImageArray($imageArray)
    {
        $this->imageArray = $imageArray;
    }


    public function register() {
        parent::create();

    }


    public function verifyUser($email, $password) {
        $sql = "SELECT * FROM users";
        $sql .= " WHERE email=:email AND password=:password";
        $result = $this->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $result->fetch();
    }
}










?>