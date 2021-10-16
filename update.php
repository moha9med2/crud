<?php 
$id_r = $_GET['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

include 'connection.php';

$sql = "UPDATE file_upload_2 SET title='$title',description='$description' WHERE id=$id_r";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// redirect after insert into database
header('location: show.php');