<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
   
        .row{margin-top: 30px;}
        .navcl{background-color: lightblue;}
      .imga{margin-left: 100px;}
      .thisa{margin-right: 50px;}
      .firste{text-decoration: none;
        width: 900px;
        height: 900px;
        margin-top: 100px;
      }
      .uper{margin-top: 100px;}
      .leftside{background-color:skyblue;width: 20%;margin-top: 10px;padding-left: 20px;display: inline;}
      .all{display: flex;width: 100%;height: 100%;}
      
      
  
        </style>
</head>
<body>
  
<div class="toast-container position-static">
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="text-body-secondary">just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      See? Just like this.
    </div>
  </div>

  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="text-body-secondary">2 seconds ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Heads up, toasts will stack automatically
    </div>
  </div>
</div>
<p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  
</p>

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>



<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu">
  <button class="btn btn-primary dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>


    <div><button class="dropdown-item" type="button">Another action</button></div>
    <div><button class="dropdown-item" type="button">Something else here</button></div>
    </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>


<div class="collapse" id="collapseExample">
  <input type="submit" value="OK">
  
    
</div>
<div class="collapse" id="collapseExample">
  <input type="submit" value="OK">
   
</div>

<nav class="navbar navbar-expand-lg  navcl">

<div class="container">
  
  
    <ul class="navbar-nav">
      <li class="nav-item mt-2 pe-4">Home</li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Facluty List
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">FCS</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">FCS</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">FCS</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Department List
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ITSM</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">ENGLISH</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">MYANMAR</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Class List
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">First Year</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Second Year</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Third Year</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Show
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">First Year(Section A)</a></li>
          <li><a class="dropdown-item" href="#">First Year(Section B)</a></li>
          <li><a class="dropdown-item" href="#">First Year(Section C)</a></li>
          <li><hr class="dropdown-divider"></li>

          <li><a class="dropdown-item" href="#">Second Year Semi(Section A)</a></li>
          <li><a class="dropdown-item" href="#">Second Year Semi(Section B)</a></li>
          <li><a class="dropdown-item" href="#">Second Year Jumior(Section A)</a></li>
          <li><a class="dropdown-item" href="#">Second Year Jumior(Section B)</a></li>

          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Third Year(Section A)</a></li>
          <li><a class="dropdown-item" href="#">Third Year(Section B)</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Fourth Year(Section A)</a></li>
          <li><a class="dropdown-item" href="#">Fourth Year(Section B)</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Fifth Year(Section A)</a></li>
          <li><a class="dropdown-item" href="#">Fifth Year(Section B)</a></li>
          <li><hr class="dropdown-divider"></li>

        </ul>
      </li>
      
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>

</nav>

    
<div class="all">
<form action="#" method="post">
    
    <div class="leftside ">
        
<div><h2>This is insert</h2></div>
<div class="nav-item dropdown pt-3">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            First Year
        </a>
        <div class="dropdown-menu">
          <input type="submit" class="dropdown-item" href="#" name="sectiona" value="Section A">
          <input type="submit" class="dropdown-item" href="#" name="sectionb" value="Section B">
        </div>
        
</div>

<div class="nav-item dropdown pt-3">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Second Year
        </a>
        <div class="dropdown-menu">
          <input type="submit" class="dropdown-item" href="#" name="sectiona" value="Section A">
          <input type="submit" class="dropdown-item" href="#" name="sectionb" value="Section B">
        </div>
        
</div>

<div class="nav-item dropdown pt-3">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Third Year
        </a>
        <div class="dropdown-menu">
          <input type="submit" class="dropdown-item" href="#" name="sectiona" value="Section A">
          <input type="submit" class="dropdown-item" href="#" name="sectionb" value="Section B">
        </div>
        
</div>

<div class="nav-item dropdown pt-3">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fourth Year
        </a>
        <div class="dropdown-menu">
          <input type="submit" class="dropdown-item" href="#" name="sectiona" value="Section A">
          <input type="submit" class="dropdown-item" href="#" name="sectionb" value="Section B">
        </div>
        
</div>

<div class="nav-item dropdown pt-3">
        <a class="nav-link dropdown-toggle thisa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fifth Year
        </a>
        <div class="dropdown-menu">
          <input type="submit" class="dropdown-item" href="#" name="sectiona" value="Section A">
          <input type="submit" class="dropdown-item" href="#" name="sectionb" value="Section B">
        </div>

