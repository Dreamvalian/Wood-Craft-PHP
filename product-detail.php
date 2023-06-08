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
        <h5 class="product-model">Model</h5>
        <input class="product-model" type="radio" name="product-model" id="product-model">
        <h5 class="product-custom">Custom Model</h5>
        <textarea class="product-custom-model" name="product-custom-model" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="add-to-cart">
        <h5></h5>
        <button id="minus-btn">-</button>
        <input type="range" id="range-input" min="0" max="100" step="1" value="50">
        <button id="plus-btn">+</button>
        <h5>Stock: <?php echo $row['stok'] ?></h5>
        <h5>Sub Total: </h5>
        </hr>
        <button id="add-to-cart-btn">Add to Cart</button>
        <button id="add-to-cart-btn">Buy Now</button>
      </div>
    </section>
  <?php } ?>
</body>

</html>