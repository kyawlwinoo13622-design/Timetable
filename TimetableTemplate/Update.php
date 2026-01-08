<?php

                  include("databaseConnection.php");
                 
                  $id=$_GET['updateId'];
                  $sql="SELECT * FROM alldata WHERE ID=$id";
                  $result=mysqli_query($db,$sql);

                    $row=mysqli_fetch_assoc($result);
                          $ID=$row['ID'];
                          $class=$row['Class'];
                          $section=$row['Section'];
                          $subject=$row['Subject'];
                          $major=$row['Major'];
                          $teacher=$row['TeacherName'];
                          $department=$row['DepartmentName'];
                          $day=$row['Day'];
                          $time=$row['Time'];
                  
                  

                    if(isset($_POST['update']))
                    {
                     
                      $Uclass=$_POST['class'];
                      $Usection=$_POST['section'];
                      $Usubject=$_POST['subject'];
                      $Umajor=$_POST['major'];
                      $Uteacher=$_POST['teacher'];
                      $Udepartment=$_POST['department'];
                      $Uday=$_POST['day'];
                      $Utime=$_POST['time'];
                      if(empty($Uclass) || empty($Usection) ||empty($Usubject) ||empty($Umajor) ||empty($Uteacher) ||empty($Udepartment) ||empty($Uday) ||empty($Utime) ){
                        $errorMessage="update is fail :Please Try Again";
                        echo  $errorMessage;
                       
                      }
                      else{
                     $q="UPDATE alldata SET ID='$id', Class='$Uclass', Section='$Usection', Subject='$Usubject', Major='$Umajor',
                      TeacherName='$Uteacher', DepartmentName='$Udepartment', Day='$Uday', Time='$Utime'  WHERE ID='$id'";
                      $query=mysqli_query($db,$q);
                    if($query)
                    {
                        header('location:New.php');
                    }
                    else{
                    header('location:Update.php');
                    }
                  }
                }
                
              
                  
                      ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
      .stro{color: black;}
      .spane:hover{color: brown;box-shadow: 1px 1px 5px black;border-radius: 10%;}
      nav{height: 80px;}
        .tableupdate{width: 300px;}
        table{border: 2px solid black;box-shadow: 2px 2px 5px black;margin-top: 15px;}
       .secc{background-color: #00c3ff;border-radius: 50px;}
       .up{margin-left: 270px;}
       .hov:hover{box-shadow: 2px 2px 3px black;}
    </style>
</head>

<body class="bg-info-subtle">
                  
<nav class="navbar navbar-expand-sm navbar-info bg-info ">
  <div class="container">
    
    
    <a class="navbar-brand" href="#">
    
    <a href="New.php"><img src="ucsp.jpg" alt="UCSP" width="60px" height="60px" class="rounded-circle mb-1"></a>
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
          <a class="nav-link stro spane" href="homepage.php">Logout</a>
        </li>
      </ul>
      
    </div> 
  </div>
  
  
</nav>



                  <table align="center" width="500px" cellspacing="20px" cellpadding="10px">
                  <tr><td colspan="2"><h4 class="text-center text-info mt-3 ">You can update now</h4></td></tr>
                  <form action="" class="mt-5 ms-5" method="post">
                    <tr>

                    </tr>
                    <tr class="pt-5" >
                      <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
                    </tr>
                    <tr class="pt-5">
                      <td>Class</td>
                      <td><input type="text" name="class" id="" class="form-control secc" value="<?php echo $class;?>"></td>
                    </tr>
                    <tr class="pt-5">
                      <td>Section</td>
                      <td><input type="text" name="section" id="" class="form-control secc" value="<?php echo $section;?>"></td>
                    </tr>
                    
                    <tr>
                      <td>Subject</td>
                      <td><input type="text" name="subject" id="" class="form-control secc" value="<?php echo $subject;?>"></td>
                    </tr>
                    <tr>
                      <td>Major</td>
                      <td><input type="text" name="major" id="" class="form-control secc" value="<?php echo $major;?>"></td>
                    </tr>
                    <tr>
                      <td>Teacher</td>
                      <td><input type="text" name="teacher" id="" class="form-control secc" value="<?php echo $teacher;?>"></td>
                    </tr>
                    <tr>
                      <td>Department</td>
                      <td><input type="text" name="department" id="" class="form-control secc" value="<?php echo $department;?>"></td>
                    </tr>
                    
                    <tr>
                      <td>Day</td>
                      <td><input type="text" class="form-control secc" value="<?php echo $day;?>" name="day"></td>
                    </tr>
                    <tr>
                      <td>Time</td>
                      <td><input type="text" class="form-control secc" value="<?php echo $time;?>" name="time"></td>
                    </tr>
                    <tr>
                    <td><input type="reset" name="cancel" value="Cancel" class="updatebutton secc hov"></td>
                      <td><input type="submit" name="update" value="Update" class="updatebutton secc up hov"></td>
                    </tr>
                  
                </form>
                  </table>

                      
</body>
</html>