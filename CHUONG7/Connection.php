<?php
// 1. Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlibanhang";

// Kết nối database quanlibanhang
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Thiết lập tiếng Việt
mysqli_set_charset($conn, "utf8");



?>