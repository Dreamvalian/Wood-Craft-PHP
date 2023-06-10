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
  <section class="checkout">
    <form action="input">
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      <label for="address">Address</label>
      <input type="text" name="address" id="address">
      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone">
    </form>
    <div class="place-order-card">
      <span>Product</span>
      <span>Price</span>
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