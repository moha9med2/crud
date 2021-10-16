<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php $id_r = $_GET['id']; ?>

<?php
$sql = "SELECT * FROM file_upload_2 WHERE id=$id_r";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>


<div class="container pt-5">
    <div class="m-auto w-50">
        <form action="update.php?id=<?php echo $id_r ?>" method="POST" enctype="multipart/form-data">
            <input value="<?php echo $row['title']?>" type="text" name="title" class="form-control my-3" placeholder="title">
            <input value="<?php echo $row['description']?>" type="text" name="description" class="form-control my-3" placeholder="description">
            <input value="<?php echo $row['price']?>" type="text" name="price" class="form-control my-3" placeholder="price">
            <input type="file" name="image" class="form-control my-3" placeholder="image">
            <button type="submit" name="submit" class="btn btn-dark">update</button>
        </form>
    </div>
</div>


</body>

</html>