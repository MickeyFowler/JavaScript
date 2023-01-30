<!DOCTYPE html>
<html lang="EN">
<head>
  <title> Form
  </title>
  <link rel="stylesheet" type="text/css" href="rewards1.css"/>
</head>
<body>
  <?php
  $commentpoints = $_POST['points'];

  $db = mysqli_connect("studentdb-maria.gl.umbc.edu","dhussei1","dhussei1","dhussei1");

  $constructed_query = mysqli_query($db,"SELECT * FROM Cart WHERE suit_type='$commentpoints'");
  if(mysqli_num_rows($constructed_query) > 0){
$commentpoints = 300;
$i = 0;
$sum = 0;

?>
<?php
for ($i = 0; $i <= $commentpoints; $i+$commentpoints) {
                     $sum += $i;
              echo $sum;
          }

}
 ?>
 <p>
     <a href="https://swe.umbc.edu/~amang2/Deliverable5/rewards.html" > Back </a>
   </p>


</body>
</html>
