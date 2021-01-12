<?php
	$res_text;
	$name = $_GET["name"];
	// connect to the database
	$conn=mysqli_connect("localhost", "root", "","RegisterDB");
	$conn->query("SET NAMES UTF8");
	// get results from database
	$sql="SELECT * FROM Register WHERE firstname LIKE '%$name%'";
	$rs=$conn->query($sql);
	var $suggestion = new Array();
	var $index = 0;
	while($row = $rs->fetch_assoc()) {
	// echo out the contents of each row into a table
		$suggestion[$index] = "<option value="+$row['Firstname']+">";
		$index++;
	}
	$conn->close(); // close database connection
	
	echo $suggestion;
?>