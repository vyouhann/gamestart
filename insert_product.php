<?php
include 'conn.php';
$game_name = $_POST['game_name'];
$publisher = $_POST['publisher'];
$genre_id = $_POST['genre'];
$description = $_POST['description'];
$price = $_POST['price'];

if(is_uploaded_file($_FILES['file1'] ['tmp_name'])){
    $new_image_name='pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']),PATHINFO_EXTENSION);
    $image_upload_path = "images/".$new_image_name;
    move_uploaded_file($_FILES['file1'] ['tmp_name'],$image_upload_path);
}else{
    $new_image_name="";
}
$sql="INSERT INTO game(game_name,publisher,genre_id,description,price,image) 
VALUES('$game_name','$publisher','$genre_id','$description','$price','$new_image_name')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert(inserted successfully'');</script> ";
    echo "<script>window.location='show_product.php';</script>";
}
else{
    echo "<script> alert('there was a problem'); </script>";
}
mysqli_close($conn)
?>