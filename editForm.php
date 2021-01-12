<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
	<?php 
		$_SESSION["id"]=$_GET['id'];
		//Connect to DB
		$conn=mysqli_connect("localhost", "root", "tiger","registerdb");
		$conn->query("SET NAMES UTF8");
		$sql="SELECT * FROM register WHERE ID = ".$_SESSION['id'];
		$rs=$conn->query($sql);
		while ($row = $rs->fetch_assoc()) {
			$_SESSION['firstname']=$row['FirstName'];
			$_SESSION['lastname']=$row['LastName'];
			$_SESSION['age']=$row['Age'];
			$_SESSION['gender']=$row['Gender'];
		}
		$conn->close();
	?>
	<form action="edit.php"method="POST">
			<table border="0" align="center">
				<tr>
					<td>Firstname:</td>
					<td><input type="text" name="firstname" value=<?php echo $_SESSION['firstname'];?>></td>
				</tr>
				<tr>
					<td>Lastname:</td>
					<td><input type="text" name="lastname" value=<?php echo $_SESSION['lastname'];?>></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td align="left"><input type="number" name="age" min="1" max="90" value=<?php echo $_SESSION['age'];?>></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td align="left">
					<select name="gender" id="gender">
						<?php
						 if($_SESSION['gender']=="Male"){
						 	echo "<option value=\"Male\">Male</option>
								<option value=\"Female\">Female</option>";
						 }else{
						 	echo "<option value=\"Female\">Female</option>
							<option value=\"Male\">Male</option>";
						 }
						?>


						
					</select>
				</tr>
			</table>
			<input type="submit" name="submit"value="Save">
			<input type="reset" name="cancel"value="Cancel">

		</form>
</body>
</html>