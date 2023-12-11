<?php
include_once 'Config.php';
?>
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete client from the database
    $sql = "DELETE FROM seller_msg WHERE id = '$id'";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    header("Location:/IWT A1/SellerSupport.php");
    exit;
}
?>