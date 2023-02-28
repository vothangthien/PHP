<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "PHP";

// Tạo kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}
?>