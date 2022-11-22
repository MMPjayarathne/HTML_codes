<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <?php 
    include "conn.php";
    session_start();
    $st_no =0;
    $end = 100;
    $sql = "SELECT * FROM result Where (id >= ".$st_no.") AND (id <=".$end.")";
    if(isset($_REQUEST['nav'])){
        $_SESSION['recSize'] = 100;
        echo "Hello";
        $curent = $_REQUEST['nav'];

        $st_no = $curent*$_SESSION['recSize']  - $_SESSION['recSize'] ;
        $end = $curent*$_SESSION['recSize'] ;

        $sql = "SELECT * FROM result Where (id >= ".$st_no.") AND (id <=".$end.")";
        


    }
 
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $list = $stmt->fetchAll();


?>
<style>
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>

<h2>Results</h2>

<table border="1">
<tr>
<td>ID</td>
<td>Subject 01</td>
<td>Subject 01 Grade</td>
<td>Subject 02</td>
<td>Subject 02 Grade</td>
<td>Subject 03</td>
<td>Subject 03 Grade</td>

</tr>

<?php
foreach($list as $r){
    echo "<tr>
        <td>".$r[0]."</td>
        <td>".$r[1]."</td>
        <td>".$r[2]."</td>
        <td>".$r[3]."</td>
        <td>".$r[4]."</td>
        <td>".$r[5]."</td>
        <td>".$r[6]."</td>

    <tr>";

}

?>



</table>

<div class="pagination" >
 <form action="list.php">   
  <input type="submit" name="nav" value="&laquo">
  <input type="submit" name="nav" value="1">
  <input type="submit" name="nav" value="2">
  <input type="submit" name="nav" value="3">
  <input type="submit" name="nav" value="4">
  <input type="submit" name="nav" value="5">
  <input type="submit" name="nav" value="6">
  <input type="submit" name="nav" value="7">
  <input type="submit" name="nav" value="8">
  <input type="submit" name="nav" value="9">
  <input type="submit" name="nav" value="10">
  <input type="submit" name="nav" value="&laquo">
 </form> 
</div>







    
</body>
</html>