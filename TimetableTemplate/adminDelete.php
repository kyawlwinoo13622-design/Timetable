<?php
 include("databaseConnection.php");
if(isset($_GET['deleteId'])){
    $no=$_GET['deleteId'];
    $sql="delete from admin where id='$no'";
    $result=mysqli_query($db,$sql);
    if($result){
        header('location:New.php');
    }
    else{
        die(mysqli_error($db));
    }
}

?>