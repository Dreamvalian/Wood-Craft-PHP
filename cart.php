<?php

@include('../components/Header.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/cart.css" />
  <link rel="stylesheet" href="./styles/components/header.css" />
  <title>Woodcraft - Cart</title>
</head>

<body>
  <section class="cart">
    <h1>Product Cart</h1>
    <div class="container">
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
        <img src="product3.jpg" alt="Product 3">
        <div class="cart-item-details">
          <h3 class="cart-item-title">Product 3</h3>
          <p class="cart-item-price">$24.99</p>
        </div>
      </div>
    </div>
  </section>

</body>

</html>