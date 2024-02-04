<?php
session_start();
include("./config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UniqueId = $_POST["UniqueId"];

    $query = "SELECT * FROM Thasbeeh WHERE UniqueId = '$UniqueId'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['UniqueId'] = $UniqueId;
        $response = '<div class="alert alert-success" role="alert">Session created successfully!</div>';
        header("Location: ./thasbeeh.php");
    } else {
        $response = '<div class="alert alert-danger" role="alert">Invalid Id. Please try again.</div>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Thasbeeh Counter</title>
</head>
<body>
    <br>
<div class="container"> <?php echo $response; ?></div>

<div class="container mt-5">
    <form id="dataForm" method="post" action="">
        <div class="form-group">
            <label for="UniqueId">Enter Id:</label>
            <input type="text" class="form-control" id="UniqueId" name="UniqueId" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>
<div class="container mt-5">
    <form id="addUserForm" method="post" action="./add_user.php">
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
