<?php
include "conn.php";

if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $msg = $_REQUEST['message'];

    try{
        
        $sql = "INSERT INTO user_msg VALUES(NULL,'$name','$email','$msg')";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        echo "<h1>Message Sent!</h1><br><button><a href='form.html'>Return</a></button>";
    }
    catch(PDOException $e){
        echo "Error in quary";
    }



}



?>