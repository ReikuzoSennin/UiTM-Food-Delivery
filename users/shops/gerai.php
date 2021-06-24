<?php include('../../server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="../../css/styling.css">

  <?php
    $shopID = $_SESSION['shop']['shopID'];

    $query = "SELECT * FROM shops WHERE shopID=$shopID";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
  ?>
  <title><?php echo $row["shopName"]; ?></title>
</head>
<body>
  <!-- Header -->
  <?php include('header.php'); ?>

  <!-- Content -->
  <div class="content">  
    <h2 class="page-title"><?php echo $row["shopName"]; ?></h2> 
    <ul>
    <?php
      $query = "SELECT * FROM item WHERE shopID=$shopID ORDER BY itemID ASC";  
      $result = mysqli_query($con, $query); 
      if(mysqli_num_rows($result) > 0)  {  
        while($row = mysqli_fetch_array($result))  {  
        ?>  
          <form method="post" action="../user/cart.php?action=add&itemID=<?php echo $row["itemID"]; ?>">   
            <li><div class="img-text shop"> 
                  <img src="../../images/products/<?php echo $row["itemImg"]; ?>" height="112px" width="150"/><br />  
                  <h4><?php echo $row["itemName"]; ?></h4>  
                  <h4>RM <?php echo $row["itemPrice"]; ?></h4>  
                  <input type="text" name="quantity" value="1" style="width:50px;"/>  
                  <input type="hidden" name="item_id" value="<?php echo $row["itemID"]; ?>" />  
                  <input type="hidden" name="hidden_name" value="<?php echo $row["itemName"]; ?>" />  
                  <input type="hidden" name="hidden_price" value="<?php echo $row["itemPrice"]; ?>" /> 
                  <button name="add-to-cart">Add To Cart</button>
            </div></li>
          </form>   
        <?php  
        }  
      } else { ?>
        <h3>This Shop Seems Empty...</h3> <?php
      }
      ?>
      </ul>
    </div>

    <!-- Footer -->
    <?php include('../footer.php'); ?>
</body>
</html>