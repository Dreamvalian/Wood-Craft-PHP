<?php
include('../server/connection.php');

$product_id = $_GET["product_id"];

$query = "DELETE FROM kayu WHERE product_id = '$product_id'";

if (mysqli_query($conn, $query)) {
    echo "<script> alert('Produk berhasil di hapus.');
        window.location.href='tables.php';
        </script>";
}
die();

?>