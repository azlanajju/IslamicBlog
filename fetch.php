<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "ajax");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user is logged in
    if (isset($_SESSION['UniqueId'])) {
        $UniqueId = $_SESSION['UniqueId'];

        // Get the current Thasbeeh_count and name from the database
        $query = "SELECT * FROM Thasbeeh WHERE UniqueId = '$UniqueId'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $likeCount = $row['Thasbeeh_count'];
            $name = $row['name'];

            // Return the updated Thasbeeh_count, name, and UniqueId as JSON
            echo json_encode(['likeCount' => $likeCount, 'name' => $name, 'UniqueId' => $UniqueId]);
        } else {
            echo "Error retrieving Thasbeeh count";
        }
    } else {
        echo "User not logged in.";
    }
}

mysqli_close($conn);
?>
