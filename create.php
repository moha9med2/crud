<?php include 'header.php' ?>

<div class="container pt-5">
    <div class="m-auto w-50">
        <form action="data.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" class="form-control my-3" placeholder="title">
            <input type="text" name="description" class="form-control my-3" placeholder="description">
            <input type="text" name="price" class="form-control my-3" placeholder="price">
            <input type="file" name="image" class="form-control my-3" placeholder="image">
            <button type="submit" name="submit" class="btn btn-dark">send</button>
        </form>
    </div>
</div>


</body>

</html>