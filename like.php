<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Like Counter</title>
</head>
<body>

<div id="likeCount"></div>
<button onclick="incrementLike()">Like</button>

<script>
function incrementLike() {
    $.ajax({
        type: "POST",
        url: "update_likes.php",
        success: function(response) {
            $("#likeCount").html("Likes: " + response);
        },
        error: function(error) {
            console.log(error);
        }
    });
}

$(document).ready(function() {
    $.ajax({
        type: "POST",
        url: "update_likes.php",
        success: function(response) {
            $("#likeCount").html("Likes: " + response);
        },
        error: function(error) {
            console.log(error);
        }
    });
});
</script>

</body>
</html>
