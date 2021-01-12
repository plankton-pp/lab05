<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insertion</title>
</head>
<body>
<?php
//print_r($_POST);
// connect to the database
$conn=mysqli_connect("localhost", "root", "","registerdb");
$conn->query("SET NAMES UTF8");
if (($_POST["firstname"] <> "") && ($_POST["lastname"] <> "") && ($_POST["age"] <> "") && ($_POST["gender"] <> ""))
{
	$FirstName = $_POST["firstname"];
	$LastName = $_POST["lastname"];
	$Age = $_POST["age"];
	$Gender = $_POST["gender"];
	$Photo = $_POST["avatar"];
} else exit("คุณยังกรอกข้อมูลไม่ครบ!");
$sql="insert into register(FirstName, LastName, Age, Gender, Photo)
 values('$FirstName','$LastName','$Age','$Gender','$Photo')";
$rs=$conn->query($sql);
echo "Insertion Successfully!!";
$conn->close();
?>
<p><a href="view.php">Go back to Home</a></p>
</body>
</html>