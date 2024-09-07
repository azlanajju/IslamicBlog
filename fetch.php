<?php
session_start();

include("./config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = "SELECT * FROM Thasbeeh WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $likeCount = $row['Thasbeeh_count'];
            $name = $row['name'];
            echo json_encode(['likeCount' => $likeCount, 'name' => $name, 'email' => $email]);
        } else {
            echo "Error retrieving Thasbeeh count";
        }
    } else {
        echo "User not logged in.";
    }
}

mysqli_close($conn);
?>
