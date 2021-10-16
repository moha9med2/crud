<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<?php $id_r = $_GET['id']; ?>

<?php
$sql = "SELECT * FROM file_upload_2 WHERE id=$id_r";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>


<div class="container p-5">
    <div class="m-auto w-75 text-center">
        <h2> <?php echo $row['id'] ?> - <?php echo $row['title'] ?></h2>
        <div>
            <img src="images/<?php echo $row['image'] ?>" width="400px" alt="">
        </div>
        <p><?php echo $row['description'] ?></p>
    </div>
</div>



</body>

</html>