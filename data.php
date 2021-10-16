<?php 

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES['image'];
$image_name = $image['name'];
$image_tmp_name = $image['tmp_name'];
move_uploaded_file($image_tmp_name,"images/$image_name");

include 'connection.php';

include 'insert.php';



?> 