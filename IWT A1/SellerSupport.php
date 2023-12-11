<?php
include_once 'Config.php';

?>

<?php
$sql = "SELECT * FROM seller_msg";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}
$name = "";
$email = "";
$phone = "";
$message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
           
            break;
        }

        // Add new client to the database
        $sql = "INSERT INTO seller_msg(name, email, phone, message) " .
            "VALUES('$name', '$email', '$phone', '$message')";

        $result = $connection->query($sql);

        if (!$result) {
            
            break;
        }
        header("location:/IWT A1/SellerSupport.php");
        exit;
    } while (false);
}

?>

<?php
include_once 'SellerMsgForm.php';
?>