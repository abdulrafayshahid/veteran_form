<?php
include('db_connection.php');

session_start(); 
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    echo($username);
    $password = $_POST["password"];
    echo($password);

    $sql = "SELECT * FROM `admins` WHERE `username` = '$username' and `password` = '$password';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDatabase = $row["password"]; 
    
       
            $_SESSION['veteran_username'] = $username;
            $_SESSION['veteran_admin'] = "VeteranAdmin";
            
            header("Location: ../../admin/index.php");
            exit();
        
    } else {
        $_SESSION['flash_message'] = "Username or Password is incorrect!";
        header("Location: ../../admin/login.php");
  
      
exit;
    }
} else {
    // Handle the case when the form is not submitted properly
    // echo "Form submission error";
}
?>
