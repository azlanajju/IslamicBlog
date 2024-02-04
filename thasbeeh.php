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
            padding: 20px;
        }

        #counterContainer {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px;
        }

        #likeCount, #welcomeMessage, #uniqueId {
            margin-bottom: 20px;
        }

        #likeButton {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        #copyButton {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 3px;
            cursor: pointer;
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
