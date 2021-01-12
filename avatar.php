<?php
	$avt = $_GET['nickname'];
	//add code
	// echo avatar name, e.g., nickname no.=1, avatar name = “Mr. avatar1”
	switch ($avt) {
		case '1':
			echo "Mr. avatar 1 !!!";
			break;
		case '2':
			echo "Mrs. avatar 2 !!!";
			break;
		case '3':
			echo "Mr. avatar 3 !!!";
			break;
		case '4':
			echo "Mrs. avatar 4 !!!";
			break;
		case '5':
			echo "Mr. avatar 5 !!!";
			break;
		case '6':
			echo "Mrs. avatar 6 !!!";
			break;
		default:
			# code...
			break;
	}
?>