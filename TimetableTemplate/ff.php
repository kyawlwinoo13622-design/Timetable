<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
    
            <form action="" method="post">
            <table border=1 class="mt-5">
              <tr class="border border-secondary">
                <th>ID</th>
                <th>Class</th>
                <th>Section</th>
                <th>Subject</th>
                <th>Major</th>
                <th>Teacher's Name</th>
                <th>Department's Name</th>
                <th>Day</th>
                <th>Time</th>
                <th>Operations</th>
              </tr>
           
            
            <?php
            include("databaseConnection.php");
            $cc="First Year";
            $ss="Section A";
            $all=mysqli_query($db,"SELECT * FROM alldata WHERE Class='$cc' AND Section='$ss'");
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
                    echo '<tr>
                      <td>'.$id.'</td>
                      <td>'.$CLASS.'</td>
                      <td>'.$SECTION.'</td>
                      <td>'.$SUBJECT.'</td>
                      <td>'.$MAJOR.'</td>
                      <td>'.$TEACHERNAME.'</td>
                      <td>'.$DEPARTMEMTNAME.'</td>
                      <td>'.$DAY.'</td>
                      <td>'.$TIME.'</td>
                      <td>
                        <button><a href="Update.php?updateId='.$id.'">UPDATE</a></button>
                        <button><a href="Delete.php?deleteId='.$id.'">DELETE</a></button>
                      </td>
                    </tr>';
                    
                  }

            }
            ?>
            </table>
            </form>
    ?>
</body>
</html>