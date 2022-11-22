<!DOCTYPE html>
<html>
<head>
<script src="form_validation.js"></script>
<link rel="stylesheet" href="style.css">
<?php 
include "conn.php";
if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['Uname'];
    $password = $_REQUEST['pw'];
    try{
        $sql = "INSERT INTO accounts values(Null,'$username','".md5($password)."')";
        //echo $sql;
        $stmt = $con->prepare($sql);
        $stmt->execute();
    }
    catch(PDOException $e){
        echo("<scrpt> alert('Cannot add the data to the databse!')<script>");
    }

}


?>
</head>
<body>
    
<div class = "main">
    <div class="signup">
        <h1 >Sign UP</h1>
        <div class="form">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="signUP" onsubmit="return validForm()" method="POST">
            <br>
            <label for = "username" id="unamelbl">Username</label>
            <input type="text" placeholder="Username" name = "Uname" onkeypress="validateUsername()"><br><br>
            <label for = "password" id="passwordlbl">Password</label>
            <input type="Password" placeholder="Password" name = "pw"><br><br>
            <label for = "ConfirmPassword" id="confirmPasswordlbl">Confirm Password</label>
            <input type="password" placeholder="Enter the password again" name = "cpw"> <br><br><br>  
            <button type="submit" name="submit" value="" >Signup</button> 
            </form>  
        </div>
    
    

    </div>


</div>

</body>





</html>