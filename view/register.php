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
        <form action="index.php?act=dangky" method="post">
            <div class="form-signin">
                <div class="row1">
                    Họ tên
                    <input type="text" name="fullname" placeholder="Vui lòng nhập họ tên">
                    <span style="color: red;"><?= $errFullname  ?></span>
                    <span style="color: red;"><?= isset($thongbao)?$thongbao:""; ?></span>
                </div>
                <div class="row1">
                    Tài khoản
                    <input type="text" name="username" placeholder="Vui lòng nhập tài khoản">
                    <span style="color: red;"><?= $errUsername ?></span>

                </div>
                <div class="row1">
                    Mật khẩu
                    <input type="password" name="password"placeholder="Vui lòng nhập mật khẩu">
                    <span style="color: red;"><?= $errPassword  ?></span>

                </div>
                <div class="row1">
                    Số điện thoại
                    <input type="text" name="phone" placeholder="Vui lòng nhập số điện thoại">
                    <span style="color: red;"><?= $errPhone  ?></span>

                </div>
                <div class="button2">
                    <input type="submit" value="Đăng kí" name="dangki">
                </div>
            </div>
        </form>
    </div>

</body>
</html>