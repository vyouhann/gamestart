<?php
require_once 'conn.php';
session_start();
    
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
        $pass=$_POST['password'];
    
        $sql = "SELECT * FROM user WHERE username = '$name' AND password ='$pass'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $name; 

            header("Location: index.php");
            exit();
        } else {
            echo "Invalid Credentials";
            session_destroy();
            header("Location:index.php");
            exit();
        
        }
    
        mysqli_close($conn);
    }











