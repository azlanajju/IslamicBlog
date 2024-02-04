function incrementLike() {
    $.ajax({
        type: "POST",
        url: "increment.php",
        success: function(response) {
            $("#likeCount").html("Thasbeeh Count: " + response);
        },
        error: function(xhr, status, error) {
            console.log("Error:", xhr.responseText);
            console.log("Status:", status);
            console.log("Error:", error);
        }
    });
}

function fetchAndUpdate() {
    $.ajax({
        type: "POST",
        url: "fetch.php",
        success: function(response) {
            var data = JSON.parse(response);
            $("#likeCount").html(data.likeCount);
            $("#welcomeMessage").html(data.name + "!");
            $("#uniqueId").html(data.UniqueId);
        },
        error: function(xhr, status, error) {
            console.log("Error:", xhr.responseText);
            console.log("Status:", status);
            console.log("Error:", error);
        }
    });
}

$(document).ready(function() {
    $("#likeButton").click(function() {
        incrementLike();
        fetchAndUpdate();
    });

    // Initial fetch on document ready
    fetchAndUpdate();
});

function copyUniqueId() {
    var uniqueIdText = document.getElementById("uniqueId");
    var range = document.createRange();
    range.selectNode(uniqueIdText);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);

    document.execCommand("copy");

    window.getSelection().removeAllRanges();

    alert("Unique ID copied to clipboard!");
}