<?php
// Kết nối đến MySQL
require_once '../config/connection.php';

// Lấy thông tin đăng ký từ $_POST
$username = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone=$_POST['phone'];

// Kiểm tra tính hợp lệ của thông tin đăng ký
if (empty($username) || empty($password) || empty($email) || empty($phone)) {
    echo "Vui lòng nhập đầy đủ thông tin đăng ký";
} else {
    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    $password = md5($password);

    // Lưu thông tin đăng ký vào cơ sở dữ liệu
    $sql = "INSERT INTO administration (name, password, email, phone) VALUES ('$username', '$password', '$email', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo "Đăng ký thành công" ;

        header('Location:http://localhost/index.php?page=Home');

    } else {
        
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>