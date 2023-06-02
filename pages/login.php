<?php
session_start();
include("../server/connection.php");

if (isset($_SESSION['logged_in'])) {
  header('location: ../index.php');
  exit;
} else {
  if (isset($_POST['btn_login'])) {
    $login_username = $_POST['username'];
    //Nanti tambahin function md5() buat password biar dienkripsi
    $login_password = $_POST['password'];

    $query_login = "SELECT user_id, username, email, password, alamat, role FROM user WHERE username = ? AND password = ? LIMIT 1";

    $stmt_login = $conn->prepare($query_login);
    $stmt_login->bind_param('ss', $login_username, $login_password);

    if ($stmt_login->execute()) {
      $stmt_login->bind_result($user_id, $user_name, $user_email, $user_password, $user_address, $user_role);
      $stmt_login->store_result();

      if ($stmt_login->num_rows() == 1) {
        $stmt_login->fetch();

        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_address'] = $user_address;
        $_SESSION['user_role'] = $user_role;
        $_SESSION['logged_in'] = true;

        header('location: ../index.php?message=Logged in successfully');
      } else {
        header('location: login.php?message=Account does not match our database');
      }
    } else {
      header('location: login.php?message=Something went wrong, try again later');
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Woodcraft - Login</title>
  <link rel="stylesheet" href="../styles/pages.css">
</head>

<body>
  <div class="container">
    <form class="form" method="post" action="login.php">
      <h2>Login</h2>
      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" required>
      <button type="submit" name="btn_login">Log in</button>
      <p class="register-link">Don't have an account? <a href="register.php">Register</a></p>
    </form>
  </div>
</body>

</html>