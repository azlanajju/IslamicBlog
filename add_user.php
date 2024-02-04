<?php
include("./config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prefix = 'TH';
    $currentYear = date('m');
    $randomNumericPart = rand(10, 99);
    $UniqueId = $prefix . $currentYear . $randomNumericPart;
    $name = $_POST["name"];

    $checkQuery = "SELECT * FROM Thasbeeh WHERE UniqueId = '$UniqueId'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo '<div class="alert alert-danger" role="alert">Id already exists. Please choose a different Id.</div>';
    } else {
        $insertQuery = "INSERT INTO Thasbeeh (name, UniqueId, Thasbeeh_count) VALUES ('$name', '$UniqueId', 0)";

        if ($conn->query($insertQuery) === TRUE) {
            session_start();
            $_SESSION['UniqueId'] = $UniqueId;

            header("Location: thasbeeh.php");
            exit();
        } else {
            echo '<div class="alert alert-danger" role="alert">Error creating account. Please try again.</div>';
        }
    }

    $conn->close();
}
?>
