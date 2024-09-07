<?php
session_start();
include("./config.php");

if (!isset($_SESSION['email'])) {
    echo "Error: User not logged in.";
    exit();
}

$email = $_SESSION['email'];

$resetQuery = "UPDATE Thasbeeh SET Thasbeeh_count = 0 WHERE email = '$email'";

if ($conn->query($resetQuery) === TRUE) {
    echo "Count reset successfully for user with email: $email";
    header("Location: ./thasbeeh.php");
} else {
    echo "Error resetting counts";
}

$conn->close();
?>
