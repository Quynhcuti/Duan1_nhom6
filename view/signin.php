<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
</head>
<body>
    <div class="boxcontent">
        <form action="index.php?act=dangnhap" method="post">
            <div class="form-signin">
                <div class="row1">
                    Tài khoản
                    <input type="text" name="user_name" placeholder="Vui lòng nhập tài khoản">
                </div>
                <div class="row1">
                    Mật khẩu
                    <input type="password" name="pass">
                </div>
                <div class="button1">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                    <a href="index.php?act=dangky">Đăng ký</a>
                </div>
            </div>
        </form>
    </div>

</body>
</html>