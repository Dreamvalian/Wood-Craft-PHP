<?php
session_start();

@include('./components/Header.php');

if (empty($_SESSION['cart'])) {
  echo '<script>alert("Your cart is empty, go to our product to shop. Happy Shopping :D");
  window.location.href = "our-product.php";
  </script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/checkout.css">
  <link rel="stylesheet" href="./dist/output.css">
  <title>Woodcraft - Checkout</title>
</head>

<body>
  <section class="checkout">
    <form action="actions/place_order.php" method="post">
      <label for="name">Name</label>
      <input type="text" name="user_name" id="name">
      <label for="address">Address</label>
      <input type="text" name="user_address" id="address">
      <label for="phone">Phone</label>
      <input type="text" name="user_phone" id="phone">


      <div class="place-order-card">
        <span>Product</span>
        <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
          <span><?php echo $value['quantity'] . "x    " . $value['product_name'] ?></span>
        <?php } ?>

        <span>Price</span>
        <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
          <span><?php echo "Rp. " . ($value['quantity'] * $value['product_price']) ?></span>
        <?php } ?>
        <hr>
        <span>Total: Rp. <?php echo $_SESSION['total'] ?></span>
        <button type="submit" name="place_order">Place Order</button>
      </div>
    </form>
  </section>
</body>

<?php

@include('./components/Footer.php')

?>

</html>