<?php
 include("databaseConnection.php");
if(isset($_GET['deleteId'])){
    $id=$_GET['deleteId'];
    $sql="delete from teacher where id='$id'";
    $result=mysqli_query($db,$sql);
    if($result){
        header('location:New.php');
    }
    else{
        die(mysqli_error($db));
    }
}

?>