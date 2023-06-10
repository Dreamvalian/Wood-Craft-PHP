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
        <h4 class="product-price"><?php echo "Rp" . " " . $row['product_price']; ?></h4>
        </hr>
        <h5 class="product-detail">Detail</h5>
        <p class="product-description"><?php echo $row['product_description']; ?></p>
        <hr>
        <h5>Model</h5>
        <div class="product-model">
          <label>
            <input type="radio" name="test" value="small" checked>
            <img src="https://via.placeholder.com/40x60/0bf/fff&text=A" alt="Option 1">
          </label>

          <label>
            <input type="radio" name="test" value="big">
            <img src="https://via.placeholder.com/40x60/b0f/fff&text=B" alt="Option 2">
          </label>
        </div>

        <h5 class="product-custom">Custom Model</h5>
        <textarea class="product-custom-model" name="product-custom-model" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="add-to-cart">
        <div class="cart-content">
          <h5>Organize Order</h5>
          <div class="input-wrapper">
            <button id="minus-btn">-</button>
            <input type="number" id="range-input" min="0" max="100" step="1" value="50">
            <button id="plus-btn">+</button>
          </div>
        </div>
        <div class="cart-stock">
          <h5>Stock: </h5>
          <h5>Sub Total: </h5>
          </hr>
          <button id="add-to-cart-btn">Add to Cart</button>
          <button id="add-to-cart-btn">Buy Now</button>
        </div>
    </section>
  <?php } ?>
</body>

</html>