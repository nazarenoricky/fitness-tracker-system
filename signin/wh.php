<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <div>
        <form action = "activity.php" method = "post">
        <h1>Enter Weight and Height</h1>
        <p>Please enter your weight and height:</p>
        <input type="number" id="weightInput" placeholder="Weight (kg)"required = "">
        <input type="number" id="heightInput" placeholder="Height (cm)"required = ""><br>
        <input type = "submit" class = "field" name = "next" value = "next">

        </form> 
       </div>
        
</body>
</html>
<style>
body {
    background-image: url(gym.jpg);
    font-family: Customs;
    background-color: while;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 200px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: white;
}

form {
    margin-top: 100px;
    font-size: 20px;
    text-align: center;
    color: white;
    
}

label {
    display: black;
    margin-bottom: 10px;
}

.field[type="submit"] {
    margin: 80px;
    padding: 10px 110px;
    background-color:#fff;
    color: #000;
    cursor: pointer;

}

.number {
    margin: 100px;
    background-color: white;
    color: black;
    border: none;
    padding: 15px 100px;
    cursor: pointer;
    border-radius: 5px;
}
.alert {
    color: ;
    font-weight: bold;
}
</style>