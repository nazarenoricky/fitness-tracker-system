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
<?php
if (isset($_SESSION["username"])) { 
?>
    <a href="logout.php" style="position: absolute; top: 10px; right: 10px;">Logout</a>
<?php
}
?>

       <div>
        <form action = "startW.php" method = "post">
        <h1>Select Activity</h1>
  <p>Please choose your activity:</p>
  <select id="activitySelect">
    <option value="stretch">Stretch</option>
    <option value="cardio">Cardio</option>
    <option value="yoga">Yoga</option>
    <option value="running">Running</option>
    <option value="jogging">Jogging</option>
    <option value="walking">Walking</option>
  </select>
  <br>
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

.h1, h2 {
    color: white;
    margin: 10px;
}

form {
    margin-top: 100px;
    font-size: 25px;
    text-align: center;
    color: white;
    
}

label {
    display: black;
    margin-bottom: 10px;
}

.field[type="submit"] {
    margin: 150px;
    padding: 10px 100px;
    background-color:#fff;
    color: #000;
    cursor: pointer;

}

.activitySelect {
    margin: 100px;
    text-align: center;
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