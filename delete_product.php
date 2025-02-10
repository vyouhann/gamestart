<?php
include 'conn.php';
$game_name = $_GET['game_name'];
$sql = "DELETE FROM game WHERE game_name = '$game_name' ";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location = 'show_product.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" , mysqli_error($conn);
    echo "<script>alert('something went wrong');</script>";
}

mysqli_close($conn);

?>