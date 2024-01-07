<?php
$conn = mysqli_connect("localhost", "root", "", "ajax");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the current like count from the database
    $query = "SELECT like_count FROM likes WHERE id =1"; 
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $currentLikes = $row['like_count'];

        // Increment the like count
        $newLikes = $currentLikes + 1;

        // Update the like count in the database
        $updateQuery = "UPDATE likes SET like_count = $newLikes"; // Assuming there's no 'id' column
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            // Return the updated like count
            echo $newLikes;
        } else {
            echo "Error updating like count";
        }
    } else {
        echo "Error retrieving like count";
    }
}

mysqli_close($conn);
?>
