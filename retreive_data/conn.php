<?php
$server = "localhost";
$user = "root";
$pass = "masith23";
$db = "uni";

try{
    $con = new PDO("mysql:host = $server;dbname=$db;charset=UTF8",$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Successfully Connected<br>";
}
catch(PDOException $e){
    die("Error in connection!");

}

/*$con = mysqli_connect("localhost","root","masith23","student") or die("Error");
*/
if($con){
   // echo "Connecting the server successfully";
}


?>