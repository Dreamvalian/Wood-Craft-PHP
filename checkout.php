<?php

@include('./components/Header.php')

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
    <form action="input">
      <div class="checkout-name">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="checkout-grid">
        <div class="checkout-email">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="checkout-phone">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone">
        </div>
      </div>
      <div class="checkout-address">
        <label for="address">Address</label>
        <textarea type="text" name="address" id="address" cols="30" rows="10"></textarea>
      </div>
    </form>
    <div class="place-order-card">
      <h5>Product</h5>
      <span>Price: </span>
      <hr>
      <span>Total: </span>
      <button type="submit">Place Order</button>
    </div>
  </section>
</body>

<?php

@include('./components/Footer.php')

?>

</html>