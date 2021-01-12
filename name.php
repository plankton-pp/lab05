<?php
	$res_text;
	$name = $_GET["name"];
	// connect to the database
	$conn=mysqli_connect("localhost", "root", "","registerdb");
	$conn->query("SET NAMES UTF8");
	// get results from database
	$sql="SELECT * FROM Register WHERE FirstName LIKE '%$name%'";
	$rs=$conn->query($sql);
	$suggestion = array();
	$index = 0;
	while($row = $rs->fetch_assoc()) {
	// echo out the contents of each row into a table
		if($index == 0){
			$suggestion[] = $row['FirstName'];
		}else{
			$suggestion[] = ",".$row['FirstName'];
		}
		
		$index++;
	}
	$conn->close(); // close database connection
	
	foreach($suggestion as $print_sc){
		echo $print_sc;
	}
?>