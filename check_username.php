<?php
    require_once 'conn.php';
    
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
    
        $sql = "SELECT * FROM user WHERE username = '$name'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<span style='color: red;'>Username already exists.</span>";
        } else {
            echo "<span style='color: green;'>Username is available.</span>";
        }
    
        mysqli_close($conn);
    }
    ?>

