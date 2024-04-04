<article>
    <div class="box-giohang">
        <h2>Giỏ hàng của bạn</h2>
        <table>
            <tr>
                <th>SẢN PHẨM</th>
                <th></th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>TẠM TÍNH</th>
                <th></th>
            </tr>
            <?php
                $i = 0;
                $tt = 0;
                $tongtien = 0;
                foreach($_SESSION['mycart'] as $index => $cart){
                    $tongtien = $cart['price'] * $cart['quantity'];
                    $delcart = "index.php?act=delcart&index=".$index;
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
                            <td style="cursor: pointer; font-size: 12px"><a href="'.$delcart.'"><input type="button" value="xóa"></a></td>
                        </tr>
                    ';
                    
                }
            ?>
            
            
        </table>
        <button class="button-xemthemsp">
            <a style="text-decoration: none; color:black;" href="index.php?act=sanphamsearch"><i class="fa-solid fa-arrow-left"></i> Tiếp tục xem sản phẩm</a>
        </button>
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

    <a href="index.php?act=bill"><button class="button-thanhtoan">Thanh toán</button></a>
    
</article>