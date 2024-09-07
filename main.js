var current = 750.12;
var increment = 25.27;
var el = document.querySelector('.some-element');
od = new Odometer({el: el, value: current, format: 'dd'});


function incrementLike() {
    $.ajax({
        type: "POST",
        url: "increment.php",
        success: function(response) {
            $("#likeCount").html(response);
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
            $("#odometer").html(data.likeCount); // Update the odometer with the fetched count
            $("#welcomeMessage").html(data.name );
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




function resetClick() {
    var confirmation = confirm("Are you sure you want to reset the count?");

    if (confirmation) {
        window.location.href = "reset.php";
    }
}
