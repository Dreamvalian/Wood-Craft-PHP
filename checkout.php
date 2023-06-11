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
  <div class="breadcrumb">
    <a href="home.php">Home</a> >
    <a href="cart.php">Cart</a> >
    <span>Checkout</span>
  </div>
  <section class="checkout">
    <form action="actions /place_order.php" method="post" class="checkout-container">
      <div class="checkout-form-content">
        <div class="checkout-name">
          <label for="name">Name</label>
          <input type="text" name="user_name" id="name">
        </div>
        <div class="checkout-grid">
          <!-- <div class="checkout-email">
            <label for="email">Email</label>
            <input type="email" name="user_email" id="email">
          </div> -->
          <div class="checkout-phone">
            <label for="phone">Phone</label>
            <input type="text" name="user_phone" id="phone">
          </div>
        </div>
        <div class="checkout-address">
          <label for="address">Address</label>
          <textarea type="text" name="user_address" id="address" cols="30" rows="10"></textarea>
        </div>
      </div>


      <div class="place-order-card">
        <h5>Product</h5>
        <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
          <span><?php echo $value['quantity'] . "x    " . $value['product_name'] ?></span>
        <?php } ?>

        <h5>Price</h5>
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