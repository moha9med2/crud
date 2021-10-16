<?php include 'connection.php' ?>
<?php $id_r = $_GET['id']; ?>


<?php 

// sql to delete a record
$sql = "DELETE FROM file_upload_2 WHERE id=$id_r";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>

<?php header('location: show.php') ?>