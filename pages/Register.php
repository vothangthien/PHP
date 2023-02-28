<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Trang đăng ký -->
<html>
    <head>
        <title>Đăng ký</title>
    </head>
    <body>
        <h1>Đăng ký</h1>
        <form action="/api/Register.php" method="post">
            <label for="name">Tài khoản:</label>
            <input type="text" id="name" name="name"><br>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password"><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone"><br>


            <input type="submit" value="Đăng ký">
        </form>
    </body>
</html>

</body>
</html>