</div>
    </div>

</form>
<div class="rightaction>
<form action="" name="right">
    <table border="1">
        <tr><td>Year</td></tr>
            <tr>
                <td>
                <select name="show">
                <option value="First Year" name="first year">First Year</option>
                </select>
                </td>
            </tr>
</form>
    </div>
</div>
            <?php
            include("databaseConnection.php");
                if(isset($_POST['sectiona'])){
            ?>

            <form action="" method="post">
            
            <div class="container">
            <div class="mt-5"><h2 align="center">This is admin page</h2></div>
                <div class="row">
                    <div class="col">Class</div>
                    <div class="col">
                       <input type="text" value="First Year" name="class">
                    </div>
                </div>
                <div class="row">
                    <div class="col">Section</div>
                    <div class="col">
                        <select name="section" class="form-select" aria-label="Default select example">
                            <option value="Section A">Section A</option>
                            <option value="Section B">Section B</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Teacher name</div>
                    <div class="col">
                        <select name="tname" class="form-select" aria-label="Default select example">
                            <option value="Daw Aye Theint">Daw Aye Theint</option>
                            <option value="Daw Hla Hla Htwe">Daw Hla Hla Htwe</option>
                           
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Department</div>
                    <div class="col">
                        <select name="department" class="form-select" aria-label="Default select example">
                            <option value="ITSM">ITSM</option> 
                            <option value="Software">Software</option>
                            <option value="Hardware">Hardware</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Subject</div>
                    <div class="col">
                        <select name="subject" class="form-select" aria-label="Default select example">
                            <option value="Computer Architecture and Organization">Computer Architecture and Organization</option>
                            <option value="Differential Equation and Numerical Analysis">Differential Equation and Numerical Analysis</option>
                            <option value="Artifical Intelligence + Prolog">Artifical Intelligence + Prolog</option>
                            <option value="Software Analysis and Design">Software Analysis and Design</option>
                            <option value="Database System Structure">Database System Structure</option>
                            <option value="Web Development PHP">Web Development PHP</option>
                            <option value="Finincal Management Accounting">Finincal Management Accounting</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Day</div>
                    <div class="col">
                        <select name="day" class="form-select" aria-label="Default select example">
                            <option value="Monday">Monday</option>
                            <option value="Tueday">Tueday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thurday">Thurday</option>
                            <option value="Friday">Friday</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Time</div>
                    <div class="col">
                        <select name="time" class="form-select" aria-label="Default select example">
                            <option value="9:00-10:00">9:00-10:00</option>
                            <option value="10:00-11:00">10:00-11:00</option>
                            <option value="11:00-12:00">11:00-12:00</option>
                            <option value="1:00-2:00">1:00-2:00</option>
                            <option value="2:00-3:00">2:00-3:00</option>
                            <option value="3:00-4:00">3:00-4:00</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col"><input type="reset" class="btn btn-outline-danger" name="aCancel" value="Cancel"></div>
                    <div class="col"><input type="submit" class="btn btn-outline-success" name="aregister" value="Submit">
                </div>
                </div>
            </div>
            <br></form>
            
            <?php
                }
                ?>
           <?php
        include("databaseConnection.php");
            if(isset($_POST['aregister'])){
                $insertClass=$_POST['class'];
                $insertSection=$_POST['section'];
                $insertTname=$_POST['tname'];
                $insertDepartment=$_POST['department'];
                $insertSubject=$_POST['subject'];
                $insertDay=$_POST['day'];
                $insertTime=$_POST['time'];
                mysqli_query($db,"INSERT INTO admin(class,section,teachername,department,subject,day,time) VALUES('$insertClass',
                                                                                                            '$insertSection',
                                                                                                            '$insertTname',
                                                                                                            '$insertDepartment',
                                                                                                            '$insertSubject',
                                                                                                            '$insertDay',
                                                                                                            '$insertTime')");

                $result=mysqli_query($db,"SELECT * FROM admin WHERE class='$insertClass' AND 
                section='$insertSection' AND 
                teachername='$insertTname' AND
                department='$insertDepartment' AND
                subject='$insertSubject' AND
                day='$insertDay' AND
                time='$insertTime'");
                if($row=mysqli_fetch_assoc($result))
                {
                    $ID=$row['id'];
                    $class=$row['class'];
                    $section=$row['section'];
                    $tname=$row['teachername'];
                    $department=$row['department'];
                    $subject=$row['subject'];
                    $day=$row['day'];
                    $time=$row['time'];
                    
                    echo "<div class=container>
                            <div class=row>
                                <div class=col>ID</div>
                                <div class=col>Class</div>
                                <div class=col>Section</div>
                                <div class=col>Teacher's Name</div>
                                <div class=col>Department</div>
                                <div class=col>Subject</div>
                                <div class=col>Day</div>
                                <div class=col>Time</div>
                                <div class=col>Change</div>
                                <div class=col></div>
                            </div>

                            <div class=row>
                                <div class=col>$ID</div>
                                <div class=col>$class</div>
                                <div class=col>$section</div>
                                <div class=col>$tname</div>
                                <div class=col>$department</div>
                                <div class=col>$subject</div>
                                <div class=col>$day</div>
                                <div class=col>$time</div>
                                <div class=col><button id='.$ID.'>Update></button><button id='.$ID.'>Delete></button></div>
                                <div class=col>This is successful</div>
                            </div>
                            
                            
                           
                        </div>";
                    
                    
                }

            }
        
            ?>


            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
            <?php
            ini_set('date.timezone','Asia/Yangon');
             $t=date("g:i");
             $tt=(int) $t;
             echo $t."<br>";
             echo date("l")."<br>";
             echo $tt."<br>";
              if($tt<10 && $tt>9)
              {
                echo "yes";
              }
              else
              {
                echo "NO";
              }
            ?>


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
                    echo "error";
                   }
                   else{

                   $exist=mysqli_query($db,"SELECT * FROM admin WHERE Name='$name' AND Email='$email' AND Password='$password' AND ConfirmPassword='$confirm'");
                   if(mysqli_num_rows($exist)>0){
                      echo "This user is already exist";
                   }
                  
                          
                       else{
      
                          if($password==$confirm){
                             
                              $query=("INSERT INTO admin (Name,Email,Password,ConfirmPassword) VALUES('$name','$email','$password','$confirm')");
                                   $result=mysqli_query($db,$query);
                                   if($result){
                                    echo "ok";
                                   }
                                   else{
                                      echo "insert is fail";
                                   }
                                   
                               }
                               else{
                                   echo "password is not same";
                               }    
                              
                         
                       }
                       
                       }    }  
                      
          ?>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-js" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2H8v-1h4a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM3.186 15.29a1.2 1.2 0 0 1-.111-.449h.765a.58.58 0 0 0 .255.384q.105.073.249.114.143.041.319.041.246 0 .413-.07a.56.56 0 0 0 .255-.193.5.5 0 0 0 .085-.29.39.39 0 0 0-.153-.326q-.151-.12-.462-.193l-.619-.143a1.7 1.7 0 0 1-.539-.214 1 1 0 0 1-.351-.367 1.1 1.1 0 0 1-.123-.524q0-.366.19-.639.19-.272.528-.422.336-.15.776-.149.457 0 .78.152.324.153.5.41.18.255.2.566h-.75a.56.56 0 0 0-.12-.258.6.6 0 0 0-.247-.181.9.9 0 0 0-.369-.068q-.325 0-.513.152a.47.47 0 0 0-.184.384q0 .18.143.3a1 1 0 0 0 .405.175l.62.143q.327.075.566.211.24.136.375.358t.135.56q0 .37-.188.656a1.2 1.2 0 0 1-.539.439q-.351.158-.858.158-.381 0-.665-.09a1.4 1.4 0 0 1-.478-.252 1.1 1.1 0 0 1-.29-.375m-3.104-.033A1.3 1.3 0 0 1 0 14.791h.765a.6.6 0 0 0 .073.27.5.5 0 0 0 .454.246q.285 0 .422-.164.138-.165.138-.466v-2.745h.79v2.725q0 .66-.357 1.005-.354.345-.984.345a1.6 1.6 0 0 1-.569-.094 1.15 1.15 0 0 1-.407-.266 1.1 1.1 0 0 1-.243-.39"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg>
<i class="bi bi-filetype-js"></i>
<i class="bi bi-caret-right-fill"></i>
<?php
echo strtolower(date("l"));
?>
</body>
</html>