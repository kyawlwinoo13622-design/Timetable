<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// select teacher

   
                include("databaseConnection.php");
                if(isset($_POST['ha'])){
                  $query="SELECT * FROM alldata";
                  $result=mysqli_query($db,$query);
                  if($result){
                    $day[0]="monday";
                    $day[1]="tueday";
                    $day[2]="wednesday";
                    $day[3]="thurday";
                    $day[4]="friday";
                      
                   $time[0]="9:00_10:00";
                   $time[1]="10:00_11:00";
                   $time[2]="11:00_12:00";
                  
                   $time[3]="1:00_2:00";
                   $time[4]="2:00_3:00";
                   $time[5]="3:00_4:00";
                   $S[0][0]="";
                   $S[0][1]="";
                   $S[0][2]="";
                   $S[0][3]="";
                   $S[0][4]="";
                   $S[0][5]="";

                   $S[1][0]="";
                   $S[1][1]="";
                   $S[1][2]="";
                   $S[1][3]="";
                   $S[1][4]="";
                   $S[1][5]="";
                  
                   $S[2][0]="";
                   $S[2][1]="";
                   $S[2][2]="";
                   $S[2][3]="";
                   $S[2][4]="";
                   $S[2][5]="";

                   $S[3][0]="";
                   $S[3][1]="";
                   $S[3][2]="";
                   $S[3][3]="";
                   $S[3][4]="";
                   $S[3][5]="";

                   $S[4][0]="";
                   $S[4][1]="";
                   $S[4][2]="";
                   $S[4][3]="";
                   $S[4][4]="";
                   $S[4][5]="";
                   
                    while($row=mysqli_fetch_assoc($result)){
                      $r1=$row['Class'];
                      $r2=$row['Section'];
                      $r3=$row['Day'];
                      $r4=$row['Time'];

                      $teachername=$_POST['ha'];
                      $teacher=$row['TeacherName'];

                      for($j=0;$j<5;$j++){
                      
                        for($r=0;$r<6;$r++){
                        if($teachername==$teacher && $day[$j]==$r3 && $time[$r]==$r4){
                         $S[$j][$r]=$row['Class'].$row['Section'];
                         
                        }
                        
                        }
                        
                        
                      }
                      
                  }?>
                  <div class="container mt-5 border border-secondary text-center ">
                  <div class="row">
                    <div class="col border border-secondary">Day/Time</div>
                    <div class="col border border-secondary">9:00_10:00</div>
                    <div class="col border border-secondary">10:00_11:00</div>
                    <div class="col border border-secondary">11:00_12:00</div>
                    <div class="col border border-secondary">1:00_2:00</div>
                    <div class="col border border-secondary">2:00_3:00</div>
                    <div class="col border border-secondary">3:00_4:00</div>
                  </div>
                  <div class="row">
                    <div class="col border border-secondary">Monday</div>
                    <div class="col border border-secondary"> <?php echo $S[0][0]?></div>
                    <div class="col border border-secondary"><?php echo $S[0][1]?></div>
                    <div class="col border border-secondary"><?php echo $S[0][2]?></div>
                    <div class="col border border-secondary"><?php echo $S[0][3]?></div>
                    <div class="col border border-secondary"><?php echo $S[0][4]?></div>
                   <div class="col border border-secondary" ><?php echo $S[0][5]?></div>
                  </div>
                  <div class="row">
                    <div class="col border border-secondary">Tueday</div>
                    <div class="col border border-secondary"><?php echo $S[1][0]?></div>
                    <div class="col border border-secondary"><?php echo $S[1][1]?></div>
                    <div class="col border border-secondary"><?php echo $S[1][2]?></div>
                    <div class="col border border-secondary"><?php echo $S[1][3]?></div>
                    <div class="col border border-secondary"><?php echo $S[1][4]?></div>
                    <div class="col border border-secondary"><?php echo $S[1][5]?></div>
                  </div>
                  <div class="row">
                    <div class="col border border-secondary">Wednesday</div>
                    <div class="col border border-secondary"><?php echo $S[2][0]?></div>
                    <div class="col border border-secondary"><?php echo $S[2][1]?></div>
                    <div class="col border border-secondary"><?php echo $S[2][2]?></div>
                    <div class="col border border-secondary"><?php echo $S[2][3]?></div>
                    <div class="col border border-secondary"><?php echo $S[2][4]?></div>
                    <div class="col border border-secondary"><?php echo $S[2][5]?></div>
                  </div>
                  <div class="row">
                    <div class="col border border-secondary">Thurday</div>
                    <div class="col border border-secondary"><?php echo $S[3][0]?></div>
                    <div class="col border border-secondary"><?php echo $S[3][1]?></div>
                    <div class="col border border-secondary"><?php echo $S[3][2]?></div>
                    <div class="col border border-secondary"><?php echo $S[3][3]?></div>
                    <div class="col border border-secondary"><?php echo $S[3][4]?></div>
                    <div class="col border border-secondary"><?php echo $S[3][5]?></div>
                  </div>
                  <div class="row">
                    <div class="col border border-secondary">Friday</div>
                    <div class="col border border-secondary"><?php echo $S[4][0]?></div>
                    <div class="col border border-secondary"><?php echo $S[4][1]?></div>
                    <div class="col border border-secondary"><?php echo $S[4][2]?></div>
                    <div class="col border border-secondary"><?php echo $S[4][3]?></div>
                    <div class="col  border border-secondary"><?php echo $S[4][4]?></div>
                    <div class="col border border-secondary"><?php echo $S[4][5]?></div>
                  </div>
                </div>
                
                    <?php
                }
              }
              ?>
</body>
</html>