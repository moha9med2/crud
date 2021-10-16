<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php
$sql = "SELECT * FROM file_upload_2";
$result = mysqli_query($conn, $sql);
?>

<div class="container pt-5">
    <div class="m-auto w-75">
        <table class="table table-dark table-striped">
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
                <td>Image</td>
                <td>Actions</td>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td>
                        <img src="images/<?php echo $row['image'] ?>" width="50px" alt="">
                    </td>
                    <td>
                        <a class="btn btn-sm btn-success" href="single.php?id=<?php echo $row['id'] ?>">View</a>
                        <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
</div>


</body>

</html>