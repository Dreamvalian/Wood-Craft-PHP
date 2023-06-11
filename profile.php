<?php
session_start();
@include('./components/Header.php');
include('server/connection.php');

$user_id = $_SESSION['user_id'];

$q_order_history = "SELECT * FROM pemesanan WHERE user_id LIKE ? ORDER BY order_date DESC";
$stmt_order_history = $conn->prepare($q_order_history);
$stmt_order_history->bind_param('s', $user_id);
$stmt_order_history->execute();

$order_history = $stmt_order_history->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/profile.css">
  <title>User Profile</title>
</head>

<body>
  <main>
    <section class="profile">
      <div class="profile-avatar">
        <img src="./assets/avatar.webp" alt="User Avatar">
      </div>
      <div class="profile-info">
        <h1><?php echo $_SESSION['user_name'] ?></h1>
        <p>Email: <?php echo $_SESSION['user_email'] ?></p>
        <p>Location: <?php echo $_SESSION['user_address'] ?></p>
        <p>Member Since: <?php echo $_SESSION['member_date'] ?></p>
      </div>
    </section>

    <section class="transaction-history">
      <h2>Transaction History</h2>
      <table>
        <thead>
          <tr>
            <th>Order Id</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($order_history as $order) { ?>
            <tr>
              <td><?php echo $order['order_id'] ?></td>
              <td><?php echo $order['order_date'] ?></td>
              <td>Rp. <?php echo $order['grandtotal'] ?></td>
              <td><?php echo $order['payment_status'] ?></td>
              <td><a href="./order-detail.php?order_id=<?php echo $order['order_id'] ?>"><button type="submit" name="detail">Details</button></a></td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </section>
  </main>

</body>
<?php

@include('./components/Footer.php')

?>

</html>