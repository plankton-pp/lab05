<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//Connect to DB
	$conn=mysqli_connect("localhost", "root", "","RegisterDB");
	$conn->query("SET NAMES UTF8");

	$sql="UPDATE register
	SET FirstName = '".$_POST['firstname']."'"
	.",LastName='".$_POST['lastname']."'"
	.",Age='".$_POST['age']."'"
	.",Gender='".$_POST['gender']."'"
	." WHERE ID=".$_SESSION['id']
	;




	$status ="Update Successfull !<br />";
	echo $status."<br />";
	echo $sql."<br />";
	echo "<a href=\"view.php\">Go to home<a>";
	$conn->query($sql);
	$conn->close();
	?>
</body>
</html>