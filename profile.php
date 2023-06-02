<?php

@include('./components/Header.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="./styles/pages.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
  <main>
    <section class="profile">
      <div class="profile-avatar">
        <img src="avatar.jpg" alt="User Avatar">
      </div>
      <div class="profile-info">
        <h1>User Name</h1>
        <p>Email: user@example.com</p>
        <p>Location: City, Country</p>
        <p>Member Since: January 1, 2023</p>
        <p>Bio: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
    </section>

    <section class="transaction-history">
      <h2>Transaction History</h2>
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>May 10, 2023</td>
            <td>Payment for item A</td>
            <td>$50.00</td>
          </tr>
          <tr>
            <td>April 25, 2023</td>
            <td>Payment for item B</td>
            <td>$30.00</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

</body>
<?php

@include('./components/Footer.php')

?>

</html>