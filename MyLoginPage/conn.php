<?php 
$server =  "Localhost";
$user = "root";
$password = "masith23";
$db = "user_registration";

try{

    $con = new PDO("mysql:host = $server;dbname=$db;charset=UTF8",$user,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



}
catch(PDOException $e){

    echo "Error in database connection!";
}


?>