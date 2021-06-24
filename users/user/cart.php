<?php include('../../server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0c2638ec91.js" crossorigin="anonymous"></script>
    
    <!-- Custom Styles-->
    <link rel="stylesheet" href="../../css/styling.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <title>Cart</title>	
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>
    
    <br><br>
    <div class="admin-content">
        <div class="content" id="market">
            <?php if(!empty($_SESSION["shopping_cart"])) { ?>
            <table width="100%" border="1" style="border-collapse:collapse;">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr><form action="cart.php" method="post">
                <?php
                        $total = 0;
                        $_SESSION["shopping_cart"]=array_filter($_SESSION["shopping_cart"]);
                        $_SESSION["shopping_cart"]=array_values($_SESSION["shopping_cart"]);
                        foreach(($_SESSION["shopping_cart"]) as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value["item_name"]; ?></td>
                        <td><input type="number" name="item-quantity[]" value="<?php echo $value["item_quantity"]; ?>" min="1" max="99" style="width:2rem;" required></td>
                        <td>RM <?php echo $value["item_price"]; ?></td>
                        <?php $price = $value["item_quantity"] * $value["item_price"]; ?>
                        <td>RM <?php echo number_format($price, 2); ?></td>
                        <input type="hidden" name="item-id[]" value="<?php echo $value["item_id"]; ?>">
                        <input type="hidden" name="item-name[]" value="<?php echo $value["item_name"]; ?>">
                        <input type="hidden" name="item-price[]" value="<?php echo $value["item_price"]; ?>">
                        <td><a href="cart.php?action=delete&itemID=<?php echo $value["item_id"]; ?>" style="color: red;">Remove</a></td>
                    </tr>
                    <?php  
                            $total += $price;
                        }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">RM <?php echo number_format($total, 2); ?></td>
                        <td><input type="hidden" name="total-price" value="<?php echo number_format($total, 2); ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right"><button name="update-cart" class="btn btn-big clickable">Update</button></td>
                        <td align="right"><button name="pay-now" class="btn btn-big clickable">Pay Now</button></td>
                        <td></td>
                    </tr>
                    </form>
                    <?php
            } else {?>
                <h3>Your Shopping Cart is empty.. <br>Start Shopping with UiTM Food Delivery!</h3> <?php
            } ?>
            </table>
        </div>
    </div>
    <br><br>

    <!-- Footer -->
    <?php include('../footer.php'); ?>
</body>
</html>