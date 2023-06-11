<?php
session_start();
include './components/Header.php';

if (isset($_POST['add_to_cart'])) {
  if (isset($_SESSION['cart'])) {
    $product_array_ids = array_column($_SESSION['cart'], "product_id");

    if (!in_array($_POST['product_id'], $product_array_ids)) {
      $product_id = $_POST['product_id'];
      $product_model = $_POST['product_model'] . " " . $_POST['product_custom_model'];

      $product_array = array(
        'product_id' => $_POST['product_id'],
        'product_image' => $_POST['product_image'],
        'product_name' => $_POST['product_name'],
        'product_model' => $product_model,
        'product_description' => $_POST['product_description'],
        'product_price' => $_POST['product_price'],
        'quantity' => $_POST['order_quantity']
      );

      $_SESSION['cart'][$product_id] = $product_array;
    } else {
      echo '<script>alert("Product was already added to the cart")</script>';
    }
  } else {
    $model = $_POST['product_model'] . " " . $_POST['product_custom_model'];

    if (strlen(trim($string)) < 1) {
      $model = 'Kayu mentah';
    }

    $product_id = $_POST['product_id'];
    $product_image = $_POST['product_image'];
    $product_name = $_POST['product_name'];
    $product_model = $model;
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['order_quantity'];

    $product_array = array(
      'product_id' => $_POST['product_id'],
      'product_image' => $_POST['product_image'],
      'product_name' => $_POST['product_name'],
      'product_model' => $product_model,
      'product_description' => $_POST['product_description'],
      'product_price' => $_POST['product_price'],
      'quantity' => $_POST['order_quantity']
    );

    $_SESSION['cart'][$product_id] = $product_array;
  }

  calculateTotalCart();
} elseif (isset($_POST['remove_product'])) {
  $product_id = $_POST['product_id'];

  unset($_SESSION['cart'][$product_id]);

  calculateTotalCart();
}

function calculateTotalCart()
{
  $total_price = 0;
  $total_quantity = 0;

  foreach ($_SESSION['cart'] as $key => $value) {
    $product = $_SESSION['cart'][$key];
    $price = $product['product_price'];
    $quantity = $product['quantity'];

    $total_price = $total_price + ($price * $quantity);
    $total_quantity = $total_quantity + $quantity;
  }

  $_SESSION['total'] = $total_price;
  $_SESSION['quantity'] = $total_quantity;
}

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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/components/header.css" />
  <link rel="stylesheet" href="/dist/output.css">
  <link rel="stylesheet" href="./styles/cart.css" />
  <title>Woodcraft - Cart</title>
</head>

<body>
  <h2>Product Cart</h2>
  <section class="cart">
    <div class="cart-container">
      <?php if (isset($_SESSION['cart'])) { ?>
        <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
          <div class="cart-items">
            <img src="assets/images/<?php echo $value['product_image'] ?>" alt="<?php echo $value['product_image'] ?>">
            <div class="cart-item-details">
              <h3 class="cart-item-title"><?php echo $value['product_name'] ?></h3>
              <p class="cart-item-price">Rp. <?php echo $value['product_price'] ?></p>
              <p class="cart-item-price">Quantity: <?php echo $value['quantity'] ?></p>
              <form method="POST" action="cart.php">
                <td>
                  <input type="hidden" name="product_id" value="<?php echo $value['product_id'] ?>">
                  <button type="submit" class="button" name="remove_product"><i class="fa fa-trash">Remove</i></button>
                </td>
              </form>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
    <div class="cart-summary">
      <h5>Order Summary</h5>
      <div class="cart-subtotal">
        <!-- <h5>Sub Total:</h5> -->
      </div>

      <p>Total Quantity: <?php if (isset($_SESSION['cart'])) {
                            echo $_SESSION['quantity'];
                          } ?>
      </p>
      <hr>


      <p>Total Price: <?php if (isset($_SESSION['cart'])) {
                        echo "Rp. " . $_SESSION['total'];
                      } ?>
      </p>
      <form action="checkout.php" method="post">
        <button id="add-to-cart-btn" name="checkout">Buy Now</button>
      </form>
    </div>
  </section>
</body>

</html>