

                


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.min.js"></script>
    <style>
       
        
    </style>
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    <div class="container">
        <div class="mt-5"><h2 align="center">Registration Form</h2></div>
        <div class="row">
            <div class="col">Name</div>
            <div class="col"><input type="text" name="u1" class="form-control border-success" required></div>
        </div>
        <div class="row">
            <div class="col">Email</div>
            <div class="col"><input type="email" name="uEmail" class="form-control border-success" required></div>
        </div>
        <div class="row">
            <div class="col">Password</div>
            <div class="col"><input type="password" name="uPassword" class="form-control border-success" required></div>
        </div>
        <div class="row">
            <div class="col">Confirm Password</div>
            <div class="col"><input type="password" name="uConfirm" class="form-control border-success" required>
        
            <div id="incorrect"></div>
        </div>
            <div id="validationServer03Feedback" class="invalid-feedback"></div>

        </div>
        <div class="row">
            <div class="col"><input type="reset" class="btn btn-outline-danger" name="uCancel" value="Cancel"></div>
            <div class="col"><input type="submit" class="btn btn-outline-success" name="uregister" value="Submit">
        </div>
        </div>
    </div>
    </form>

    <?php
        include("databaseConnection.php");
        
         if(isset($_POST['uregister']))

         {

             $name=$_POST['u1'];
             $email=$_POST['uEmail'];
             $password=$_POST['uPassword'];
             $confirm=$_POST['uConfirm'];

             $exist=mysqli_query($db,"SELECT * FROM register WHERE Name='$name' AND Email='$email' AND Password='$password' AND ConfirmPassword='$confirm'");
             if(mysqli_num_rows($exist)>0){
                echo "user already exist go login";
             }
            
                    
                 else{

                    if($password==$confirm){
                       
                        $query=("INSERT INTO register (Name,Email,Password,ConfirmPassword) VALUES('$name','$email','$password','$confirm')");
                             $result=mysqli_query($db,$query);
                             if($result){
                             header('location:login.php');
                             }
                             else{
                                echo "insert is fail";
                             }
                             
                         }
                         else{
                             echo "password is not same";
                         }    
                        
                   
                 }
                 
                 }      
                
    ?>


</body>
</html>