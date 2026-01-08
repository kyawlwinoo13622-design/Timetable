<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Profile</h3>
    <form action="#" method="post" enctype="multipart/form-data"> 
       Name <input type="text" name="name">
       Password <input type="password" name="password">
    Photo<input type="file" name="uploadfile" id="file">
    <input type="submit" name="upload" value="Change">
    <?php
        include("databaseConnection.php");
        
        if(isset($_POST['upload']))
         {
           
            $name=$_POST['name'];
            $pass=$_POST['password'];
           session_start();
                 $nn=$_SESSION['name'];
                $pp=$_SESSION['password'];
            $filename=$_FILES["uploadfile"]["name"];
            $tempname=$_FILES["uploadfile"]["tmp_name"];
            $folder="./photo/".$filename;
         $sql="update login set img='$filename' where Name='$nn' and Password='$pp'";
           mysqli_query($db,$sql);
            if(move_uploaded_file($tempname,$folder)){
                echo "Image upload successfully";
            }
            else{
                echo "error";
            }
        }
    
    ?>
    </form>
</body>
</html>