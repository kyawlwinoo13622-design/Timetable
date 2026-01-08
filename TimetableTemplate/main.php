



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.min.js"></script>
    
</head>
<body>
  <?php
    include("navigation.php");
  ?>
  




         <?php
 include("databaseConnection.php");
    if(isset($_POST['firstyear'])){
        $query="SELECT subject FROM admin WHERE class='First Year' AND section='Section A' AND day='Monday' AND time='9:00-10:00'";
        
       $result= mysqli_query($db,$query);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          echo '<table border="1">
          <tr>
            <td>9:00_10:00</td>
            <td>10:00_11:00</td>
            <td>11:00_12:00</td>
            <td>12:00_1:00</td>
            <td>1:00_2:00</td>
            <td>2:00_3:00</td>
            <td>3:00_4:00</td>
            
          </tr>
          <tr>
            <td>'.$row['subject'].'</td>
          </tr>

       </table>';
        }
      }
       
       
        
    }

?>

</body>
</html>