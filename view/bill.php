<div class="boxcontent-thanhtoan">

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
            <div class="form-signin1">
                <div class="row1">
                    Họ tên
                    <input type="text" name="fullname" value="<?= $name ?>" placeholder="Vui lòng nhập họ tên">
                </div>
                <div class="row1">
                    Địa chỉ
                    <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ">
                </div>
                <div class="row1">
                    Số điện thoại
                    <input type="text" name="phone" value="<?= $phone ?>" placeholder="Vui lòng nhập số điện thoại">
                </div>
                <div class="row1">
                    Phương thức thanh toán
                    <div class="payment">
                        <input type="radio" name="payment" value="1" id="" seleted>Trả tiền khi nhận hàng <br> <br>
                        <input type="radio" name="payment" value="2" id="">Chuyển khoản ngân hàng <br> <br>
                        <input type="radio" name="payment" value="3" id="">Thanh toán online <br> 
                    </div>
                </div>
                
            </div>
            <div class="box-giohang">
            
                <table>
                    <tr>
                        <th>SẢN PHẨM</th>
                        <th></th>
                        <th>GIÁ</th>
                        <th>SỐ LƯỢNG</th>
                        <th>TỔNG TIỀN</th>
                        <th></th>
                    </tr>
                    <?php
                        $i = 0;
                        $tt = 0;
                        $tongtien = 0;
                        foreach($_SESSION['mycart'] as $index => $cart){
                            $tongtien = $cart['price'] * $cart['quantity'];
                            $tt ;
                            echo '
                                <tr>
                                    <td style="display: flex; align-items: center">
                                        <img src="uploads/'.$cart['img'].'"
                                            style="width: 171px; height: 177px" alt="" />
                                    </td>
                                    <td>'.$cart['name'].'</td>
                                    <td>
                                        <p><span>'.$cart['price'].'</span><sup>đ</sup></p>
                                    </td>
                                    <td>
                                        <p>
                                            <span>'.$cart['quantity'].'</span>
                                        </p>
                                        
                                    </td>
                                    <td>
                                        <p style="font-weight: bold">
                                            <span>'.$tongtien.'</span><sup>đ</sup>
                                        </p>
                                    </td>
                                </tr>
                            ';
                            
                        }
                    ?>
                    
                    
                </table>
                <div class="thanhtien">
                    <?php
                        $tt = 0;
                        $tongtien = 0;
                        foreach($_SESSION['mycart'] as $index => $cart){
                            $tongtien = $cart['price'] * $cart['quantity'];
                            $tt += $tongtien;
                            
                        }
                        echo '
                            <p style="font-weight: bold;"><span>Thành tiền: '.$tt.'</span></p>   
                        ';
                    ?>
                    <!-- <p style="font-weight: bold;"><span>Thành tiền:</span></p> -->
                </div>
            </div>
            
            <div class="button2">
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
        </form>
        <span class="thongbao"><?= isset($thongbao)?$thongbao:""; ?></span>
</div>