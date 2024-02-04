<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "ajax");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['UniqueId'])) {
        $UniqueId = $_SESSION['UniqueId'];
        $query = "SELECT * FROM Thasbeeh WHERE UniqueId = '$UniqueId'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $likeCount = $row['Thasbeeh_count'];
            $name = $row['name'];
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
