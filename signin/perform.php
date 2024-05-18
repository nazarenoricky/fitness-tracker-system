<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="perform" style="display: none;">
  <h1 style="color: brown; ">Perform Activity</h1>
  <p style="color: brown; ">Performing the selected activity...</p>
  <div id="activityInfo"></div> 
</div>
</body>
</html>
<script>
function startActivity() {
    var selectedActivity = document.getElementById("activitySelect").value;
    switch (selectedActivity) {
        case "stretch":
            startTimer(30);
            break;
        case "cardio":
            performSets(3, 30); 
            break;
        case "yoga":
            startTimer(16);
            break;
        case "running":
        case "jogging":
        case "walking":
            runDistance(3000); 
            break;
        default:
            break;
    }
    
    document.getElementById("activitySelect").style.display = "none";
    document.getElementById("perform").style.display = "block";
    document.getElementById("activityInfo").innerHTML = "Performing " + selectedActivity;
}

function startTimer(duration) {
    var timer = duration;
    var minutes, seconds;

    var intervalId = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        document.getElementById("activityInfo").innerHTML = "Time Remaining: " + minutes + ":" + seconds;

        if (--timer < 0) {
            clearInterval(intervalId);
        }
    }, 1000);
}

function performSets(numSets, duration) {
    var setsCounter = 1;
    for (var i = 0; i < numSets; i++) {
        startTimer(duration);
        document.getElementById("activityInfo").innerHTML = "Set " + setsCounter;
        setsCounter++;
    }
}

function runDistance(distance) {
    var metersCovered = 0;
    var intervalId = setInterval(function () {
        metersCovered += 1;
        document.getElementById("activityInfo").innerHTML = "Meters Covered: " + metersCovered;
        if (metersCovered >= distance) {
            clearInterval(intervalId);
        }
    }, 1000); 
}
</script>