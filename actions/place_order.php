<?php

session_start();
include("../server/connection.php");

if (isset($_POST['place_order'])) {
    $q_order_id = "SELECT * FROM pemesanan";
    $stmt_order_id = $conn->prepare($q_order_id);
    $stmt_order_id->execute();
    $stmt_order_id->store_result();

    $order_id = 'OD' . $stmt_order_id->num_rows() + 1;
    $user_id = $_SESSION['user_id'];
    $user_name = $_POST['user_name'];
    $user_address = $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $grand_total = $_SESSION['total'];
    $order_date = date('Y-m-d');
    $payment_status = 'Unpaid';

    $q_place_order = "INSERT INTO pemesanan (order_id, user_id, user_name, user_address, 
    user_phone, grandtotal, order_date, payment_status) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt_place_order = $conn->prepare($q_place_order);

    $stmt_place_order->bind_param(
        'sssssdss',
        $order_id,
        $user_id,
        $user_name,
        $user_address,
        $user_phone,
        $grand_total,
        $order_date,
        $payment_status
    );

    $stmt_status = $stmt_place_order->execute();

    if (!$stmt_status) {
        echo '<script>alert("Something went wrong, try again later");
        window.location.href = "../checkout.php";
        </script>';
        exit;
    }



    foreach ($_SESSION['cart'] as $key => $value) {
        $q_item_id = "SELECT * FROM item_pesanan";
        $stmt_item_id = $conn->prepare($q_item_id);
        $stmt_item_id->execute();
        $stmt_item_id->store_result();

        $item_id = 'IT' . $stmt_item_id->num_rows() + 1;

        $product = $_SESSION['cart'][$key];
        $product_id = $product['product_id'];
        $product_name = $product['product_name'];
        $product_image = $product['product_image'];
        $product_model = $product['product_model'];
        $product_price = $product['product_price'];
        $product_quantity = $product['quantity'];

        $q_insert_order_item = "INSERT INTO item_pesanan (item_id, order_id, user_id, product_id, product_name, 
        product_image, product_model, product_price, quantity, order_date)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt_insert_item = $conn->prepare($q_insert_order_item);
        $stmt_insert_item->bind_param(
            'sssssssdis',
            $item_id,
            $order_id,
            $user_id,
            $product_id,
            $product_name,
            $product_image,
            $product_model,
            $product_price,
            $product_quantity,
            $order_date
        );
        $stmt_insert_item->execute();

        $q_update_stock = "UPDATE kayu SET stok = stok - ? WHERE product_id = ?";
        $stmt_update_stock = $conn->prepare($q_update_stock);
        $stmt_update_stock->bind_param('is', $product_quantity, $product_id);
        $stmt_update_stock->execute();
    }

    unset($_SESSION['cart']);

    $_SESSION['order_id'] = $order_id;

    header('location: ../payment.php?order_status="Order placed successfully"');
}
