<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("databaseConnection.php");
        
        if(isset($_POST['submit'])) {
            session_start();
            $n=$_SESSION['name'];
            echo $n;
            $oldname=$_POST['oldname'];
            $newname=$_POST['newname'];
            $conname=$_POST['conname'];
            $goo=mysqli_query($db,"SELECT Name FROM login WHERE Name='$n'");
            if($goo){
                while($row=mysqli_fetch_assoc($goo)){
                    $oldname1=$row['Name'];
                    if($oldname==$oldname1){
                        if($newname==$conname){
                            mysqli_query($db,"update login set Name='$newname' where Name='$n'");
                            mysqli_query($db,"update register set Name='$newname' where Name='$n'");
                            echo "Your update is Ok";
                        }
                        else{
                            echo "New Name and Confirm Name is not same";
                        }
                    }
                    else{
                        echo "Your old Name is not correct";
                    }
                }
            }
        }
    ?>

    <form action="#" method="post">
        Old Name
        <input type="text" name="oldname">
        New Name
        <input type="text" name="newname">
        Confirm Name
        <input type="text" name="conname">
        <input type="submit" name="submit" value="Change">
     </form>
</body>
</html>