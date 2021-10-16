<?php 

$sql = "INSERT INTO file_upload_2 (title, description, price,image)
VALUES ('$title', '$description', '$price','$image_name')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// redirect after insert into database
header('location: show.php');


?>