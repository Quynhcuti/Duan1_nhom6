<div class="boxcontent">
        <form action="index.php?act=billcomfirm" method="post">
            <?php
                if(isset($_SESSION['user'])){
                    $name = $_SESSION['user']['fullname'];
                    $phone = $_SESSION['user']['phone'];
                }else{
                    $name = "";
                    $phone = "";
                }
                
            ?>
            <!-- <h3>ID bill là <?= $billid ?></h3> -->
            <div class="form-signin">
                <div class="row">
                    Họ tên
                    <input type="text" name="fullname" value="<?= $name ?>" placeholder="Vui lòng nhập họ tên">
                </div>
                <div class="row">
                    Địa chỉ
                    <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ">
                </div>
                <div class="row">
                    Số điện thoại
                    <input type="text" name="phone" value="<?= $phone ?>" placeholder="Vui lòng nhập số điện thoại">
                </div>
                <div class="row">
                    Phương thức thanh toán
                    <div class="payment">
                        <input type="radio" name="payment" value="1" id="" seleted>Trả tiền khi nhận hàng
                        <input type="radio" name="payment" value="2" id="">Chuyển khoản ngân hàng
                        <input type="radio" name="payment" value="3" id="">Thanh toán online
                    </div>
                </div>
                
            </div>
            <table border >
                <tr>
                    <th>Hinh</th>
                    <th>Ten san pham</th>
                    <th>Don gia</th>
                    <th>so luong</th>
                    <th>tong tien</th>
                    <th>Thao tac</th>
                </tr>
                <?php
                    echo '<pre>';
                    print_r($_SESSION['mycart']);
                    echo '</pre>';
                ?>
                
                
                <?php
                    $i = 0;
                    $tt = 0;
                    $tongtien = 0;
                    foreach($_SESSION['mycart'] as $index => $cart){
                        $price = $cart['price'];
                        $tongtien = $cart['price'] * $cart['quantity'];
                        // $delcart = "index.php?act=delcart&index=".$index;
                        $tt += $tongtien;
                        echo '
                            <tr>
                                <td><img src="uploads/'.$cart['img'].'" alt="" width="300"></td>
                                <td>'.$cart['name'].'</td>
                                <td>'.$cart['price'].'</td>
                                <td>'.$cart['quantity'].'</td>
                                <td>'.$tongtien.'</td>
                                
                                
                            </tr>
                        ';
                        $i++;
                    }
                    echo '
                        <tr>
                            <td>Tong tien</td>
                            <td>'.$tt.'</td>
                        </tr>
                    ';
                
                ?>     
                <div class="button">
                    <input type="hidden" name="tong" value="<?= $tt ?>">
                    <?php
                    
                        foreach($_SESSION['mycart'] as $key => $cart){
                            echo '
                                <input type="hidden" name="product['.$key.'][product_id]" value="'.$cart['id'].'">
                            ';
                        }
                    ?>
                    <!-- <input type="text" name="product_id" value=""> -->
                    <input type="submit" value="Đặt hàng" name="dathang">
                </div>
            </table>

        </form>
        <span class="thongbao"><?= isset($thongbao)?$thongbao:""; ?></span>
    </div>