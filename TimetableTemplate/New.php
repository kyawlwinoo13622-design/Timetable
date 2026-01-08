<?php
  session_start();
  //  $adminName=$_SESSION['name'];
  //  $adminEmail=$_SESSION['email'];
  //  $adminPassword=$_SESSION['password'];
  // echo  $_SESSION['name'];
  // echo  $_SESSION['email'];
  // echo  $_SESSION['password'];
 $adminname= $_SESSION['name'];
$adminemail=$_SESSION['email'];
$adminpassword=$_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    
    <script src="bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    
    <style>
      #sc{overflow-y: scroll;max-height: 70%;}
      .studenta{border: none;}
      .fclearborder{border :none;}
      /* search icon */
      .searchicon{position: absolute;right: 150px;top: 30px;}

      nav{height: 80px;}
      .back{background-color: #00c3ff;border-radius: 10px;}
      .addio{position: relative;background-color: #00c3ff;color:black; border-radius: 40px;}
      .addio:hover{color: white;box-shadow: 1px 1px 5px whitesmoke;border-radius: 20%;background-color: black;}
      .addicon{position: absolute;right: 0;top: 0;}
      .apple{position: relative;}
      .ie{position: absolute;top: 10px;left: 510px;}
      .studentregister{margin-right: 50px;}
      .stro{color: black;}
      .span:hover{color: brown;box-shadow: 1px 1px 5px black;border-radius: 20%;}
      .spane:hover{color: brown;box-shadow: 1px 1px 5px black;border-radius: 10%;}
      .cross{margin-left: 430px;margin-top: 10px;}
      /* Admin insert */
      .addtable{border: 1px solid black;width: 50%;padding: 20px;}
      .addcancel{margin-top: 10px;}
      .addinsert{margin-left: 200px;margin-top: 10px;}
        /* This is operation */
        .edit{color: green;width: 20px;}
        .trash{color:red;width: 20px;}
        .operationtable:nth-child(even){
          background-color: yellow;
        }
        .operationtable:nth-child(odd){
          background-color: greenyellow;
        }
        .errormeassage{margin-left: 216px;margin-top: 10px;}
        .errorcolor{background-color: #ef5350;box-shadow: 2px 2px 5px black;}
        .successcolor{background-color: greenyellow;box-shadow: 2px 2px 5px black;}
        .major{background-color: #00c3ff;border-radius: 50px;cursor: pointer;}
        .addclose{color: red;font-size: 20px;}
        .abc{background-color: aqua;}
        label{padding: 20px;}
        .tableprofile{border: 6px dotted black;}
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-info bg-info ">
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

    <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <form method="post">
          <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <input type="submit" value="TeacherRegister" class="studenta bg-info span">
          </a>

          <ul class="dropdown-menu">
          <li><button type="submit" class="dropdown-item" name="tshow">Show list</button></li>
          <li><hr class="dropdown-divider"></li>
          <li><button type="submit" class="dropdown-item" name="tregister">register New</button></li>
          
        </ul>

          </form>
        </li>
      </ul>
    
    <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        <form method="post">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <input type="submit" value="StudentRegister" class="studenta bg-info span">
        </a>

        <ul class="dropdown-menu">
          <li><button type="submit" class="dropdown-item" name="rshow">Show list</button></li>
          <li><hr class="dropdown-divider"></li>
          <li><button type="submit" class="dropdown-item"  name="register">register New</button></li>
          
        </ul>
        </form>
        </li>
    </ul>

    <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <form method="post">
          <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <input type="submit" value="AdminRegister" class="studenta bg-info span">
          </a>

          <ul class="dropdown-menu">
          <li><button type="submit" class="dropdown-item" name="ashow">Show list</button></li>
          <li><hr class="dropdown-divider"></li>
          <li><button type="submit" class="dropdown-item" name="aregister">register New</button></li>
          
        </ul>

          </form>
        </li>
      </ul>
    
      
      <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link stro spane" href="alldepartment.php ">Department</a>
        </li>
      </ul>
      <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link stro spane" href="homepage.php">Logout</a>
        </li>
      </ul>
     

      <div class="dropdown">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php


            include("databaseConnection.php");
             
            //  session_start();
            // //  $adminName=$_SESSION['name'];
            // //  $adminEmail=$_SESSION['email'];
            // //  $adminPassword=$_SESSION['password'];
            // echo  $_SESSION['name'];
            // echo  $_SESSION['email'];
            // echo  $_SESSION['password'];


                $img="SELECT img FROM login WHERE Name='$adminname' AND Email='$adminemail' AND Password='$adminpassword'";
                $re=mysqli_query($db,$img);
                if($re){
                    $row=mysqli_fetch_assoc($re)
                    
                    ?>
                        <img src="<?php echo $row['img']?>" width="30px" height="30px" class="rounded-circle">
                    <?php
                    
                }
            ?>
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Edit</a></li>
                <li><hr></li>

                <button class="btn btn-primary dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add photo</button>
                <button class="btn btn-primary dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">Change Password</button>
                <button class="btn btn-primary dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">Change Name</button>
                
          </ul>
        </div>

</div>



    </div> 
  </div>
  
  
</nav>



<div class="offcanvas offcanvas-end abc" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Profile</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

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
    <h3>change Name</h3>
        <table class="tableprofile"s>
            <tr>
      <td> <label> Old Name</label></td>
       <td> <input type="text" name="oldname"></td></tr>
        <tr><td><label> Name</label></td>
        <td><input type="text" name="newname"></td></tr>
        <tr>
      <td> <label> Confirm Name</label></td>
       <td> <input type="text" name="conname"></td></tr>
       <tr>
        <td><label><input type="submit" name="submit" value="Change"></label></td></tr>
        </table>
     </form>
  </div>
</div>

<!-- Change password -->

<div class="offcanvas offcanvas-end abc" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Profile</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
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

    <form action="#" method="post">
        <h3>change password</h3>
        <table class="tableprofile">
            <tr>
       <td><label> Old Password</label></td>
       <td> <input type="password" name="oldpass"></td></tr>
       <tr>
      <td> <label> Password</label></td>
       <td> <input type="password" name="newpass"></td></tr>
        <tr>
       <td><label> Password</label></td>
       <td> <input type="password" name="conpass"></td></tr>
       <tr><td>
        <label><input type="submit" name="submit" value="Change"></label></td></tr>
        </table>
     </form>
  </div>
</div>
<!-- Add photo -->
<div class="offcanvas offcanvas-end abc" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Profile</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <h3>Add Photo</h3>
    <form action="#" method="post" enctype="multipart/form-data"> 
        <table class="tableprofile">
            <tr>
      <td> <label>Name</label></td> 
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td> <label>password</label> </td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
   <td><label> Photo</label></td>
   <td><input type="file" name="uploadfile" id="file"></td>
    </tr>
   <tr>
   <td><label> <input type="submit" name="upload" value="Change"></label></td>
    </tr>
        </table>
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
                header('Location:StudentSite.php');
            }
            else{
                echo "error";
            }
        }
    
    ?>
    </form>
  </div>
</div>















<div class="container-fluid bg-info-subtle">
    <div class="row">
      <div class="col-3">

        <div class="container"id="sc">
          <form action="#" method="post">
          <div class="row mt-3">
            <div class="col"><h5 class="text-center">View</h5></div>
          </div>
          <div class="row back mt-3 mb-3">
            <div class="col"><h5 class="text-center ">Student Area</h5></div>
          </div>

        <!-- <form action="#" method="post"> -->

          <div class="row">
            <div class="col ms-3">First Year&nbsp;<i class="fa fa-sort-down" style="font-size:24px"></i></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>
            <input type="submit" name="fsectiona" value="Section A" class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg> 
            <input type="submit" name="fsectionb" value="Section B" class="studenta btn btn-info-subtle">
            </div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>
            <input type="submit" name="fsectionc" value="Section C" class="studenta btn btn-info-subtle">
            </div>
          </div>
          <div class="row">
            <div class="col ms-3 mt-3">Second Year(Junior)&nbsp;<i class="fa fa-sort-down" style="font-size:24px"></i></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>
              <input type="submit" name="ssectiona" value="Section A " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>
              <input type="submit" name="ssectionb" value="Section B" class="studenta btn btn-info-subtle">
</div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>
            <input type="submit" name="ssectionc" value="Section C" class="studenta btn btn-info-subtle">
</div>
          </div>
          <div class="row">
            <div class="col ms-3 mt-3">Second Year(Senior)&nbsp;<i class="fa fa-sort-down" style="font-size:24px"></i></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="ssectiond" value="Section A(CS) " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="ssectione" value="Section B(CS) " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="ssectionf" value="Section C(CS) " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="ssectionct" value="CT " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-3 mt-3">Third Year&nbsp;<i class="fa fa-sort-down" style="font-size:24px"></i></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="tsectiona" value="Section A(CS) " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="tsectionb" value="Section B(CS)" class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="tsectionct" value="CT " class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-3 mt-3">Fourth Year&nbsp;<i class="fa fa-sort-down" style="font-size:24px"></i></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fusectiona" value="Section A(CS) " class="studenta btn btn-info-subtle"></div>
          </div>
          <!-- <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fusectionb" value="Section B(CS)" class="studenta btn btn-info-subtle"></div>
          </div> -->
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fusectionct" value="CT" class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-3 mt-3">Fifth Year&nbsp;<i class="fa fa-sort-down" style="font-size:24px"></i></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fisectiona" value="Section A(CS)" class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fisectionb" value="Section B(CS)" class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row" >
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fisectionct" value="CT" class="studenta btn btn-info-subtle"></div>
          </div>
        </form>

        </div>
      </div>
      


      
      <div class="col-9">
        <form action="#" method="post">
        <div class="row mt-4">
          <div class="col"><h5 style="color: blue;">Choose to insert new data</h5></div>
        </div>
        <div class="row">
          <div class="col-3">Class</div>
          <div class="col-3">Section</div>
          <div class="col">Major</div>
        </div>
        <div class="row">
          <div class="col-3">
            <select name="class" class="major">
              <option value="">Choose</option>
              <option value="First Year">First Year</option>
              <option value="Second Year">Second Year</option>
              <option value="Third Year">Third Year</option>
              <option value="Fourth Year">Fourth Year</option>
              <option value="Fifth Year">Fifth Year</option>
            </select>
          </div>
          <div class="col-3">
            <select name="section" class="major">
              <option value="">Choose</option>
              <option value="Section A">Section A</option>
              <option value="Section B">Section B</option>
              <option value="Section C">Section C</option>
            </select>
          </div>
          <div class="col">
            <select name="major" class="major">
              <option value="">Choose</option>
              <option value="CS">CS</option>
              <option value="CT">CT</option>
              <option value="CST">CST</option>
            </select>
            
          <button type="submit" class="ms-2 addio" name="add">Add<i class="ms-2 fa fa-add"></i></button>      
            <input type="submit" class="ms-2 addio" name="operations" value="operations">
        </div>
        </div>
        </form>
        <hr>

        <!-- show admin -->

        <?php
        include("databaseConnection.php");
        if(isset($_POST['ashow'])){
          ?>
          <form action="" method="post">
  
  
        <table border=1 class="mt-5 p-5 text-center">
          
  <tr class="border border-secondary">
    <th class="border border-secondary p-2" >Name</th>
    <th class="border border-secondary p-2">Email</th>
    <th class="border border-secondary p-2">Password</th>
    <th class="border border-secondary p-2">Delete</th>
  </tr>
  <?php
          $rshow=mysqli_query($db,"SELECT * FROM admin");
          if($rshow)
          {
            while($row=mysqli_fetch_assoc($rshow))
            {
              $no=$row['ID'];
              $name=$row['Name'];
              $email=$row['Email'];
              $password=$row['Password'];
              echo '<tbody>
              <tr class="border border-secondary operationtable">
                <td class="border border-secondary p-2">'.$name.'</td>
                <td class="border border-secondary p-2">'.$email.'</td>
                <td class="border border-secondary p-2">'.$password.'</td>';

                if($name!="admin" && $email!="admin@gmail.com" && $password!="2712003")
                {
                  echo '
                <td class="border border-secondary p-2">
                  
                  <button class="btn bg-info-subtle"><a class="link-offset-2 link-underline link-underline-opacity-0" href="adminDelete.php?deleteId='.$no.'"><i class="fa fa-trash trash"></i></a></button>
                </td>';
                }
              echo '</tr></tbody>';
              }
          }
          ?>
        </table>
          <?php

        }
        
  


include("databaseConnection.php");
               if(isset($_POST['adregister']))
      
               {
                  
                   $name=$_POST['u1'];
                   $email=$_POST['uEmail'];
                   
                   $password=$_POST['uPassword'];
                   $confirm=$_POST['uConfirm'];

                   if(empty($name) || empty($email) ||empty($password) ||empty($confirm)){
                    ?>
                    <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">Please fill out this field...
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                   }
                   else{

                   $exist=mysqli_query($db,"SELECT * FROM admin WHERE Name='$name' AND Email='$email' AND Password='$password' AND ConfirmPassword='$confirm'");
                   if(mysqli_num_rows($exist)>0){
                    ?>
                    <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3 mb-2">User already exist..
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                   }
                  
                          
                       else{
      
                          if($password==$confirm){
                             $img="profile.jpg";
                              $query=("INSERT INTO admin (Name,Email,Password,ConfirmPassword,img) VALUES('$name','$email','$password','$confirm','$img')");
                                   $result=mysqli_query($db,$query);
                                   if($result){
                                    ?>
                    <form action="New.php" method="post">
                   <div class="successcolor w-25 rounded">
                    <p class="ms-3">Your Registration is successful...
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                                   }
                                   else{
                                    ?>
                                    <form action="New.php" method="post">
                                   <div class="errorcolor w-25 rounded">
                                    <p class="ms-3">Your insert is fil..
                                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                    </p>
                                   </div>
                                   </form>
                                   <?php
                                   }
                                   
                               }
                               else{
                                ?>
                                <form action="New.php" method="post">
                                <div class="errorcolor w-25 rounded">
                                    <p class="ms-3">Password and confirm password are not same...
                                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                    </p>
                               </form>
                               <?php
                               }    
                              
                         
                       }
                       
                       }    }  
                      
          ?>



    <!-- show student -->
    <?php
        include("databaseConnection.php");
        if(isset($_POST['rshow'])){
          ?>
          <form action="" method="post">
  
  
        <table border=1 class="mt-5 p-5 text-center">
          
  <tr class="border border-secondary">
    <th class="border border-secondary p-2" >Name</th>
    <th class="border border-secondary p-2">Email</th>
    <th class="border border-secondary p-2">Password</th>
    <th class="border border-secondary p-2">Delete</th>
  </tr>
  <?php
          $rshow=mysqli_query($db,"SELECT * FROM register");
          if($rshow)
          {
            while($row=mysqli_fetch_assoc($rshow))
            {
              $no=$row['No'];
              $name=$row['Name'];
              $email=$row['Email'];
              $password=$row['Password'];
              echo '<tbody>
              <tr class="border border-secondary operationtable">
                <td class="border border-secondary p-2">'.$name.'</td>
                <td class="border border-secondary p-2">'.$email.'</td>
                <td class="border border-secondary p-2">'.$password.'</td>
                
                <td class="border border-secondary p-2">
                  
                  <button class="btn bg-info-subtle"><a class="link-offset-2 link-underline link-underline-opacity-0" href="registerDelete.php?deleteId='.$no.'"><i class="fa fa-trash trash"></i></a></button>
                </td>
              </tr></tbody>';
            }
          }
          ?>
        </table>
          <?php

        }
        
  
?>
    <!-- show teacher -->

<?php
        include("databaseConnection.php");
        if(isset($_POST['tshow'])){
          ?>
         <form action="" method="post">
  
  
  <table border=1 class="mt-5 p-5 text-center">
    
<tr class="border border-secondary">
<th class="border border-secondary p-2" >Name</th>
<th class="border border-secondary p-2">Email</th>
<th class="border border-secondary p-2">Department</th>
<th class="border border-secondary p-2">Password</th>
<th class="border border-secondary p-2">Delete</th>
</tr>
          <?php
          $rshow=mysqli_query($db,"SELECT * FROM teacher");
          if($rshow)
          {
            while($row=mysqli_fetch_assoc($rshow))
            {
              $id=$row['id'];
              $name=$row['name'];
              $email=$row['email'];
              $department=$row['department'];
              $password=$row['password'];
              echo '<tbody>
              <tr class="border border-secondary operationtable">
                <td class="border border-secondary p-2">'.$name.'</td>
                <td class="border border-secondary p-2">'.$email.'</td>
                <td class="border border-secondary p-2">'.$department.'</td>
                <td class="border border-secondary p-2">'.$password.'</td>
                
                <td class="border border-secondary p-2">
                  <button class="btn bg-info-subtle"><a class="link-offset-2 link-underline link-underline-opacity-0" href="teacherDelete.php?deleteId='.$id.'"><i class="fa fa-trash trash"></i></a></button>
                </td>
              </tr></tbody>';
            }
          }
          ?>
  </table>
          <?php

        }
        
  
?>

        <!-- admin register -->


        <?php
        include("databaseConnection.php");
        if(isset($_POST['aregister'])){
          ?>
          <form action="#" method="post" class="border border-secondary w-50 m-4 rounded">
          <div class="container">
          <div class="row">
                <div class="col cross"><button type="submit" name="close1" class="btn bg-info-subtle"><i class="fa fa-times addclose ms-5"></i></button></div>
            </div>

              <div class="mt-5 p-3"><h2 align="center">Registration Form</h2></div>
              <div class="row mb-3 apple">
                  <div class="col">Name</div>
                  <div class="col"> <i class="fa fa-user ie"></i><input type="text" name="u1" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Email</div>
                  <div class="col"><i class="fa fa-envelope ie"></i><input type="email" name="uEmail" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Password</div>
                  <div class="col"><i class="fa fa-key ie"></i><input type="password" name="uPassword" class="form-control border-success" ></div>
              </div>
              
              <div class="row mb-3 apple">
                  <div class="col">Confirm Password</div>
                  <div class="col"><i class="fa fa-key ie"></i><input type="password" name="uConfirm" class="form-control border-success" >
              
                  <div id="incorrect"></div>
              </div>
                  <div id="validationServer03Feedback" class="invalid-feedback"></div>
      
              </div>
              <div class="row mb-4">
                  <div class="col"><input type="reset" class="btn btn-outline-danger" name="uCancel" value="Cancel"></div>
                  <div class="col"><input type="submit" class="btn btn-outline-success" name="adregister" value="Register">
              </div>
              </div>
          </div>
          </form>
      
          <?php
        }
         ?>

        <!-- register student -->
        <?php
        include("databaseConnection.php");
        if(isset($_POST['register'])){
          ?>
          <form action="#" method="post" class="border border-secondary w-50 m-4 rounded">
          <div class="container">
          <div class="row">
                <div class="col cross"><button type="submit" name="close1" class="btn bg-info-subtle"><i class="fa fa-times addclose ms-5"></i></button></div>
            </div>

              <div class="mt-5 p-3"><h2 align="center">Registration Form</h2></div>
              <div class="row mb-3 apple">
                  <div class="col">Name</div>
                  <div class="col"> <i class="fa fa-user ie"></i><input type="text" name="u1" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Email</div>
                  <div class="col"><i class="fa fa-envelope ie"></i><input type="email" name="uEmail" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Password</div>
                  <div class="col"><i class="fa fa-key ie"></i><input type="password" name="uPassword" class="form-control border-success" ></div>
              </div>
              
              <div class="row mb-3 apple">
                  <div class="col">Confirm Password</div>
                  <div class="col"><i class="fa fa-key ie"></i><input type="password" name="uConfirm" class="form-control border-success" >
              
                  <div id="incorrect"></div>
              </div>
                  <div id="validationServer03Feedback" class="invalid-feedback"></div>
      
              </div>
              <div class="row mb-4">
                  <div class="col"><input type="reset" class="btn btn-outline-danger" name="uCancel" value="Cancel"></div>
                  <div class="col"><input type="submit" class="btn btn-outline-success" name="uregister" value="Submit">
              </div>
              </div>
          </div>
          </form>
      
          <?php
        }
          include("databaseConnection.php");
               if(isset($_POST['uregister']))
      
               {
                  
                   $name=$_POST['u1'];
                   $email=$_POST['uEmail'];
                   
                   $password=$_POST['uPassword'];
                   $confirm=$_POST['uConfirm'];

                   if(empty($name) || empty($email) ||empty($password) ||empty($confirm)){
                   ?>
                    <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">Please fill out all field...
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times "></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                    }

                   else{

                   $exist=mysqli_query($db,"SELECT * FROM register WHERE Name='$name' AND Email='$email' AND Password='$password' AND ConfirmPassword='$confirm'");
                   if(mysqli_num_rows($exist)>0){
                    ?>
                    <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">User already exist go login...
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                   }
                  
                          
                       else{
      
                          if($password==$confirm){
                             
                              $query=("INSERT INTO register (Name,Email,Password,ConfirmPassword) VALUES('$name','$email','$password','$confirm')");
                                   $result=mysqli_query($db,$query);
                                   if($result){
                                    ?>
                                    <form action="New.php" method="post">
                                   <div class="successcolor w-25 rounded">
                                    <p class="ms-3">Your Registration is successful...
                                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                    </p>
                                   </div>
                                   </form>
                                   <?php
                                   }
                                   else{
                                    ?>
                                    <form action="New.php" method="post">
                                   <div class="errorcolor w-25 rounded">
                                    <p class="ms-3">Your insert is failed..
                                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                    </p>
                                   </div>
                                   </form>
                                   <?php
                                   }
                                   
                               }
                               else{
                                   ?>
                    <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">Password and confirm password is not same...
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                               }    
                              
                         
                       }
                       
                       }    }  
                      
          ?>
                  


          <?php
        include("databaseConnection.php");
        if(isset($_POST['tregister'])){
          ?>
          <form action="#" method="post" class="border border-secondary w-50 m-4 rounded teacher">
          <div class="container">
          <div class="row">
                <div class="col cross"><button type="submit" name="close1" class="btn bg-info-subtle"><i class="fa fa-times addclose ms-5"></i></button></div>
            </div>
              <div class="mt-5 p-3"><h2 align="center">Registration Form</h2></div>
              
              <div class="row mb-3 apple">
                  <div class="col">Name</div>
                  <div class="col"> <i class="fa fa-user ie"></i><input type="text" name="t1" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Email</div>
                  <div class="col"><i class="fa fa-envelope ie"></i><input type="email" name="tEmail" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Department</div>
                  <div class="col"><i class="fa fa-users ie"></i><input type="text" name="tdepartment" class="form-control border-success" ></div>
              </div>
              <div class="row mb-3 apple">
                  <div class="col">Password</div>
                  <div class="col"><i class="fa fa-key ie"></i><input type="password" name="tPassword" class="form-control border-success" ></div>
              </div>
              
              <div class="row mb-3 apple">
                  <div class="col">Confirm Password</div>
                  <div class="col"><i class="fa fa-key ie"></i><input type="password" name="tConfirm" class="form-control border-success" >
              
                  <div id="incorrect"></div>
              </div>
                  <div id="validationServer03Feedback" class="invalid-feedback"></div>
      
              </div>
              <div class="row mb-4">
                  <div class="col"><input type="reset" class="btn btn-outline-danger" name="tCancel" value="Cancel"></div>
                  <div class="col"><input type="submit" class="btn btn-outline-success" name="teregister" value="Submit">
              </div>
              </div>
          </div>
          </form>
      
          <?php
        }
              include("databaseConnection.php");
               if(isset($_POST['teregister']))
      
               {
      
                   $tname=$_POST['t1'];
                   $temail=$_POST['tEmail'];
                   $tdepartment=$_POST['tdepartment'];
                   $tpassword=$_POST['tPassword'];
                    $tconfirmpass=$_POST['tConfirm'];
                    if(empty($tname) || empty($temail) ||empty($tdepartment)||empty($tpassword)||empty($tconfirmpass) ){
                      ?>
                      <form action="New.php" method="post">
                     <div class="errorcolor w-25 rounded">
                      <p class="ms-3">Please fill out all field..
                      <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                      </p>
                     </div>
                     </form>
                     <?php
                     }
                     else{
                   $exist=mysqli_query($db,"SELECT * FROM teacher WHERE name='$tname' AND email='$temail' AND password='$tpassword'");
                   if(mysqli_num_rows($exist)>0){
                    ?>
                    <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">User already exist go login...
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                   }
                  
                          
                       else{
      
                          if($tpassword==$tconfirmpass){
                             
                              $query=("INSERT INTO teacher (name,email,department,password,confirmpassword) VALUES('$tname','$temail','$tdepartment','$tpassword','$tconfirmpass')");
                                   $result=mysqli_query($db,$query);
                                   if($result){
                                    ?>
                                    <form action="New.php" method="post">
                                   <div class="successcolor w-25 rounded">
                                    <p class="ms-3">Your Registration is successful...
                                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                    </p>
                                   </div>
                                   </form>
                                   <?php
                                   }
                                   else{
                                    ?>
                                    <form action="New.php" method="post">
                                   <div class="errorcolor w-25 rounded">
                                    <p class="ms-3">Your insert is fill..
                                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                    </p>
                                   </div>
                                   </form>
                                   <?php
                                   }
                                   
                               }
                               else{
                                ?>
                                <form action="New.php" method="post">
                               <div class="errorcolor w-25 rounded">
                                <p class="ms-3">Password and confirm password is not same...
                                <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                                </p>
                               </div>
                               </form>
                               <?php
                               }    
                              
                         
                       }
                       
                       }   }   
                      
          ?>
         
            <!-- This is insert new data -->

          <?php
           
              if(isset($_POST['add'])){
                $class=$_POST['class'];
                $section=$_POST['section'];
                $major=$_POST['major'];
                if(!empty($class) && !empty($section) && !empty($major))
                { 
                ?>
              
              
                <form action="" class="mt-5 ms-5 addtable" method="post">
                  <table cellpadding="15px">
                    <tr>
                    <div class="row addclose  ms-5">
                <div class="col cross"><button type="submit" name="close1" class="btn bg-info-subtle"><i class="fa fa-times addclose"></i></button></div>
            </div>
                    </tr>
                    <tr >
                      <td class="mt-5">Class</td>
                      <td><input type="text" name="classw"  class="form-control mt-1" value="<?php echo $class;?>"></td>
                    </tr>
                    <tr >
                      <td class="mt-5">Section</td>
                      <td><input type="text" name="sectionw"  class="form-control mt-1" value="<?php echo $section;?>"></td>
                    </tr>
                    
                    <tr >
                      <td class="mt-5">Major</td>
                      <td><input type="text" name="majorw"  class="form-control mt-1" value="<?php echo $major;?>"></td>
                    </tr>
                    <tr>
                      <td class="mt-5">Subject</td>
                      <td><input type="text" name="subject"  class="form-control mt-1" value=""></td>
                    </tr>
                    <tr>
                      <td class="mt-5">Subject Code</td>
                      <td><input type="text" name="subjectCode"  class="form-control mt-1" value=""></td>
                    </tr>
                    <tr>
                      <td class="mt-5">Teacher</td>
                      <td><input type="text" name="teachername" class="form-control mt-1" value=""></td>
                    </tr>
                    <tr>
                      <td class="mt-5">Department</td>
                      <td><input type="text" name="department"  class="form-control mt-1" value=""></td>
                    </tr>
                    
                    <tr>
                      <td class="mt-5">Day</td>
                      <td><input type="text" value="" name="day" class=" form-control mt-1"></td>
                    </tr>
                    <tr>
                      <td class="mt-5">Time</td>
                      <td><input type="text" value="" name="time" class=" form-control mt-1"></td>
                    </tr>
                    <tr>
                    <td class="mt-5"><input type="reset" name="cancel" value="Cancel" class="addcancel btn btn-outline-danger"></td>
                      <td class="mt-5 "><input type="submit" name="insert" value="Insert" class="addinsert btn btn-outline-success"></td>
                    </tr>
                  </table>
                </form>
                    <!-- Error Message design -->
                <?php
                   }
                   else{
                   ?>
                   <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">Please Choose Class,Section and Major
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                    
                   }
                   
         if(isset($_POST['close1']))
      {
        header('location:New.php');
      }

          
                  }
                 
              include("databaseConnection.php");
              if(isset($_POST['insert'])){
                $classa=$_POST['classw'];
                $sectiona=$_POST['sectionw'];
                $subject=$_POST['subject'];
                $subjectcode=$_POST['subjectCode'];
                $majora=$_POST['majorw'];
                $teachername=$_POST['teachername'];
                $department=$_POST['department'];
                $time=$_POST['time'];
                $day=$_POST['day'];
              

                // $duplicateQuery1="SELECT * FROM alldata WHERE TeacherName='$teachername' AND Day='$day' AND Time='$time'";
                // $duplicate1=mysqli_query($db,$duplicateQuery1);
                
                

                $duplicateQuery="SELECT * FROM alldata WHERE Day='$day' AND Time='$time' AND Section='$sectiona' AND Class='$classa'";
                $duplicate=mysqli_query($db,$duplicateQuery);

                $duplicateQuery1="SELECT * FROM alldata WHERE TeacherName='$teachername' AND Day='$day' AND Time='$time'";
                $duplicate1=mysqli_query($db,$duplicateQuery1);




                if(empty($classa) || empty($sectiona) ||empty($subject) || empty($subjectcode) ||empty($majora) ||empty($teachername) ||empty($department) ||empty($time) ||empty($day) ){
                  ?>
                   <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">All the field are required..
                    <button type="submit" name="close1" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php
                 
                }

                
                
                // if($duplicate1){
                //     if($row=mysqli_fetch_assoc($duplicate1)){
                //         $teachername1=$row['TeacherName'];
                //         $time1=$row['time'];
                //         $day1=$row['day'];
                //         if($teachername==$teachername1 && $time==$time1 && $day==$day1)
                //         {
                //           echo "This teacher is already exist";
                //         }
                //     }
                // }

                else{


                  if(mysqli_num_rows($duplicate)>0){

                    if(mysqli_num_rows($duplicate1)>0)
                    {
                      echo "<script>alert ('Your insert is failed');</script>";
                    }
                       else{

                      //   $result=("INSERT INTO alldata (Class,Section,Subject,SubjectCode,Major,TeacherName,DepartmentName,Day,Time) VALUES ('$classa','$sectiona','$subject','$subjectcode','$majora','$teachername','$department','$day','$time')");
                      //  $ok=mysqli_query($db,$result);
                      //  if($ok){
                      // echo "<script>alert ('Your insert is successful');</script>";
                      //  }

                      echo "<script>alert ('Your insert is errr');</script>";
                        }

                     
                   }
                  
                  else{
                    if(mysqli_num_rows($duplicate1)>0)
                    {
                      echo "<script>alert ('Your insert is error');</script>";
                    }
                       else{

                        $result=("INSERT INTO alldata (Class,Section,Subject,SubjectCode,Major,TeacherName,DepartmentName,Day,Time) VALUES ('$classa','$sectiona','$subject','$subjectcode','$majora','$teachername','$department','$day','$time')");
                       $ok=mysqli_query($db,$result);
                       if($ok){
                      echo "<script>alert ('Your insert is successful');</script>";
                       }
                        }
                  }
                                
                //  else if($duplicate1){
                //     if($row=mysqli_fetch_assoc($duplicate1)){
                //         $teachername1=$row['TeacherName'];
                //         $time1=$row['Time'];
                //         $day1=$row['Day'];
                //         if($teachername==$teachername1 && $time==$time1 && $day==$day1)
                //         {
                //           echo "This teacher is already exist";
                //         }
                        
                //     }
                // }








              //     else{

              //   $result=("INSERT INTO alldata (Class,Section,Subject,SubjectCode,Major,TeacherName,DepartmentName,Day,Time) VALUES ('$classa','$sectiona','$subject','$subjectcode','$majora','$teachername','$department','$day','$time')");
              //  $ok=mysqli_query($db,$result);
              //  if($ok){
              // echo "<script>alert ('Your insert is successful');</script>";
              //  }
              //   }

              
              }

            }
              ?>



              <?php
               include("databaseConnection.php");
               if(isset($_POST['fsectiona'])){
                 include("firstyearsectiona.php");
               }
               else if(isset($_POST['fsectionb'])){
                 include("firstYearSectionB.php");
               }
               else if(isset($_POST['fsectionc'])){
                 include("firstYearSectionC.php");
               }
               else if(isset($_POST['ssectiona'])){
                 include("secondYearAJunior.php");
               }
               else if(isset($_POST['ssectionb'])){
                 include("secondYearBJunior.php");
               }
               else if(isset($_POST['ssectionc'])){
                 include("secondYearCJunior.php");
               }
               else if(isset($_POST['ssectiond'])){
                 include("secondYearASenior.php");
               }
               else if(isset($_POST['ssectione'])){
                 include("secondYearBSenior.php");
               }
               else if(isset($_POST['ssectionf'])){
                 include("secondYearCSenior.php");
               }
               else if(isset($_POST['ssectionct'])){
                 include("secondYearCT.php");
               }
               else if(isset($_POST['tsectiona'])){
                 include("thirdYearSectionA.php");
               }
               else if(isset($_POST['tsectionb'])){
                 include("thirdYearSectionB.php");
               }
               else if(isset($_POST['tsectionct'])){
                 include("thirdYearCT.php");
               }
               else if(isset($_POST['fusectiona'])){
                 include("fourthYearSectionA.php");
               }
               else if(isset($_POST['fusectionct'])){
                 include("fourthYearCT.php");
               }
               else if(isset($_POST['fisectiona'])){
                 include("fifthYearSectionA.php");
               }
               else if(isset($_POST['fisectionb'])){
                include("fifthYearSectionB.php");
              }
               else if(isset($_POST['fisectionct'])){
                 include("fifthYearCT.php");
               }

                  
              
                ?>


  <!-- This is update and delete -->
                <?php
                  if(isset($_POST['operations'])){
                    $class=$_POST['class'];
                    $section=$_POST['section'];
                    $major=$_POST['major'];
                    if(!empty($class) && !empty($section) && !empty($major) )
                    {
                ?>

          <form action="" method="post">
  
  
        <table border=1 class="mt-5 p-5 text-center">
          
  <tr class="border border-secondary">
    <th class="border border-secondary p-2" >ID</th>
    <th class="border border-secondary p-2">Class</th>
    <th class="border border-secondary p-2">Section</th>
    <th class="border border-secondary p-2">Subject</th>
    <th class="border border-secondary p-2">Major</th>
    <th class="border border-secondary p-2">Teacher's Name</th>
    <th class="border border-secondary p-2">Department's Name</th>
    <th class="border border-secondary p-2">Day</th>
    <th class="border border-secondary p-2">Time</th>
    <th class="border border-secondary p-2">Operations</th>
  </tr>
 

<?php

$class=$_POST['class'];
$section=$_POST['section'];
$major=$_POST['major'];
$all=mysqli_query($db,"SELECT * FROM alldata WHERE Class='$class' and Section='$section' and Major='$major'");
if($all){
      while($row=mysqli_fetch_assoc($all))
      {
        $id=$row['ID'];
        $CLASS=$row['Class'];
        $SECTION=$row['Section'];
        $SUBJECT=$row['Subject'];
        $MAJOR=$row['Major'];
        $TEACHERNAME=$row['TeacherName'];
        $DEPARTMEMTNAME=$row['DepartmentName'];
        $DAY=$row['Day'];
        $TIME=$row['Time'];
      echo '<tbody>
        <tr class="border border-secondary operationtable">
          <td class="border border-secondary p-2">'.$id.'</td>
          <td class="border border-secondary p-2">'.$CLASS.'</td>
          <td class="border border-secondary p-2">'.$SECTION.'</td>
          <td class="border border-secondary p-2">'.$SUBJECT.'</td>
          <td class="border border-secondary p-2">'.$MAJOR.'</td>
          <td class="border border-secondary p-2">'.$TEACHERNAME.'</td>
          <td class="border border-secondary p-2">'.$DEPARTMEMTNAME.'</td>
          <td class="border border-secondary p-2">'.$DAY.'</td>
          <td class="border border-secondary p-2">'.$TIME.'</td>
          <td class="border border-secondary p-2">
            <button class="btn bg-info-subtle"><a class="link-offset-2 link-underline link-underline-opacity-0 text-body-danger" href="Update.php?updateId='.$id.'"><i class="fa fa-edit edit"></i></a></button>
            <button class="btn bg-info-subtle"><a class="link-offset-2 link-underline link-underline-opacity-0" href="Delete.php?deleteId='.$id.'"><i class="fa fa-trash trash"></i></a></button>
          </td>
        </tr></tbody>';
        
      }
      
      }

}
// Operation error design
else{
   ?>
                   <form action="New.php" method="post">
                   <div class="errorcolor w-25 rounded">
                    <p class="ms-3">Please Choose Class,Section and Major
                    <button type="submit" name="close2" class="btn bg-info-subtle errormeassage"><i class="fa fa-times"></i></button>
                    </p>
                   </div>
                   </form>
                   <?php


}
?>
</table>
  </section>
</form>
<?php
                  } 
                  
                 
?>

      </div>


              
                  
               
                  
      </div>
      
    </div>
  
                
</body>
</html>
