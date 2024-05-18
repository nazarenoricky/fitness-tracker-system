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
<h2>login</h2>
       <div>
        <form action = "wh.php" method = "post">
        <label><input type="radio" name="gender" value="male"> Male</label>
  <br>
        <label><input type="radio" name="gender" value="female"> Female</label>
            <input type = "submit" class = "field" name = "next" value = "next">

        </form> 
       </div>
        
</body>
</html>