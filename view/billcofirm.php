<div class="boxcontent_billconfirm">
    <div class="boxtrai mr">
        <div class="row mb10">
            <div class="boxtitle">CÁM ƠN</div>
            <div class="row boxcontent3" style="text-align: center;">
                <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            </div>
        </div>
        <?php

            if (isset($bill) && is_array($bill)) {
                extract($bill);
                if(isset($_SESSION['user'])){
        ?>
        <div class="row mb10">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row boxcontent3" style="text-align: center;">
                <li class="cler fl mb10">- Mã đơn hàng: <?=$bill['bill_id'];?> -</li> 
                <!-- <li class="fr">- Ngày đặt hàng: <?=$loadonebill['ngaydh']; ?> -</li> -->
                <li class="cler fl mb10">- Giá trị đơn hàng: <?=$bill['total_price'];?> -</li> 
                <li class="fr">- Phương thức thanh toán: <?=($bill['payment']==0)?'Trả tiền khi nhận hàng':(($bill['payment']==1)?'Chuyển khoản ngân hàng':'Thanh toán online');?> -</li>
            </div>
        </div>
        <div class="row mb10">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent3 billform">
                        <table class="row">
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><?=$bill['fullname'];?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?=$bill['address'];?></td>
                            </tr>
                            
                            <tr>
                                <td>Điện thoại</td>
                                <td><?=$bill['phone'];?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="row">
                    <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                    <div class="row boxcontent cart">
                        <table border >
                            <tr>
                                <th>Hinh</th>
                                <th>Ten san pham</th>
                                <th>Don gia</th>
                                <th>so luong</th>
                                <th>tong tien</th>
                                
                            </tr>
                            <?php
                                echo '<pre>';
                                print_r($bill_detail);
                                echo '</pre>';
                                // die();
                            ?>
                            
                            
                            <?php
                                
                                $tt = 0;
                                $tongtien = 0;
                                foreach($bill_detail as $key => $item){
                                    extract($item);
                                    $tongtien = $item['price_detail'] * $item['quantity_detail'];
                                    
                                    $tt ;
                                    echo '
                                        <tr>
                                            <td><img src="uploads/'.$item['image'].'" alt="" width="300"></td>
                                            <td>'.$item['product_name'].'</td>
                                            <td>'.$item['price_detail'].'</td>
                                            <td>'.$item['quantity_detail'].'</td>
                                            <td>'.$tongtien.'</td>
                                        </tr>
                                    ';
                                    
                                }

                                
                            
                            ?>

                    
                        </table>
                </div>
        </div>
        <?php
                
            }else{
        ?>
                <div class="row mb10">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row boxcontent3" style="text-align: center;">
                <li class="cler fl mb10">- Mã đơn hàng: <?=$bill['bill_id'];?> -</li> 
                <!-- <li class="fr">- Ngày đặt hàng: <?=$loadonebill['ngaydh']; ?> -</li> -->
                <li class="cler fl mb10">- Giá trị đơn hàng: <?=$bill['total_price'];?> -</li> 
                <li class="fr">- Phương thức thanh toán: <?=($bill['payment']==0)?'Trả tiền khi nhận hàng':(($bill['payment']==1)?'Chuyển khoản ngân hàng':'Thanh toán online');?> -</li>
            </div>
        </div>
        <div class="row mb10">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent3 billform">
                        <table class="row">
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><?=$bill['fullname'];?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?=$bill['address'];?></td>
                            </tr>
                            
                            <tr>
                                <td>Điện thoại</td>
                                <td><?=$bill['phone'];?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="row">
                    <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                    <div class="row boxcontent cart">
                        <table border >
                            <tr>
                                <th>Hinh</th>
                                <th>Ten san pham</th>
                                <th>Don gia</th>
                                <th>so luong</th>
                                <th>tong tien</th>
                                
                            </tr>
                            <?php
                                echo '<pre>';
                                print_r($bill_detail);
                                echo '</pre>';
                                // die();
                            ?>
                            
                            
                            <?php
                                
                                $tt = 0;
                                $tongtien = 0;
                                foreach($bill_detail as $billdetail){
                                    extract($billdetail);
                                    $tongtien = $billdetail['price_detail'] * $billdetail['quantity_detail'];
                                    
                                    $tt ;
                                    echo '
                                        <tr>
                                            <td><img src="uploads/'.$billdetail['image'].'" alt="" width="300"></td>
                                            <td>'.$billdetail['product_name'].'</td>
                                            <td>'.$billdetail['price_detail'].'</td>
                                            <td>'.$billdetail['quantity_detail'].'</td>
                                            <td>'.$tongtien.'</td>
                                        </tr>
                                    ';
                                    
                                }
                            ?>

                    
                        </table>
                </div>
        </div>
               
        <?php }
            }        
        ?>
    </div>
    
</div>