<?php
session_start();
include("../server/connection.php");

if (isset($_SESSION['logged_in'])) {
  header('location: ../index.php');
  exit;
} else {
  if (isset($_POST['btn_login'])) {
    $login_username = $_POST['username'];
    $login_password = md5($_POST['password']);

    $query_login = "SELECT user_id, username, email, password, alamat, member, role FROM user WHERE username = ? AND password = ? LIMIT 1";

    $stmt_login = $conn->prepare($query_login);
    $stmt_login->bind_param('ss', $login_username, $login_password);

    if ($stmt_login->execute()) {
      $stmt_login->bind_result($user_id, $user_name, $user_email, $user_password, $user_address, $member_date, $user_role);
      $stmt_login->store_result();

      if ($stmt_login->num_rows() == 1) {
        $stmt_login->fetch();

        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_address'] = $user_address;
        $_SESSION['member_date'] = $member_date;
        $_SESSION['user_role'] = $user_role;
        $_SESSION['logged_in'] = true;

        if ($user_role == 'admin') {
          header('location: ../admin/index.php?message=Logged in successfully as admin');
        } else {
          header('location: ../index.php?message=Logged in successfully');
        }
      } else {
        header('location: ../pages/login.html?message=Account does not match our database');
      }
    } else {
      header('location: ../pages/login.html?message=Something went wrong, try again later');
    }
  }
}
?>
