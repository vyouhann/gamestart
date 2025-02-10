<?php
include 'conn.php';
session_start();
$username=$_SESSION['username'];
$game_name = $_GET['game_name'];
$price = $_GET['price'];
$sql="INSERT INTO cart(username,game_name,price)VALUES('$username','$game_name','$price')";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to cart');</script>";
    echo "<script>window.location = 'cart.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" , mysqli_error($conn);
    echo "<script>alert('couldn't add');</script>";
}
mysqli_close($conn);

?>