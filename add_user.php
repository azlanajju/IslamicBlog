<?php
include("./config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input
    $prefix = 'TH';
    $currentYear = date('m');
    $randomNumericPart = rand(10, 99);
    $UniqueId = $prefix . $currentYear . $randomNumericPart;
    $name = $_POST["name"];

    $checkQuery = "SELECT * FROM Thasbeeh WHERE UniqueId = '$UniqueId'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        // UniqueId already exists, provide an error message
        echo '<div class="alert alert-danger" role="alert">Id already exists. Please choose a different Id.</div>';
    } else {
        // UniqueId does not exist, proceed to create a new record
        $insertQuery = "INSERT INTO Thasbeeh (name, UniqueId, Thasbeeh_count) VALUES ('$name', '$UniqueId', 0)";

        if ($conn->query($insertQuery) === TRUE) {
            // Record inserted successfully, create a session and redirect to thasbeeh.php
            session_start();
            $_SESSION['UniqueId'] = $UniqueId;

            header("Location: thasbeeh.php");
            exit();
        } else {
            // Error in inserting record, provide an error message
            echo '<div class="alert alert-danger" role="alert">Error creating account. Please try again.</div>';
        }
    }

    $conn->close();
}
?>
