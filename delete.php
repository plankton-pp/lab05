<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//Connect to DB
	$conn=mysqli_connect("localhost", "root", "","RegisterDB");
	$conn->query("SET NAMES UTF8");

	$id = $_GET['id']; // $id is now defined
	// or assuming your column is indeed an int
	// $id = (int)$_GET['id'];
	$sql="DELETE FROM register WHERE ID='".$id."'";
	$status = "ID ".$id." has been already deleted !<br />";
	echo $status;
	echo "<a href=\"view.php\">Go to home<a>";
	$conn->query($sql);
	$conn->close();
	?> 
</body>
</html>