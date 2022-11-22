<?php
$server = "Localhost";
$name = "root";
$password = "masith23";
$db = "user_registration";
try{
    $con = new PDO("mysql:host = $server;dbname=$db;charset=UTF8",$name,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // echo "conected <br>";

}
catch(PDOException $e){
    echo $e;
    echo "Error in database connection. Please try again later!";
}



?>