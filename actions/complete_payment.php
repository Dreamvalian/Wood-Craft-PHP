<?php
session_start();
include("../server/connection.php");

if (isset($_GET['transaction_id']) && isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    $payment_status = "Paid";

    $user_id = $_SESSION['user_id'];
    $payment_date = date("Y-m-d");

    $query_change_payment_status = "UPDATE pemesanan SET payment_status = ? WHERE order_id LIKE ?";

    $stmt_change_payment_status = $conn->prepare($query_change_payment_status);
    $stmt_change_payment_status->bind_param('ss', $payment_status, $order_id);
    $stmt_change_payment_status->execute();

    // $query_transaction_id = "SELECT * FROM transaksi";
    // $stmt_transaction_id = $conn->prepare($query_transaction_id);
    // $stmt_transaction_id->execute();
    // $stmt_transaction_id->store_result();

    // $transaction_id = 'TRANS-' . $stmt_transaction_id->num_rows() + 1;
    $transaction_id = $_GET['transaction_id'];

    $query_save_payment = "INSERT INTO transaksi (transaksi_id, order_id, payment_date) VALUES (?, ?, ?)";

    $stmt_save_payment = $conn->prepare($query_save_payment);
    $stmt_save_payment->bind_param('sss', $transaction_id, $order_id, $payment_date);
    $stmt_save_payment->execute();

    header('location: ../profile.php?payment_message=Payment successful, thanks for shopping with us');
} else {
    echo '<script>alert("Something went wrong, try again later");
        window.location.href = "../payment.php";
        </script>';
    exit;
}
