<?php
require_once 'conn.php'; 
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You must log in first!'); window.location = 'fr_login.php';</script>";
    exit();
}

if (!isset($_GET['game_id']) || empty($_GET['game_id'])) {
    echo "<script>alert('Invalid game ID'); window.location = 'cart.php';</script>";
    exit();
}

$game_id = intval($_GET['game_id']); 
$sql = "DELETE FROM cart WHERE game_id = '$game_id'"; 
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Deleted successfully'); window.location = 'cart.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
    echo "<script>alert('Something went wrong'); window.location = 'cart.php';</script>";
}

mysqli_close($conn);
?>