<?php
    include('../server/connection.php');
    $path = "./assets/images" . basename($_FILES['image']['name']);

    if (isset($_POST['save_btn'])) {
    $product_id = $_GET['product_id'];
    $product_name= $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $stok = $_POST['stok'];
    $image = $_FILES['image']['name'];   
    move_uploaded_file($_FILES['image']['tmp_name'], $path);

    $query = "UPDATE kayu SET jenis_kayu = '$product_name',product_price='$product_price',product_description='$product_description',stok='$stok' ,product_image = '$image' WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    header('location: tables.php');
}
?>