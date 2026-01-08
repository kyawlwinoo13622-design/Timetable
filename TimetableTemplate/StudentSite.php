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
    <style>
        /* Department design */
        .stro{color: black;}
        .spane:hover{color: brown;box-shadow: 1px 1px 5px black;border-radius: 10%;}
        .home{font-size: 20px;color: white;margin-top: 10px;}
        .fclearborder{border: none;}
        .abc{background-color: aqua;}
        label{padding: 20px;}
       .tableprofile{border: 6px dotted black;}
       nav{height: 80px;}
       .firstslide{background-color: #728c69;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .firstslidea{background-color: #b2d3c2;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .firstslide1{background-color: #eabec3;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .firstslide1a{background-color: #f5dde0;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .firstslide2{background-color: #e2c8c7;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .firstslide2a{background-color: #e7dfdd;border-radius: 20px;box-shadow: 2px 2px 5px black;}

       .secondslide{background-color: #af8287;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .secondslidea{background-color: #c3a1a5;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .secondslide1{background-color: #8aa2a9;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .secondslide1a{background-color: #b7cece;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .secondslide2{background-color: #e2c8c7;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .secondslide2a{background-color: #e7dfdd;border-radius: 20px;box-shadow: 2px 2px 5px black;}

       .thirdslide{background-color: #b9d160;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .thirdslidea{background-color: #dce8af;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .thirdslide1{background-color: #ffb4a2;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .thirdslide1a{background-color: #ffcdb2;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .thirdslide2{background-color: #8aa2a9;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .thirdslide2a{background-color: #b7cece;border-radius: 20px;box-shadow: 2px 2px 5px black;}


       .fourthslide{background-color: #9ba091;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fourthslidea{background-color: #cdcfc8;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fourthslide1{background-color: #b5838d;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fourthslide1a{background-color: #e5989b;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fourthslide2{background-color: #e2c8c7;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fourthslide2a{background-color: #e7dfdd;border-radius: 20px;box-shadow: 2px 2px 5px black;}


       .fifthslide{background-color: #b67b83;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fifthslidea{background-color: #dabdc1;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fifthslide1{background-color: #95d979;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fifthslide1a{background-color: #add979;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fifthslide2{background-color: #8aa2a9;;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       .fifthslide2a{background-color: #b7cece;border-radius: 20px;box-shadow: 2px 2px 5px black;}
       /* .firstslide{background-color: aqua;}
       .firstslidea{background-color: blue;}
       .firstslide{background-color: aqua;}
       .firstslidea{background-color: blue;}
       .firstslide{background-color: aqua;}
       .firstslidea{background-color: blue;}  */
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-md bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">
   <a href="homepage.php"> <img src="ucsp.jpg" alt="UCSP" width="60px" height="60px" class="rounded-circle mb-1" title="ucsp"></a>
        <div class="badge text-bg-info text-wrap fs-5" style="width: 15rem;">
                <p class="lh-sm">Timetable of Computer University Pyay</p>
        </div>

    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-3 ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link stro spane" aria-current="page" href="studentdepartment.php">Department List</a>
        </li>
        <li class="nav-item ms-5">
          <a class="nav-link stro spane" href="homepage.php">Logout</a>
        </li>
        
        
      </ul>
      <form class="d-flex mb-2 mb-lg-0" role="search" method="post" action="#">
        <input class="form-control me-2" type="text" placeholder="Search with year and section" aria-label="Search" name="search">
        <button class="btn bg-info fclearborder" type="submit" name="search1"><i class="fa fa-search"></i></button>
      </form>
      
    

       

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
       <td> <input type="text" name="oldname" class="form-control"></td></tr>
        <tr><td><label> Name</label></td>
        <td><input type="text" name="newname" class="form-control"></td></tr>
        <tr>
      <td> <label> Confirm Name</label></td>
       <td> <input type="text" name="conname" class="form-control"></td></tr>
       <tr>
        <td><label><input type="submit" name="submit" value="Change" class="btn btn-outline-success"></label></td></tr>
        </table>
     </form>
  </div>
</div>

<!-- Change Password -->
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
       <td> <input type="password" name="oldpass" class="form-control"></td></tr>
       <tr>
      <td> <label> Password</label></td>
       <td> <input type="password" name="newpass" class="form-control"></td></tr>
        <tr>
       <td><label> Password</label></td>
       <td> <input type="password" name="conpass" class="form-control"></td></tr>
       <tr><td>
        <label><input type="submit" name="submit" value="Change" class="btn btn-outline-success"></label></td></tr>
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
      <td><input type="text" name="name" class="form-control"></td>
    </tr>
    <tr>
      <td> <label>password</label> </td>
      <td><input type="password" name="password" class="form-control"></td>
    </tr>
    <tr>
   <td><label> Photo</label></td>
   <td><input type="file" name="uploadfile" id="file"></td>
    </tr>
   <tr>
   <td><label> <input type="submit" name="upload" value="Change" class="btn btn-outline-success"></label></td>
    </tr>
        </table>
    <?php
        include("databaseConnection.php");
        
        if(isset($_POST['upload']))
         {
           
            $name=$_POST['name'];
            $pass=$_POST['password'];
        //    session_start();
        //          $nn=$_SESSION['name'];
        //         $pp=$_SESSION['password'];
            $filename=$_FILES["uploadfile"]["name"];
            $tempname=$_FILES["uploadfile"]["tmp_name"];
            $folder="./photo/".$filename;
         $sql="update login set img='$filename' where Name='$nn' and Password='$pp'";
           mysqli_query($db,$sql);
            if(move_uploaded_file($tempname,$folder)){
               
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



    

<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <!-- first slide -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="white.avif" class="d-block w-100 h-50" alt="...">
      <div class="container">
      <div class="row carousel-caption mt-0 mb-5">

        <div class="col border firstslide p-3 w-25  ms-3">
            <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fsectiona" value="First Year Section-A" class="fclearborder firstslidea"></div>
                </div>
                <div class="row">
                    <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                    <?php
                    $C="First Year";
                    $SS="Section A";
                    $M="CST";
                    
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $a=date("l");
                    $D=strtolower($a);
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Day='$D' and Time='$T'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
        <div class="col border  firstslide1 p-3 w-25 ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fsectionb" value="First Year Section-B" class="fclearborder firstslide1a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="First Year";
                    $SS="Section B";
                    $M="CST";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T'  and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <div class="col border firstslide2 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fsectionc" value="First Year Section-C" class="fclearborder firstslide2a "></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="First Year";
                    $SS="Section C";
                    $M="CST";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

      </div>
      </div>
    </div>

<!-- Second slide -->
    <div class="carousel-item bg-info" data-bs-interval="2000">
    <img src="white.avif" class="d-block w-100 h-50" alt="...">
      <div class="container">
      <div class="row carousel-caption mt-0 mb-5">

        <div class="col border secondslide p-3 w-25 ">
            <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="ssectiona" value="Second Year Section-A(Junior)" class="fclearborder secondslidea"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Second Year";
                    $SS="Section A";
                    $M="CST";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
        <div class="col border secondslide1 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="ssectionb" value="Second Year Section-B(Junior)" class="fclearborder secondslide1a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Second Year";
                    $SS="Section B";
                    $M="CST";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <div class="col border secondslide2 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="ssectionc" value="Second Year Section-C(Junior)" class="fclearborder secondslide2a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Second Year";
                    $SS="Section C";
                    $M="CST";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

      </div>
      </div>
      </div>

  <!-- Third slide -->
      <div class="carousel-item bg-info" data-bs-interval="2000">
    <img src="white.avif" class="d-block w-100 h-50" alt="...">
      <div class="container">
      <div class="row carousel-caption mt-0 mb-5">

        <div class="col border thirdslide p-3 w-25  ms-3">
            <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="ssectiond" value="Second Year Section-A(Senior)" class="fclearborder thirdslidea"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Second Year";
                    $SS="Section A";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
        <div class="col border thirdslide1 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="ssectione" value="Second Year Section-B(Senior)" class="fclearborder thirdslide1a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Second Year";
                    $SS="Section B";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <div class="col border thirdslide2 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="ssectionct" value="Second Year CT" class="fclearborder thirdslide2a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Second Year";
                    $SS="Section B";
                    $M="CT";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

      </div>
      </div>
      </div>


    <!-- Fourth slide -->
      <div class="carousel-item bg-info" data-bs-interval="2000">
    <img src="white.avif" class="d-block w-100 h-50" alt="...">
      <div class="container">
      <div class="row carousel-caption mt-0 mb-5">

        <div class="col border fourthslide p-3 w-25  ms-3">
            <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="tsectiona" value="Third Year Section-A" class="fclearborder fourthslidea"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Third Year";
                    $SS="Section A";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
        <div class="col border fourthslide1 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="tsectionb" value="Third Year Section-B" class="fclearborder fourthslide1a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Third Year";
                    $SS="Section B";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <div class="col border fourthslide2 p-3 w-25  ms-3 ">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="tsectionct" value="Third Year CT" class="fclearborder fourthslide2a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Third Year";
                    $SS="Section B";
                    $M="CT";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

      </div>
      </div>
      </div>
  
  <!-- Fifth slide -->
    <div class="carousel-item">
    <img src="white.avif" class="d-block w-100 h-50" alt="...">
      <div class="container">
      <div class="row carousel-caption mt-0 mb-5">

        <div class="col border fifthslide p-3 w-25 ">
            <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fusectiona" value="Fourth Year Section-A" class="fclearborder fifthslidea"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Fourth Year";
                    $SS="Section A";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
        <div class="col border fifthslide1 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fusectionct" value="Fourth Year CT" class="fclearborder fifthslide1a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Fourth Year";
                    $SS="Section B";
                    $M="CT";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <div class="col border fifthslide2 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fisectiona" value="Fifth Year Section-A" class="fclearborder fifthslide2a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Fifth Year";
                    $SS="Section A";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;

                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

      </div>
      </div>
      </div>

      <!-- Six slide -->
      <div class="carousel-item">
    <img src="white.avif" class="d-block w-100 h-50" alt="...">
      <div class="container">
      <div class="row carousel-caption mt-0 mb-5">

        <div class="col border fifthslide p-3 w-25 ">
            <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fisectionb" value="Fifth Year Section-B" class="fclearborder fifthslidea"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Fifth Year";
                    $SS="Section B";
                    $M="CS";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
        <div class="col border fifthslide1 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="fisectionct" value="Fifth Year CT" class="fclearborder fifthslide1a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                <?php
                    $C="Fifth Year";
                    $SS="Section B";
                    $M="CT";
                    ini_set('date.timezone','Asia/Yangon');
                    $t=date("g:i");
                    $tt=(int) $t;
                    $T="9:00_10:00";
                    $D=strtolower(date("l"));
                    if($tt>=9 && $tt<=10)
                    {$T="9:00_10:00";}
                    if($tt>=10 && $tt<=11)
                    {$T="10:00_11:00";}
                    if($tt>=11 && $tt<=12)
                    {$T="11:00_12:00";}
                    if($tt>=1 && $tt<=2)
                    {$T="1:00_2:00";}
                    if($tt>=2 && $tt<=3)
                    {$T="2:00_3:00";}
                    if($tt>=3 && $tt<=4)
                    {$T="3:00_4:00";}
                        include("databaseConnection.php");
                        $one=mysqli_query($db,"select * from alldata where Class='$C' and Section='$SS' and Major='$M' and Time='$T' and Day='$D'");
                        if($one){
                            if($row=mysqli_fetch_assoc($one)){

                    ?>
                    <div class="col"><?php echo $row['Subject']?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>

        <!-- <div class="col border fifthslide2 p-3 w-25  ms-3">
        <form action="#" method="post">
            <div class="container">
                <div class="row">
                    <div class="col"><input type="submit" name="firstyear" value="Fifth Year Section-A" class="fclearborder fifthslide2a"></div>
                </div>
                <div class="row">
                <div class="col "><i class="fa fa-home home"></i></div>
                </div>
                <div class="row">
                    <div class="col"><hr></div>
                </div>
                <div class="row">
               
                    // $C="Fifth Year";
                    // $SS="Section A";
                    // $M="CS";
                    // ini_set('date.timezone','Asia/Yangon');
                    // $t=date("g:i");
                    // $tt=(int) $t;

                    // $T="9:00_10:00";
                    // $D=strtolower(date("l"));
                    // if($tt>=9 && $tt<=10)
                    // {$T="9:00_10:00";}
                    // if($tt>=10 && $tt<=11)
                    // {$T="10:00_11:00";}
                    // if($tt>=11 && $tt<=12)
                    // {$T="11:00_12:00";}
                    // if($tt>=1 && $tt<=2)
                    // {$T="1:00_2:00";}
                    // if($tt>=2 && $tt<=3)
                    // {$T="2:00_3:00";}
                    // if($tt>=3 && $tt<=4)
                    // {$T="3:00_4:00";} -->
                   

                
                    <!-- <div class="col"></div> -->
                    
                 
                    
                    
                <!-- </div>
            </div>
            </form>
        </div>  -->

      </div>
      </div>
      </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

                    <!-- Search box -->

    <?php
       
        if(isset($_POST['search1'])){
            $search=$_POST['search'];
            $search1=strtolower($search);
            $year=trim($search1);
           
            $first="firstyearsectiona";
            $first10="firstyear sectiona";
            $first11="first year section a";


            $first1="firstyearsectionb";
            $first110="firstyear sectionb";
            $first111="first year section b";


            $first2="firstyearsectionc";
            $first20="firstyear sectionc";
            $first22="first year section c";

            $second="secondyearsectionajunior";
            $second10="secondyear sectionajunior";
            $second11="second year section a junior";


            $second1="secondyearsectionbjunior";
            $second110="secondyear sectionbjunior";
            $second111="second year section b junior";


            $second2="secondyearsectioncjunior";
            $second20="secondyear sectioncjunior";
            $second22="second year section c junior";

            $second3="secondyearsectionasenior";
            $second30="secondyear sectionasenior";
            $second33="second year section a senior";

            $second4="secondyearsectionbsenior";
            $second40="secondyear sectionbsenior";
            $second44="second year section b senior";

            $second5="secondyearsectioncsenior";
            $second50="secondyear sectioncsenior";
            $second55="second year section c senior";

            $second6="secondyearct";
            $second60="secondyear ct";
            $second66="second year ct";
            
            $third="thirdyearsectiona";
            $third10="thirdyear sectiona";
            $third11="third year section a";

            $third1="thirdyearsectionb";
            $third110="thirdyear sectionb";
            $third111="third year section b";

            $third2="thirdyearct";
            $third20="thirdyear ct";
            $third22="third year ct";

            $fourth="fourthyearsectiona";
            $fourth10="fourthyear sectiona";
            $fourth11="fourth year section a";

            $fourth1="fourthyearct";
            $fourth110="fourthyear ct";
            $fourth111="fourth year ct";

            $fifth="fifthyearsectiona";
            $fifth10="fifthyear sectiona";
            $fifth11="fifth year section a";


            $f="fifthyearsectionb";
            $f10="fifthyear sectionb";
            $f11="fifth year section b";



            $fifth1="fifthyearct";
            $fifth110="fifthyear ct";
            $fifth111="fifth year ct";

            if($year==$first || $year==$first10 || $year==$first11){
                include("firstyearsectiona.php");
            }
            else if($year==$first1 || $year==$first110 || $year==$first111){
                include("firstYearSectionB.php");
            }
            else if($year==$first2 || $year==$first20 || $year==$first22){
                include("firstYearSectionC.php");
            }
            else if($year==$second || $year==$second10 || $year==$second11){
                include("secondYearAJunior.php");
            }
            else if($year==$second1 || $year==$second110 || $year==$second111){
                include("secondYearBJunior.php");
            }
            else if($year==$second2  || $year==$second20 || $year==$second22){
                include("secondYearCJunior.php");
            }
            else if($year==$second3 || $year==$second30 || $year==$second33){
                include("secondYearASenior.php");
            }
            else if($year==$second4 || $year==$second40 || $year==$second44){
                include("secondYearBSenior.php");
            }
            else if($year==$second5 || $year==$second50 || $year==$second55){
                include("secondYearCSenior.php");
            }
            else if($year==$second6 || $year==$second60 || $year==$second66){
                include("secondYearCT.php");
            }
            else if($year==$third || $year==$third10 || $year==$third11){
                include("thirdYearSectionA.php");
            }
            else if($year==$third1 || $year==$third110 || $year==$third111){
                include("thirdYearSectionB.php");
            }
            else if($year==$third2 || $year==$third20 || $year==$third22){
                include("thirdYearCT.php");
            }
            else if($year==$fourth || $year==$fourth10 || $year==$fourth11){
                include("fourthYearSectionA.php");
            }
            else if($year==$fourth1 || $year==$fourth110 || $year==$fourth111){
                include("fourthYearCT.php");
            }
            else if($year==$fifth || $year==$fifth10 || $year==$fifth11){
                include("fifthYearSectionA.php");
            }
            else if($year==$f || $year==$f10 || $year==$f11){
                include("fifthYearSectionB.php");
            }
            else if($year==$fifth1 || $year==$fifth110 || $year==$fifth111){
                include("fifthYearCT.php");
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
    

</body>
</html>