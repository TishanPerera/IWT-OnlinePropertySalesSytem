<?php
include_once 'Config.php';

$id="";
$name = "";
$email = "";
$phone = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            break;
        }

        // Update existing client in the database
        $sql = "UPDATE seller_msg SET name='$name', email='$email', phone='$phone', message='$message' WHERE id='$id'";

        $result = $connection->query($sql);

        if (!$result) {
            break;
        }
        header("location: /IWT A1/SellerSupport.php");
        exit;
    } while (false);
}

// Retrieve existing client information for editing
if (isset($_GET['id'])) {
    $sellerId = $_GET['id'];
    $sql = "SELECT * FROM seller_msg WHERE id = '$sellerId'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['message'];
    }
}
?>
<?php
include_once 'SellerMsgForm.php';
?>
