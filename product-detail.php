<?php

include('server/connection.php');
@include('./components/Header.php');
$product_id = $_GET['product_id'];

$query_product = "SELECT product_id, jenis_kayu, product_price, product_description, stok, product_image FROM kayu WHERE product_id = ?";
$stmt_product = $conn->prepare($query_product);
$stmt_product->bind_param('s', $product_id);
$stmt_product->execute();

$product = $stmt_product->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/components/header.css">
  <link rel="stylesheet" href="./styles/product-detail.css">
  <link rel="stylesheet" href="./styles/components/footer.css" />
  <link rel="stylesheet" href="/dist/output.css">
  <title>Woodcraft - Product Details</title>
</head>

<body>
  <?php while ($row = $product->fetch_assoc()) { ?>
    <section class="detail">
      <img class="product-image" src="./assets/images/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image']; ?>"></img>
      <div class="product-details">
        <h2 class="product-title"><?php echo $row['jenis_kayu']; ?></h2>
        <h4 class="product-price"><?php echo "Rp." . " " . $row['product_price']; ?></h4>
        </hr>
        <h5 class="product-detail">Detail</h5>
        <p class="product-description"><?php echo $row['product_description']; ?></p>
        <hr>
        <form action="cart.php" method="post">
          <h5>Model</h5>
          <div class="product-model">
            <label>
              <input type="radio" name="product_model" value="1 pcs Lemari 2 pintu" checked>
              <img src="assets/images/lemari.jpg" alt="Option 1" style="width: 128; height:128;">
            </label>

            <label>
              <input type="radio" name="product_model" value="1 pcs Meja 3x2 meter">
              <img src="assets/images/meja.jpg" alt="Option 2" style="width: 128; height:128;">
            </label>

            <label>
              <input type="radio" name="product_model" value="2 pcs Kursi Meja Makan">
              <img src="assets/images/kursi.jpg" alt="Option 2" style="width: 128; height:128;">
            </label>
          </div>

          <h5 class="product-custom">Custom Model</h5>
          <textarea class="product-custom-model" name="product_custom_model" id="" cols="30" rows="10"></textarea>
      </div>

      <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
      <input type="hidden" name="product_image" value="<?php echo $row['product_image'] ?>">
      <input type="hidden" name="product_name" value="<?php echo $row['jenis_kayu'] ?>">
      <input type="hidden" name="product_price" value="<?php echo $row['product_price'] ?>">
      <input type="hidden" name="product_description" value="<?php echo $row['product_description'] ?>">

      <div class="add-to-cart">
        <div class="cart-content">
          <h5>Organize Order</h5>
          <div class="input-wrapper">
            <button id="minus-btn">-</button>

            <input type="number" id="range-input" name="order_quantity" min="0" max="100" step="1" value="50">
            <button id="plus-btn">+</button>
          </div>
        </div>
        <div class="cart-stock">
          <h5>Stock: <?php echo $row['stok'] ?></h5>

          <!-- <h5>Sub Total: </h5> -->
          </hr>
          <button id="add-to-cart-btn" type="submit" name="add_to_cart">Add to Cart</button>
          </form>
          <button id="add-to-cart-btn">Buy Now</button>
        </div>

    </section>
  <?php } ?>
</body>

</html>