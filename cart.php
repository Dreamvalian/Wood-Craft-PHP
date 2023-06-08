<?php
@include('./components/Header.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/cart.css" />
  <link rel="stylesheet" href="./styles/components/header.css" />
  <link rel="stylesheet" href="/dist/output.css">
  <title>Woodcraft - Cart</title>
</head>

<body>
  <h2>Product Cart</h2>
  <section class="cart">
    <div class="cart-container">
      <div class="cart-items">
        <img src="product1.jpg" alt="Product 1">
        <div class="cart-item-details">
          <h3 class="cart-item-title">Product 1</h3>
          <p class="cart-item-price">$19.99</p>
        </div>
      </div>

      <div class="cart-items">
        <img src="product2.jpg" alt="Product 2">
        <div class="cart-item-details">
          <h3 class="cart-item-title">Product 2</h3>
          <p class="cart-item-price">$29.99</p>
        </div>
      </div>

      <div class="cart-items">
        <img src="product3.jpg" alt="Product 3">
        <div class="cart-item-details">
          <h3 class="cart-item-title">Product 3</h3>
          <p class="cart-item-price">$24.99</p>
        </div>
      </div>

      <div class="cart-items">
        <img src="product4.jpg" alt="Product 4">
        <div class="cart-item-details">
          <h3 class="cart-item-title">Product 4</h3>
          <p class="cart-item-price">$24.99</p>
        </div>
      </div>
    </div>
    <div class="cart-summary">
      <h5>Order Summary</h5>
      <div class="cart-subtotal">
        <h5>Sub Total: </h5>
        <hr>
      </div>
      <h5>Total: </h5>
      <button id="add-to-cart-btn">Buy Now</button>
    </div>
  </section>
</body>

</html>