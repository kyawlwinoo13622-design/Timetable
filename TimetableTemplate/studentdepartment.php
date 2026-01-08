<?php
   session_start();
   $nn=$_SESSION['name'];
   $ee=$_SESSION['email'];
   $pp=$_SESSION['password'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   
    <style type="text/css">
      .viewmorebutton:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton{background-color:  #c5a3ff;border: none;border-radius: 20px;}

      .viewmorebutton1:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton1{background-color:  #fff5ba;border: none;border-radius: 20px;}

      .viewmorebutton2:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton2{background-color:  #d4f0f0;border: none;border-radius: 20px;}

      .viewmorebutton3:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton3{background-color:  #cce2cb;border: none;border-radius: 20px;}

      .viewmorebutton4:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton4{background-color:  #ffc5bf;border: none;border-radius: 20px;}

      .viewmorebutton5:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton5{background-color:  #8aab93;border: none;border-radius: 20px;}

      .viewmorebutton6:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton6{background-color:  #fec868;border: none;border-radius: 20px;}

      .viewmorebutton7:hover{text-decoration: underline;color: white;border: 1px solid black;}
      .viewmorebutton7{background-color:  #ccc976;border: none;border-radius: 20px;}
        /* Search box */
        .searchicon{position: absolute;right: 220px;top: 27px;}
      /* Nav department */
      .spane:hover{color: brown;box-shadow: 1px 1px 5px black;border-radius: 10%;}
      .abc{background-color: aqua;}
      nav{height: 80px;}
        #sc{overflow-y: scroll;max-height: 80%;}
      .studenta{border: none;}
      .fclearborder{border :none;}
      .back{background-color: #00c3ff;border-radius: 10px;}
      .subtle{background-color: #20c997;}
      .tableprofile{border: 6px dotted black;}
      label{padding: 20px;}
      .fcs{background-color: #c5a3ff;}
      .itsm{background-color: #fff5ba;}
      .fcst{background-color: #d4f0f0;}
      .foc{background-color: #cce2cb;}
      .md{background-color: #ffc5bf;}
      .ed{background-color: #8aab93;}
      .pd{background-color: #fec868;}
      .ad{background-color: #ccc976;}
      .itsm{background-color: #fff5ba;border: none;border-radius: 10px;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-info bg-info ">
  <div class="container">
    
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="#">
    
   <a href="StudentSite.php"> <img src="ucsp.jpg" alt="UCSP" width="60px" height="60px" class="rounded-circle mb-1"></a>
    <div class="badge text-bg-info text-wrap fs-5" style="width: 15rem;"><p class="lh-sm">Timetable of Computer University Pyay</p></div>
    
</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
        <li class="nav-item">
          <a class="nav-link spane" aria-current="page" href="DepartmentSite.php">Department List</a>
        </li>
        <li class="nav-item ms-3 me-2">
          <a class="nav-link spane" href="homepage.php">Logout</a>
        </li>
        
        
      </ul>
      
      
    

       
      <div class="dropdown">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
             include("databaseConnection.php");
            // session_start();
            //     $nn=$_SESSION['name'];
            //     $ee=$_SESSION['email'];
            //     $pp=$_SESSION['password'];
                $img="select img from login where Name='$nn' and Email='$ee' and Password ='$pp'";
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

<!-- Change Name -->
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



















        <!-- This is columm 3 -->
<div class="container-fluid">
<div class="row">
      <div class="col-2">

        <div class="container"id="sc">
          <form action="#fa" method="post">
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
            <input type="submit" name="fsectionb" value="Section B(CS)" class="studenta btn btn-info-subtle"></div>
          </div>
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fsectionc" value="CT " class="studenta btn btn-info-subtle"></div>
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
          <div class="row">
            <div class="col ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>  
            <input type="submit" name="fusectionb" value="Section B(CS)" class="studenta btn btn-info-subtle"></div>
          </div>
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











<!-- This is columm 9 -->

<div class="col-10">
                   <div class="row mt-3 p-5">        
                    
                   <div class="col subtle rounded-5 ms-5 p-4 fcs">
                                <form method="post" action="#faculty">
                                <h6>FCS</h6>
                                <p class="p-2">Faculty Of Computer Science</p>
                                <p class="text-end">Dr.Aye Pa Pa Mya</p>

                                <input type="submit" name="fcs" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton ">
                                </form>
                            </div>

                            <div class="col rounded-5 ms-5 p-4 itsm">
                                <form method="post" action="#itsm">
                                <h6>ITSM</h6>
                                <p class="p-2">Application Department</p>
                                <p class="text-end">Daw Nay Tha Zin Htun</p>

                                <input type="submit" name="itsm" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton1">
                                </form>
                            </div>

                            <div class="col rounded-5 ms-5 p-4 fcst">
                                <form method="post" action="#fcst">
                                <h6>FCST</h6>
                                <p class="p-2">Faculty Of Computer Systems And Technologies</p>
                                <p class="text-end">Dr.Aye Pa Pa Mya</p>

                                <input type="submit" name="fcst" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton2">
                                </form>
                            </div>
                            <div class="col  rounded-5 ms-5 p-4 foc">
                                <form method="post" action="#foc">
                                <h6>FOC</h6>
                                <p class="p-2">Faculty Of Computing</p>
                                <p class="text-end">Dr.Aye Pa Pa Mya</p>

                                <input type="submit" name="foc" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton3">
                                </form>
                            </div>

                   </div>

                   <div class="row  p-4">        
                    
                    <div class="col  rounded-5 ms-5 p-4 md">
                                 <form method="post" action="#m">
                                 <h6>Myanmar</h6>
                                 <p class="p-2">Myanmar Department</p>
                                 <p class="text-end">Dr.Aye Pa Pa Mya</p>
 
                                 <input type="submit" name="m" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton4">
                                 </form>
                             </div>
 
                             <div class="col  rounded-5 ms-5 p-4 ed">
                                 <form method="post" action="#e">
                                 <h6>English</h6>
                                 <p class="p-2">English Department</p>
                                 <p class="text-end">Daw Swe Swe Myint</p>
 
                                 <input type="submit" name="e" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton5">
                                 </form>
                             </div>
 
                             <div class="col  rounded-5 ms-5 p-4 pd">
                                 <form method="post" action="#p">
                                 <h6>Physics</h6>
                                 <p class="p-2">Physics Department</p>
                                 <p class="text-end">Dr.Mon Mon Aung</p>
 
                                 <input type="submit" name="p" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton6">
                                 </form>
                             </div>

                             <div class="col  rounded-5 ms-5 p-4 ad">
                                 <form method="post" action="#is">
                                 <h6>IS</h6>
                                 <p class="p-2">Faculty Of Information Science</p>
                                 <p class="text-end">Daw Nwe Ni Win</p>
 
                                 <input type="submit" name="is" value="View More" class="d-grid gap-2 col-6 mx-auto viewmorebutton7">
                                 </form>
                             </div>
                   </div>
 
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
                else if(isset($_POST['tsectionc'])){
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
                else if(isset($_POST['fisectionct'])){
                  include("fifthYearCT.php");
                }
 
?>
                   
                
                      
        <?php
         include("databaseConnection.php");
         if(isset($_POST['fcs']))
                    {   
                            $dd="Faculty Of Computer Science";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="faculty"><h4>Faculty Of Computer Science </h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="btn bg-primary w-25">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 
                        
                        
                          // ITSM


                         



                        
         include("databaseConnection.php");
         if(isset($_POST['itsm']))
                    {   
                            $dd="Application Department";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="itsm"><h4>Application Department</h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="w-25 btn bg-warning-subtle">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 

                        // FCST

                        include("databaseConnection.php");
                        if(isset($_POST['fcst']))
                                   {   
                                           $dd="Faculty Of Computer System And Technologies";
                                           $koko="select name from teacher where department='$dd'";
                                           $baby=mysqli_query($db,$koko);
                                           ?>
                                           <div class="text-center mt-5" id="fcst"><h4>Faculty Of Computer Systems and Technologies</h4>
                                           <?php
                                           while($row=mysqli_fetch_assoc($baby)){
               
                       ?>
               
                       <form action="#table" method="post">
                       <div>
                          <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="w-25 btn bg-primary-subtle">
                       
                       </div>
                   </form>
                                           
                          <?php
                                           }
                                           ?>
                                           </div>
                                           <?php
                                       }


                                      //  FOC


         include("databaseConnection.php");
         if(isset($_POST['foc']))
                    {   
                            $dd="Faculty Of Computing";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="foc"><h4>Faculty Of Computing</h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="btn bg-success-subtle w-25">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 

                        // Myanmar

                        include("databaseConnection.php");
         if(isset($_POST['m']))
                    {   
                            $dd="Myanmar Department";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="m"><h4>Myanmar Department</h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="btn bg-danger-subtle w-25">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 



                        // English

                        include("databaseConnection.php");
         if(isset($_POST['e']))
                    {   
                            $dd="English Department";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="e"><h4>English Department</h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="btn bg-success-subtle w-25">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 


                        // Physics

                        include("databaseConnection.php");
         if(isset($_POST['p']))
                    {   
                            $dd="Physics Department";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="p"><h4>Physics Department</h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="btn bg-primary w-25">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 


                        // IS


                        include("databaseConnection.php");
         if(isset($_POST['is']))
                    {   
                            $dd="Faculty Of Information Science";
                            $koko="select name from teacher where department='$dd'";
                            $baby=mysqli_query($db,$koko);
                            ?>
                            <div class="text-center mt-5" id="is"><h4>Faculty Of Information Science</h4>
                            <?php
                            while($row=mysqli_fetch_assoc($baby)){

        ?>

        <form action="#table" method="post">
        <div>
           <input type="submit" name="teachername" value="<?php echo $row['name']?>" class="btn bg-primary w-25">
        
        </div>
    </form>
                            
           <?php
                            }
                            ?>
                            </div>
                            <?php
                        } 


            
           ?>
           
      
        
       

            </div>
</div>
</div>
</body>
</html>