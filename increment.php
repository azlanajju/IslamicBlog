<?php
session_start();

include("./config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = "SELECT Thasbeeh_count FROM Thasbeeh WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $currentLikes = $row['Thasbeeh_count'];
            $newLikes = $currentLikes + 1;
            $updateQuery = "UPDATE Thasbeeh SET Thasbeeh_count = $newLikes WHERE email = '$email'";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo $newLikes;
            } else {
                echo "Error updating Thasbeeh count";
            }
        } else {
            echo "Error retrieving Thasbeeh count";
        }
    } else {
        echo "User not logged in.";
    }
}

mysqli_close($conn);
?>
