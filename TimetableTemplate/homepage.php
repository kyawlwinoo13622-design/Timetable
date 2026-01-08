<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
      nav{height: 80px;}
      
      .imga{margin-left: 100px;}
      .thisa{margin-right: 50px;}
      .firste{text-decoration: none;
        width: 900px;
        height: 900px;
        margin-top: 100px;
      }
      .uper{margin-top: 100px;}
      .studenta{border: none;}
      /* .studenta:hover{color: blueviolet;text-decoration: underline;} */
      .loginform{position: absolute;top: 100px;left: 100px;width: 500px;border: 1px solid black; border-radius: 20px;}
      .loginform{position: absolute;top: 100px;left: 100px;width: 500px;border: 1px solid black; border-radius: 20px;}
      /* .baby{background-image: url(clock2.png);} */
      
      .searchicon{position: absolute;right: 5px;bottom: 113px;}
      .wrapper{position: relative;}
      .ie{position: absolute;top: 10px;left: 450px;}
      .cross{margin-left: 430px;margin-top: 10px;}
      span:hover{cursor: pointer;color:brown;width: 50px;box-shadow:1px 1px black ;border-radius:20px ;}
      .span:hover{border-radius:20px ;color: brown;width: 50px;box-shadow: 1px 1px 5px black;}
      .errorm{background-color: black;}
      .forget{border: none;background-color:#99ccff;font-size: 13px;margin-left: 310px;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info">

<div class="container">
  
<a class="navbar-brand" href="#">

        <img src="ucsp.jpg" alt="UCSP" width="60px" height="60px" class="rounded-circle mb-1">
        <div class="badge text-bg-info text-wrap fs-5" style="width: 15rem;">
                <p class="lh-sm">Timetable of Computer University Pyay</p>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item mt-2 pe-4 "><span>Home</span></li>
        <li class="nav-item mt-2 pe-4">
          <form action="#" method="post"><input type="submit" name="log" value="Login" class="studenta bg-info span">
        </form>
      </li>
    </ul>
</div>
</div>
</nav>
<img src="clock1.avif" width="1500px" height="800px" >
<!-- <div class="baby"> -->

       
      <?php
      include("databaseConnection.php");
      if(isset($_POST['log'])){
        ?>
        
        <form action="#" method="post" class="loginform mt-5">
        
        <div class="container ">
            <div class="row">
                <div class="col cross"><button type="submit" name="close" class="btn bg-info-subtle"><i class="fa fa-times"></i></button></div>
            </div>
            <div class="mt-5"><h3 align="center">Login form</h3></div>
            <div class="row mt-5 wrapper">
                <div class="col">Name</div>
                <div class="col"><i class="fa fa-user ie"></i><input type="text" name="lname" class="form-control"></div>
            </div>
            <div class="row mt-3 wrapper">
                <div class="col">Email</div>
                <div class="col"><i class="fa fa-envelope ie"></i><input type="email" name="lemail" class="form-control" ></div>
            </div>
            <div class="row mt-3 wrapper">
                <div class="col">Password</div>
                <div class="col"><i class="fa fa-key ie"></i><input type="password" name="lpassword" class="form-control"></div>
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
            <div class="row mt-3 ">
            <div class="col"><input type="submit" name="forgot" value="..forgot Password?" class="forget mb-3"></div>
        </div>
            <div class="row mt-3 mb-5">
            <div class="col"><input type="reset" class="btn btn-outline-danger" name="lCancel" value="Cancel"></div>
            <div class="col"><input type="submit" class="btn btn-outline-success" name="lregister" value="Login"></div>
        </div>

        


        </div>  
    </form>

        


    <?php       
        
      }

      if(isset($_POST['close']))
      {
        header('Location:homepage.php');
      }
     


include("databaseConnection.php");
// $adminName="admin";
// $adminEmail="admin@gmail.com";
// $adaminPass="2712003";
// $_SESSION['aname']=$adminName;
// $_SESSION['aemail']=$adminEmail;
// $_SESSION['apassword']=$adaminPass;
    
    if(isset($_POST['lregister']))
    {
       
        $name=$_POST['lname'];
        $email=$_POST['lemail'];
        $password=$_POST['lpassword'];
        if(empty($name) || empty($email) ||empty($password) ){
                ?>
                <script type="text/javascript">
                    alert ("please");
                </script>
                <?php
        }
        else{
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        
       
        // echo $_SESSION['name'];
        // echo $_SESSION['email'];
        // echo $_SESSION['password'];
       $student="Students";
       $teacher="Teacher";
       $admin="admin";
      
        $result3=mysqli_query($db,"SELECT * FROM login WHERE Email='$email' AND Password='$password'");
        if(mysqli_num_rows($result3)>0){
            $row=mysqli_fetch_assoc($result3);
            if($student==$row['Roll']){
            header('Location:StudentSite.php');
            }
            else if($teacher==$row['Roll']){
                header('Location:alldepartment.php');
            }
            else if($admin==$row['Roll']){
                
                echo  $_SESSION['name'];
                echo  $_SESSION['email'];
                echo  $_SESSION['password'];
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
                                // session_start();
                                // $_SESSION['adminname']=$name;
                                // $_SESSION['adminemail']=$email;
                                // $_SESSION['adminpassword']=$password;
                                // echo $_SESSION['adminname'];

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
        
    }
    ?>

      <?php
           include("databaseConnection.php");
           if(isset($_POST['forgot']))
     { ?>
     <form method="post" class="loginform mt-5">
        <div class="container">
            <h3 class="text-center mt-5">Forget Password</h3>
            <div class="row mt-5 wrapper">
                <div class="col">Name</div>
                <div class="col"><input type="text" name="name" class="form-control"></div>
            </div>
            <div class="row mt-5 wrapper">
                <div class="col">Email</div>
                <div class="col"><input type="email" name="email" class="form-control"></div>
            </div>
            <div class="row mt-5 wrapper mb-5">
            <div class="col"><input type="reset" class="btn btn-outline-danger" name="lCancel" value="Cancel"></div>
                <div class="col"><input type="submit" name="Go" value="Send"  class="btn btn-outline-success"></div>
            </div>
        </div>
     </form>
     
     <?php   }
     include("databaseConnection.php");
     if(isset($_POST['Go']))
     {
        $name=$_POST['name'];
        $email=$_POST['email'];
         
        $query=mysqli_query($db,"select Password from login where Name='$name' and Email='$email'");
        if($query){

           if( $row=mysqli_fetch_assoc($query)){
           $pas= $row['Password'];
            $p="Your password is ".$pas;
           echo "<script>alert('$p');</script>";

           }
                
                    
                                
            }
        }
     
       ?>
<!-- </div> -->

</body>
</html>