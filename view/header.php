<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QQ SHOP</title>
    <link rel="stylesheet" href="<?= BASE_URL?>view/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <div class="boxcenter">

        <header>
            <div class="logo">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="box_search">
                <form action="index.php?act=sanphamsearch" method="post">
                    <input type="text" name="keyword" placeholder="Tìm kiếm" />
                    <!-- <input type="button" value="Tìm kiếm" name="kiem"> -->
                    <button type='submit' class="icon" style="border:none;"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <!-- <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span> -->
                </form>
            </div>
<!--  -->
            <div class="box_right">
                <div class="box_right-taikhoan">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <ul>
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                                if($role==1){
                                    echo'
                                        
                                        <li class="dropdown">
                                            <a class="dropbtn" style="text-decoration: none; color: black;" href="index.php?act=dangnhap">'.$user_name.'</a>
                                                <div class="dropdown-content">
                                                    <a href="index.php?act=edituser">Thông tin Tài khoản</a>
                                                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                                    <a href="admin/index.php">Vào trang quản trị</a>
                                                    <a href="index.php?act=thoat">Đăng xuất</a>
                                                </div>
                                        </li>
                                    ';
                                }else{
                                    echo'
                                        
                                        <li class="dropdown">
                                            <a class="dropbtn" style="text-decoration: none; color: black;" href="index.php?act=dangnhap">'.$user_name.'</a>
                                                <div class="dropdown-content">
                                                    <a href="index.php?act=edituser">Thông tin Tài khoản</a>
                                                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                                    <a href="index.php?act=thoat">Đăng xuất</a>
                                                </div>
                                        </li>
                                    ';
                                }
                            }else{
                                echo '
                                    <li class="dropdown">
                                        <a class="dropbtn" style="text-decoration: none; color: black;" href="index.php?act=dangnhap">Tài khoản</a>
                                ';
                            }
                        
                        ?>
                    </ul>
                </div>
                <div class="box_right-giohang">
                    <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
                    <p><a style="text-decoration: none; color: black;" href="index.php?act=viewcart">Giỏ hàng</a></p>
                </div>
            </div>
<!--  -->

        </header>
        <nav>
            <ul>
                <li><a href="index.php?act=home">TRANG CHỦ</a></li>
                <li><a href="index.php?act=gioithieu">GIỚI THIỆU</a></li>
                <li><a href="index.php?act=sanphamsearch">SẢN PHẨM</a></li>
                <li><a href="index.php?act=lienhe">LIÊN HỆ</a></li>
            </ul>
        </nav>