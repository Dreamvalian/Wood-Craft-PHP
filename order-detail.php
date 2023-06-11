<?php

@include('./components/Header.php')

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
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>May 10, 2023</td>
            <td>Payment for item A</td>
            <td>$50.00</td>
            <td>Paid</td>
          </tr>
          <tr>
            <td>April 25, 2023</td>
            <td>Payment for item B</td>
            <td>$30.00</td>
            <td>Unpaid</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</body>

<?php

@include('./components/Footer.php')

?>

</html>