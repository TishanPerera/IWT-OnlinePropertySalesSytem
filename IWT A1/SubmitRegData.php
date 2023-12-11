<?php
include_once 'Config.php';	

	
// Assuming you have already established the database connection
// $con = mysqli_connect("hostname", "username", "password", "database");

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$pnumber = $_POST["phno"];
$email = $_POST["email"];
$password = $_POST["psw"];
$conpsw = $_POST["conpsw"];

$sql = "INSERT INTO reguser (userId,FirstName,LastName,phno,email, psw, conpsw) VALUES ('', '$firstname', '$lastname', '$pnumber', '$email', '$password', '$conpsw')";

if(mysqli_query($connection,$sql)){
    echo"Record inserted successfully!!!";
    header("Location:Register.php");
}
else{
    echo "Error inserting!!!";
}
mysqli_close($connection);

?>


