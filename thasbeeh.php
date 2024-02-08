<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Thasbeeh Counter</title>
    <style>
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

#counterContainer {
    width: 300px;
    padding: 40px;
    background-color: #043927;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    color: #343a40;
}

#welcomeMessage {
    margin-bottom: 20px;
    color: #fff;
    font-weight: bold;
    font-size: 30px;
}

#likeCount {
    margin-bottom: 30px;
    font-size: 28px;
    color: #28a745; 
}

#uniqueId {
    margin-bottom: 20px;
    color: #6c757d; 
}

#likeButton, #copyButton {
    background-color: #0000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#likeButton:hover, #copyButton:hover {
    background-color: #fff;
    color: black;
}

    </style>
</head>
<body>

<div id="counterContainer">
    <div id="welcomeMessage" class="h4"></div>
    <div id="likeCount" class="h3"></div>
    <div id="uniqueId" class="h5"></div>
    <button id="likeButton" class="btn btn-success">Count</button>
    <button id="copyButton" class="btn btn-primary" onclick="copyUniqueId()">Copy</button>
</div>

<script src="./main.js"></script>

</body>
</html>
