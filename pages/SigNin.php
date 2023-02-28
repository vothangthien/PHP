<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="../api/SigNin.php" method="POST">
        <label for="username">Tên đăng nhập:</label>

        <input type="text" id="username" name="username"><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password"><br><br>
      <p>
         Bạn chưa có tài khoản 
         <a href="index.php?page=Register">Click</a>
      </p>

        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>