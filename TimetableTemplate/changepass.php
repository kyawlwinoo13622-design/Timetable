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
            $oldpass=$_POST['oldpass'];
            $newpass=$_POST['newpass'];
            $conpass=$_POST['conpass'];
            $goo=mysqli_query($db,"SELECT Password FROM login WHERE Name='$n'");
            if($goo){
                while($row=mysqli_fetch_assoc($goo)){
                    $oldpass1=$row['Password'];
                    if($oldpass==$oldpass1){
                        if($newpass==$conpass){
                            mysqli_query($db,"update login set Password='$newpass' where Name='$n'");
                            mysqli_query($db,"update register set Password='$newpass' where Name='$n'");
                            echo "Your update is Ok";
                        }
                        else{
                            echo "New password and Confirm password is not same";
                        }
                    }
                    else{
                        echo "Your old password is not correct";
                    }
                }
            }
        }
    ?>

    <form action="StudentSite.php" method="post">
        Old Password
        <input type="password" name="oldpass">
        New Password
        <input type="password" name="newpass">
        Confirm Password
        <input type="password" name="conpass">
        <input type="submit" name="submit" value="Change">
     </form>
</body>
</html>