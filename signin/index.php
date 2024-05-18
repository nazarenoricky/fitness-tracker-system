<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'fitnessdb') or die('Unable to connect');
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

       <h2>LOGIN</h2>
       <div>
        <form action = "index.php" method = "post">
            <input type = "text" class = "field"name = "username" placeholder ="username" required = ""><br>
            <input type = "password" class = "field" name = "password" placeholder ="password" required = ""><br>
            <input type = "submit" class = "field" name = "LOGIN" value = "LOGIN">

        </form> 
       </div>
        

<?php
    if (isset($_POST['LOGIN'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $select = mysqli_query($conn, "SELECT * FROM db_tracker WHERE username ='$username' AND password = '$password'");
        if (!$select) {
            die('Error: ' . mysqli_error($conn));
        }
        if(mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_array($select);
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid username or password!")';
            echo 'window.location.href = "index.php"';
            echo '</script>';
        }
}
    if(isset($_SESSION["username"])){
        header("location:login.php");
    }
?>
</body>
</html>
<style>
  

body {
    background-image: url(gym.jpg);
    font-family:Customs;
    background-color: #f9f9f9;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 150px auto;
    padding: 20px;
    background-color: black;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: white;
    margin-top: 150px;

}

form {
    margin-top: 50px;
}

.field {
    margin: 10px;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.field[type="submit"] {
    margin: 150px;
    padding: 10px 100px;
    background-color:#fff;
    color: #000;
    cursor: pointer;
}

.field[type="submit"]:hover {
    background-color: #0056b3;
}
    </style>