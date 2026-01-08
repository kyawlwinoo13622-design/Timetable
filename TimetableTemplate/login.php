

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
       
    </style>
</head>
<body>
    <form action="#" method="post">
        
        <div class="container">
            <div class="mt-5"><h3 align="center">Login form</h3></div>
            <div class="row">
                <div class="col">Name</div>
                <div class="col"><input type="text" name="lname"></div>
            </div>
            <div class="row">
                <div class="col">Email</div>
                <div class="col"><input type="email" name="lemail"></div>
            </div>
            <div class="row">
                <div class="col">Password</div>
                <div class="col"><input type="password" name="lpassword"></div>
            </div>
            <!-- <div class="row">
                <div class="col">Year</div>
            <div class="col">
                        <select name="lyear" class="form-select" aria-label="Default select example">
    
                            <option value="First year">First year</option>
                            <option value="Second year">Second year</option>
                            <option value="Third year">Third year</option>
                            <option value="Fourth year">Fourth year</option>
                            <option value="Fifth year">Fifth year</option>
                        </select>
                    </div>
            </div> -->
            
            <div class="row">
            <div class="col"><input type="reset" class="btn btn-outline-danger" name="lCancel" value="Cancel"></div>
            <div class="col"><input type="submit" class="btn btn-outline-success" name="lregister" value="Submit">
</div>
        </div>
    </form>
    <?php


    include("databaseConnection.php");
    // $adminName="admin";
    // $adminEmail="admin@gmail.com";
    // $adaminPass="2712003";

    // $adminName1="admin1";
    // $adminEmail1="admin1@gmail.com";
    // $adaminPass1="1222004";
   
        
        if(isset($_POST['lregister']))
        {
            $name=$_POST['lname'];
            $email=$_POST['lemail'];
            $password=$_POST['lpassword'];
            
            session_start();
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            
            // $_SESSION['name']=$adminName;
            // $_SESSION['email']=$adminemail;
            // $_SESSION['password']=$adminPass;
            // echo $_SESSION['name'];
            // echo $_SESSION['email'];
            // echo $_SESSION['password'];
           $student="Students";
           $teacher="Teacher";
            $admin="Admin";
          
            $result3=mysqli_query($db,"SELECT * FROM login WHERE Email='$email' AND Password='$password'");
            if(mysqli_num_rows($result3)>0){
                $row=mysqli_fetch_assoc($result3);
                if($student==$row['Roll']){
                header('Location:StudentSite.php');
                }
                else if($teacher==$row['Roll']){
                    header('Location:alldepartment.php');
                }
                else{
                    header('Location:New.php');
                }
             }

            else{
             $result2=mysqli_query($db,"SELECT * FROM register WHERE Email='$email' AND Password='$password'");
            if($result2){
                
                while($row=mysqli_fetch_assoc($result2)){ 
                   if($email==$row['Email'] && $password==$row['Password'])
                    {
                        $image="profile.jpg";
                        mysqli_query($db,"INSERT INTO Login (Name,Email,Password,Roll,img) VALUES('$name','$email','$password','$student','$image')");
                        header('Location:StudentSite.php');
                        echo "Successful";
                    }
                    else{
                        echo "eror";
                    }
                }
            }



                    $result4=mysqli_query($db,"SELECT * FROM teacher WHERE email='$email' AND password='$password'");
                    if($result4){
                        
                        while($row=mysqli_fetch_assoc($result4)){ 
                           if($email==$row['email'] && $password==$row['password'])
                            {
                                $image="profile.jpg";
                                mysqli_query($db,"INSERT INTO Login (Name,Email,Password,Roll,img) VALUES('$name','$email','$password','$teacher','$image')");
                                header('Location:alldepartment.php');
                                echo "Successful";
                            }
                            else{
                                echo "eror";
                            }
                    // else if($email==$row['Email'] && $password==$row['Password'] && $teacher==$row['roll']){
                    //     $image="profile.jpg";
                    //     mysqli_query($db,"INSERT INTO Login (Name,Email,Password,Year,Roll,img) VALUES('$name','$email','$password','$year','$roll','$image')");
                    //     header('Location:alldepartment.php');
                    //     echo "Successful";
                    // }
                }
                    }

                    $rr=mysqli_query($db,"SELECT * FROM admin WHERE Email='$email' AND Password='$password'");

                    if($rr){
                        
                        while($row=mysqli_fetch_assoc($rr)){ 
                           if($email==$row['Email'] && $password==$row['Password'])
                            {
                                $image="profile.jpg";
                                mysqli_query($db,"INSERT INTO login (Name,Email,Password,Roll,img) VALUES('$name','$email','$password','$admin','$image')");
                                header('Location:New.php');
                                echo "Successful";
                            }
                            else{
                                echo "eror";
                            }
                        }
                    }
                   
                }
        
           
            
        }
            
        
        

    ?>
</body>
</html>