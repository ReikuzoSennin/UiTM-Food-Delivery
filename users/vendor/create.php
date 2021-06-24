<?php include('../../server.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../css/styling.css">

        <?php 
        $shopID = $_SESSION['shop']['shopID']; 
        $query = "SELECT * FROM shops WHERE shopID=$shopID";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
        <title>Vendor Section - Add Product</title>
    </head>

    <body>
        <!-- Header -->
        <?php include('header.php'); ?>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="content" id="market">
                <form action="" method="POST" enctype="multipart/form-data">
                    <h2 class="form-title">Upload Photo(RENAME IMAGE FIRST)</h2>
                    <input type="file" name="image" />
                    <input type="hidden" name="upload-dir" value="products/"><br><br>
                    <button class="btn btn-big clickable" name="upload-image">Upload Image</button>
                </form>
                <form action="create.php" method="post">
                    <h2 class="page-title">Add Product</h2>
                    <div>
                        <label>Product Name</label>
                        <input type="text" name="item-name"
                            class="text-input">
                    </div>
                    <div>
                        <label>Product Price</label>
                        <input type="text" name="item-price"
                            class="text-input">
                    </div>
                    <div>
                        <label for="item-img">Image: </label>
                        <select name="item-img">
                        <?php
                        $directory = "../../images/products/";
                        $images = glob("$directory*.{png,jpg,jpeg}", GLOB_BRACE);
                        foreach($images as $image) {
                            ?>
                            <option value="<?php echo basename($image); ?>"><?php echo basename($image); ?></option><?php
                        }
                        ?>
                        </select>
                    </div>
                        <input type="hidden" name="shop-id" value="<?php echo $row['shopID']; ?>"><br>
                        <button class="btn btn-big clickable" name="add-btn">Add Product</button>
                </form>
        </div>
        <!-- // Admin Content -->

        <!-- Footer -->
    <?php include('../footer.php'); ?>
    </body>
</html>