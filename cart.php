<!DOCTYPE html>
<html lang="EN"><head>
	<title>Submit PHP</title>
</head>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","dhussei1","dhussei1","dhussei1");
	
	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");
	
	$customername = $_POST['customer'];
	$email = $_POST['email'];
	
	$constructed_query = "INSERT INTO Cart (customername, email, suit_type) values ('$customername', '$email', 'Navy Blue Suit')";

	$result = mysqli_query($db, $constructed_query);

	if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error();
		print "<p> . $error . </p>";
		exit;
	}
?>	
</body>
</html>