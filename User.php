<?php
include_once 'classes/db.php';

class User {
    private $db;
    public function __construct() {
        $obj = New DB();
        $this->db = $obj->pdo;
    }
   public function Login($username, $password) {
       if(!empty($username) && !empty($password)) {
        $stmt = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE username =? AND password =?");
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        if($stmt->rowCount() == 1) {
            $_SESSION['username'] = $_POST['username'];   //funkar inte att skapa Session
            header("location:CRUD/index.php");
         // echo 'correct';
        }
        elseif ($stmt->rowCount() == 0) {
            echo 'It does not exist in the database, please Sign In first';
        }

    }

}

        public function Error() {
            if(empty($username) || empty($password)) {
                echo 'Du måste skriva in password eller username';
            }
}

}

        
       
  

       
   


