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
<?php

if (isset($_SESSION["username"])) { 
?>
    <a href="logout.php" style="position: absolute; top: 10px; right: 10px;">Logout</a>
<?php
}
?>
  <div>
        <form action = ".php" method = "post">
        <h1>Start Your Workout</h1>
        <p>Get ready to start your workout!</p>
     <br>
        <input type = "submit" class = "workout" name = "start workout" value = "start workout">

        </form> 
</div>

</body>
</html>

<style>

body {
    font-family: Customs;
    background-image: url(gym.jpg);
    background-color: black;
    margin: 0;
    padding: 0;
    text-align: center;
}

.container {
    max-width: 700px;
    margin: 300px auto;
    padding: 20px;
    background-color: black;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    color: white;
}

p {
    color:white;
}

form {
    margin-top: 200px;
    font-size: 35px;
}

.workout {
    margin: 100px;
    background-color: white;
    color: black;
    border: none;
    padding: 15px 100px;
    cursor: pointer;
    border-radius: 5px;
}

