<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = 1; // Replace with the logged-in user's ID
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO shipping_details (user_id, address, phone) VALUES ('$user_id', '$address', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: PaymentMethod.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
