<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Thasbeeh Counter</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./odometer.css">
    <link rel="stylesheet" href="https://github.hubspot.com/odometer/themes/odometer-theme-car.css">

    <style>
        body {
            background-image: linear-gradient(45deg, #333, #555);
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: black;
        }

    </style>

</head>

<body>
    <div class="navbar">
        <div id="welcomeMessage" class="h4"></div>

    </div>
    <div class="bismillah">
        <img src="./images/bismillah.png" alt="">
    </div>

    <div class="row">
  <div id="odometer" class="some-element"></div>
</div>
    <div id="counterContainer">

        <div id="likeCount" class="h3"></div>
        <div id="uniqueId" class="h5"></div>
        <button id="likeButton"><img src="./images/plus.png" alt=""></button>
    </div>
<div class="logout"><a href="./logout.php">Logout</a></div>

<div onclick="resetClick()" class="reset">Reset</div>

    <script src="https://github.hubspot.com/odometer/odometer.js"></script>

    <script src="./main.js"></script>

</body>
</html>