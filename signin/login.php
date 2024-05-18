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
        <form action = "wh.php" method = "post">
        <h1>Select Gender</h1>
        <p>Please select your gender:</p>
        <label><input type="radio" name="male" value="male"> Male</label>
        <label><input type="radio" name="female" value="female"> Female</label>
        <br>
            <input type = "submit" class = "gender" name = "next" value = "next">

        </form> 
       </div>
       <?php
    if (isset($_POST['login'])){
        $gender = $_POST['gender'];
    
       

        $select = mysqli_query($conn, "SELECT * FROM db_tracker WHERE gender='$gender' ");
        if (!$select) {
            die('Error: ' . mysqli_error($conn));
        }
        if(mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_array($select);
            $_SESSION["gender"] = $row['gender'];
          
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid username or password!")';
            echo 'window.location.href = "login.php"';
            echo '</script>';
        }
}
    if(isset($_SESSION["gender"])){
        header("location:login.php");
    }    
    ?>    
</body>
</html>
<style>


body {
    background-image: url(gym.jpg);
    font-family: Customs;
    background-color: white;
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
    margin-top: 150px;
    font-size: 20px;
    text-align: center;
    color: white;
    
}

label {
    display: black;
    margin-bottom: 10px;
}

input[type="radio"] {
    margin-right: 10px 29px;
    color: white;
}

.gender {
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