<?php

@include('./components/Header.php')

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
  <section class="detail">
    <div class="product-image"></div>
    <div class="product-details">
      <h2 class="product-title">Example Title</h2>
      <h4 class="product-price">Rp.400.000</h4>
      <hr>
      <h5 class="product-detail">Detail</h5>
      <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Fuga alias autem temporibus officiis in ipsum magnam reiciendis laborum soluta tempora
        voluptatibus mollitia unde, maxime ad ipsa praesentium repellat dolor! Distinctio.
      </p>
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
    </div>
  </section>
</body>

</html>