<?php
include_once 'Config.php';
?>

<?php
	
	$fname = $_POST["s_firstname"];
	$lname = $_POST["s_lastname"];
	$pnumber = $_POST["s_phno"];
	$email = $_POST["s_email"];
	$password = $_POST["s_psw"];
	$conpsw = $_POST["s_conpsw"];
	
	
	$sql = "insert into seller(sellerId,s_firstname,s_lastname,s_phno,s_email,s_psw,s_conpsw)values('','$fname','$lname','$pnumber','$email','$password','$conpsw')";
	
	if(mysqli_query($connection,$sql)){
		echo"Record inserted successfully!!!";
		header("Location:RegisterB.php");
	}
	else{
		echo "Error inserting!!!";
	}
	mysqli_close($connection);

?>