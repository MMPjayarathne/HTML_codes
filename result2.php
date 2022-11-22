<?php
$st_no = 0;
$record_for = 25;

$end = $st_no+$record_for;
$sql = "SELECT * FROM result Where (id >= ".$st_no.") AND (id <=".$end.")";
if(isset($_REQUEST["next"])){
    $st_no =  $_REQUEST["hidden"];
    //echo $st_no;
    $end = $st_no+$record_for;
    //echo $un;
    $sql = "SELECT * FROM result Where (id >= ".$st_no.") AND (id <=".$end.")";
    //echo $sql;
}
if(isset($_REQUEST["previos"])){
    $st_no =  $_REQUEST["hidden"] - $record_for;
    $end = $_REQUEST["hidden"];
    //echo $un;
    $sql = "SELECT * FROM result Where (id >= ".$st_no.") AND (id <=".$end.")";
    //echo $sql;
}

echo $sql;
include "conn2.php";

//$sql = "SELECT * FROM result where id<21";
$stmt = $con->prepare($sql);
$stmt->execute();
$list = $stmt->fetchAll();
//var_dump($list); //any time function we can use to check the varible values 

?>
<html>
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
    echo " <tr>
    <td>".$r['id']."</td>
    <td>".$r['subject1']."</td>
    <td>".$r['subject1_grade']."</td>
    <td>".$r['subject2']."</td>
    <td>".$r['subject2_grade']."</td>
    <td>".$r['subject3']."</td>
    <td>".$r['subject3_grade']."</td>
</tr>";
}?>
       
    </table>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method = "post">
        <input type="hidden" name = "hidden" value = "<?php echo $st_no ?>">
        
        <input type="submit" name ="previous" value="previous">
        <input type="hidden" name = "hidden" value ="<?php echo $end ?>">
        
        <input type="submit" name ="next" value="next">
   

    </form>
