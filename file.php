


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 


$conn = mysqli_connect ("localhost", "root", "", "projekt_ensk");

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$adress = $_POST['adress'];
$tickets = $_POST['def-input'];



if (is_array($tickets)) {
    foreach($tickets as $row => $value[0]) {
        $item = mysqli_real_escape_string($conn, $value[0]);
        $random = substr(md5(time()), 0, 16);
        echo $random;
        


    }


}
    
/*
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $adress = $_POST['adress'];
        
    
        

        $sqlperson = "INSERT INTO test_table(firstName, lastName, Adress) VALUES ('$firstname', '$lastname', '$adress')";
        mysqli_query($conn, $sqlperson);
        
        
                
                


                $sql = "INSERT INTO test_table (Tickets) VALUES ('$item')";
                mysqli_query($conn, $sql);
                                 
                                
        
    
    }

}
    
*/

?>
<div style="width:300px; height:300px;"> <h3><?php echo $item ?></h3>

</body>
</html>