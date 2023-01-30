<!DOCTYPE html>
<html lang="EN">
<head>
  <title> Form
  </title>
  <link rel="stylesheet" type="text/css" href="support1.css"/>
</head>
<body>
<?php
$commentquestion = $_POST['question'];

$db = mysqli_connect("studentdb-maria.gl.umbc.edu","dhussei1","dhussei1","dhussei1");

$constructed_query = "INSERT INTO Questions (question)
values ('$commentquestion')";
echo 'Please be patient while we look at your question and get back to you.';
?>
<p>
    <a href= "https://swe.umbc.edu/~amang2/Deliverable5/support.html"> Back </a>
  </p>
  <?php
$result = mysqli_query($db, $constructed_query);

?>

</body>
</html>
