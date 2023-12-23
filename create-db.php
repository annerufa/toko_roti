<?php
require "koneksi.php";

$sql = "CREATE DATABASE bakery";

if (mysqli_query($conn, $sql)) {
    echo "db bakery berhasil dibuat";
}
?>
