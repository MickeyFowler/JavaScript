<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>LOGIN information</title>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<html>
<body>
  <?php
  $username= $_POST['username'];
  $password= $_POST['password'];

  $db = mysqli_connect("studentdb-maria.gl.umbc.edu","dhussei1","dhussei1","dhussei1");

#when users signs into existing user it'll say welcome (the name of the user they entered)
  if(isset($_POST['username'])){
    $constructed_query = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db, $constructed_query);
    if(mysqli_num_rows($result) > 0){
      ?>
      <div class= "center">
        <h2 class="logeduser">Welcome <?php echo $_POST['username'];?></h2>
        <a href="mainhomeloged.html"><h2>home</h2></a>
      </div>
      <?php
    }
    else{
      ?>
      <div class= "center">
        <h2>Login not Successful. Please enter vaild username and password!</h2>
        <a href="login.html"><h2>login</h2></a>
      </div>
      <?php
    }
  }
  ?>
</body>
</html>
