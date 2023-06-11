<?php
session_start();

@include('./components/Header.php');
include('server/connection.php');

$order_id = $_GET['order_id'];

$q_order_items = "SELECT * FROM item_pesanan WHERE order_id LIKE ?";
$stmt_order_items = $conn->prepare($q_order_items);
$stmt_order_items->bind_param('s', $order_id);
$stmt_order_items->execute();

$order_items = $stmt_order_items->get_result();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/order-detail.css" />
  <link rel="stylesheet" href="/dist/output.css">

  <title>Woodcraft - Order Detail</title>
</head>

<body>
  <div class="breadcrumb">
    <a href="home.php">Home</a> >
    <a href="profile.php">Profile</a> >
    <span>order Detail</span>
  </div>
  <section class="order-detail">
    <h2>Order Details</h2>
    <div class="detail-container">
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($order_items as $item) { ?>
            <tr>
              <td><img src="assets/images/<?php echo $item['product_image'] ?>" alt="<?php echo $item['product_image'] ?>" style="width: 128; height:128;"></td>
              <td><?php echo $item['product_name'] ?></td>
              <td><?php echo $item['product_model'] ?></td>
              <td><?php echo $item['product_price'] ?></td>
              <td><?php echo $item['quantity'] ?></td>
              <td><?php echo $item['order_date'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>

</body>

<?php

@include('./components/Footer.php')

?>

</html>