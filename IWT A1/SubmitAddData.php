<?php
include_once 'Config.php';
?>

<?php
	
    $topic = $_POST["topic"];
    $image = $_POST["cover_image"];
    $description = $_POST["description"];
	$ptype = $_POST["promotion_type"];
	$name = $_POST["name"];
	$email = $_POST["email"];
    $phno = $_POST["phone"];
	
	
	
	$sql = "insert into premium_add_req(addId,topic,coverImage,description,promotionType,sellerName,sellerEmail,sellerPhno)values('','$topic','$image','$description','$ptype','$name','$email','$phno')";
	
	if(mysqli_query($connection,$sql)){
		echo"Record inserted successfully!!!";
		header("Location:PremiumAddReq.php");
	}
	else{
        echo "Error inserting!!!";
    }
    mysqli_close($connection);

?>