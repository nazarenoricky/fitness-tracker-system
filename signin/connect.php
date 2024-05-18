<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["Submit"])){
        $email = $_POST["Email"];
        $password = $_POST["Password"];
    
       
        $con = new mysqli("localhost", "root", "", "database_login");
        if ($con->connect_error) {
            die("Failed to connect: " . $con->connect_error);
        } else {
           
            $stmt = $con->prepare("SELECT * FROM fitness WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            
            if ($stmt_result->num_rows > 0) {
                $data = $stmt_result->fetch_assoc();
               
                if (password_verify($password, $data['password'])) {
                 
                    echo "Login successful!";
                } else {
                    echo "<h2>Invalid Email or password</h2>"; 
                }
            } else {
                echo "<h2>Invalid Email or password</h2>";
            }
        }

        $con->close();
    } else {
        echo "<h2>Form fields are not set</h2>";
    }
} else {
    echo "<h2>Form not submitted</h2>";
}
?>