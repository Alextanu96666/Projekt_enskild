<?php
include_once 'classes/db.php';
/*
class RegistrationDB {
    private $db;
    public function __construct() {
        $obj = New DB();
        $this->db = $obj->pdo;
    }

    public function Register($firstname, $lastname, $adress) {
        if(!empty($firstname) && !empty($lastname) && !empty($adress)) {
            $stmt = $this->db->prepare("SELECT * FROM customers WHERE firstName =? AND lastName =? AND Adress=?");
            $stmt->bindParam(1, $firstname);
            $stmt->bindParam(2, $lastname);
            $stmt->bindParam(3, $adress);
            $stmt->execute();
            if($stmt->rowCount() == 0) {
                $query = $this->db->prepare('INSERT INTO customers (firstname, lastname, adress) VALUES (:firstName, :lastName, :Adress)');
                $query->execute(array(':firstName' => $firstname,':lastName' => $lastname, ':Adress' => $adress));
                echo ("d funkade");
            }

            if($stmt->rowCount() > 0) {
                echo 'd finns redan';
            }
            
        }
    }

}

*/

class RegisterObjekt {
    private $db;
    public function __construct() {
        $obj = New DB();
        $this->db = $obj->pdo;
    }

    public function ObjektRegister($tickets) {
        if (!empty($numberoftickets)) {
        //    function option1($tickets) {
        //        if (is_array($tickets, $obj->pdo)) {
         //           foreach($tickets as $row => $value[0]) {
          //              $item = mysqli_real_escape_string($obj->pdo, $value[0]);
                        $stmt = $this->db->prepare("SELECT * FROM test_table WHERE  NumOfTickets =?");
                        $stmt->bindParam(1, $numberoftickets);
                        
                        $stmt->execute();
                        if($stmt->rowCount() == 0) {
                            $query = $this->db->prepare('INSERT INTO test_table (numberoftickets) VALUES (:NumOfTickets');
                            $query->execute(array(':NumOfTickets' => $numberoftickets ));
                            echo ("d funkade");
                    }

                }
            }
        }
   /*    
    }
}

}

*/