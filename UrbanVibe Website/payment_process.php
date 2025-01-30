<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = 1; // Replace with the logged-in user's ID
    $card_name = $_POST['card-name'];
    $card_number = $_POST['card-number'];
    $expiry_date = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO payment_details (user_id, card_name, card_number, expiry_date, cvv) VALUES ('$user_id', '$card_name', '$card_number', '$expiry_date', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        header("Location: CheckoutConfirmation.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
