<?php
include("./config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"]; // Added email variable

    // Check if the email already exists in the database
    $checkQuery = "SELECT * FROM Thasbeeh WHERE email = '$email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        // If email exists, login
        session_start();
        $_SESSION['email'] = $email;

        header("Location: thasbeeh.php");
        exit();
    } else {
        // If email doesn't exist, sign up
        $insertQuery = "INSERT INTO Thasbeeh (name, email, Thasbeeh_count) VALUES ('$name', '$email', 0)"; // Removed UniqueId from the query

        if ($conn->query($insertQuery) === TRUE) {
            session_start();
            $_SESSION['email'] = $email;

            header("Location: thasbeeh.php");
            exit();
        } else {
            echo '<div class="alert alert-danger" role="alert">Error creating account. Please try again.</div>';
        }
    }

    $conn->close();
}
?>
