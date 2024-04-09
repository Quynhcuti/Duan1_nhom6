<div class="boxcontent-billcofirm">
    <?php
        if (isset($bill) && is_array($bill)) {
            extract($bill);
            if(isset($_SESSION['user'])){
    ?>
    <div style="text-align: center;" class="row mb billconfim-title">
        <h2>Cảm ơn quý khách đã đặt hàng!</h2>
    </div>  
    <div class="row">
        <div class=" mb billcofirm-ttdh">
            <div class="row mb form-title">
                <h2>Thông tin đơn hàng</h2>
            </div>
            <div class="billcofirm-title_id">
                Mã đơn hàng: <?=$bill['bill_id'];?>
            </div>
            <div class="billcofirm-title_gia">
                Giá trị đơn hàng: <?=$bill['total_price'];?> 
            </div>
            <div class="billcofirm-title_pttt">
                Phương thức thanh toán: -  <?=($bill['payment']==0)?'Trả tiền khi nhận hàng':(($bill['payment']==1)?'Chuyển khoản ngân hàng':'Thanh toán online');?>
            </div>
        </div>
        <div class="billcofirm-ttdathang">
            <div class="row mb form-title">
                <h2>Thông tin đặt hàng</h2>
            </div>
            <div class="ttdathang-content">
                <div class="mb ttdathang-content_ten">Người đặt hàng: <?=$bill['fullname'];?>  </div>
                <div class="mb ttdathang-content_dc">Địa chỉ: <?=$bill['address'];?> </div>
                <div class="mb ttdathang-content_sdt">Số điện thoại: <?=$bill['phone'];?></div>
            </div>
        </div>
        <div class="billcofirm-ctgh">
            <div class="row mb form-title">
                <h2>Chi tiết giỏ hàng</h2>
            </div>
            <div class="mb box-giohang1">
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
                        foreach($bill_detail as $key => $item){
                            extract($item);
                            $tongtien = $item['price_detail'] * $item['quantity_detail'];
                            $tt ;
                            echo '
                                <tr>
                                    <td style="display: flex; align-items: center">
                                        <img src="uploads/'.$item['image'].'"
                                            style="width: 171px; height: 177px" alt="" />
                                    </td>
                                    <td>'.$item['product_name'].'</td>
                                    <td>
                                        <p><span>'.$item['price_detail'].'</span><sup>đ</sup></p>
                                    </td>
                                    <td>
                                        <p>
                                            <span>'.$item['quantity_detail'].'</span>
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

            </div>
        </div>
            
        
    </div>
    <?php      
        }else{     
    ?>

    <div style="text-align: center;" class="row mb billconfim-title">
            <h2>Cảm ơn quý khách đã đặt hàng!</h2>
            
        </div>  
        <div class="row">
            <div class=" mb billcofirm-ttdh">
                <div class="row mb form-title">
                    <h2>Thông tin đơn hàng</h2>
                </div>
                <div class="billcofirm-title_id">
                    Mã đơn hàng: <?=$bill['bill_id'];?>
                </div>
                <div class="billcofirm-title_gia">
                    Giá trị đơn hàng: <?=$bill['total_price'];?> 
                </div>
                <div class="billcofirm-title_pttt">
                    Phương thức thanh toán: -  <?=($bill['payment']==0)?'Trả tiền khi nhận hàng':(($bill['payment']==1)?'Chuyển khoản ngân hàng':'Thanh toán online');?>
                </div>
            </div>
            <div class="billcofirm-ttdathang">
                <div class="row mb form-title">
                    <h2>Thông tin đặt hàng</h2>
                </div>
                <div class="ttdathang-content">
                    <div class="mb ttdathang-content_ten">Người đặt hàng: <?=$bill['fullname'];?>  </div>
                    <div class="mb ttdathang-content_dc">Địa chỉ: <?=$bill['address'];?> </div>
                    <div class="mb ttdathang-content_sdt">Số điện thoại: <?=$bill['phone'];?></div>
                </div>
            </div>
            <div class="billcofirm-ctgh">
                <div class="row mb form-title">
                    <h2>Chi tiết giỏ hàng</h2>
                </div>
                <div class="mb box-giohang1">
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
                            foreach($bill_detail as $key => $item){
                                extract($item);
                                $tongtien = $item['price_detail'] * $item['quantity_detail'];
                                $tt ;
                                echo '
                                    <tr>
                                        <td style="display: flex; align-items: center">
                                            <img src="uploads/'.$item['image'].'"
                                                style="width: 171px; height: 177px" alt="" />
                                        </td>
                                        <td>'.$item['product_name'].'</td>
                                        <td>
                                            <p><span>'.$item['price_detail'].'</span><sup>đ</sup></p>
                                        </td>
                                        <td>
                                            <p>
                                                <span>'.$item['quantity_detail'].'</span>
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
                    
                    
                </div>
            </div>
                
            
        </div>

        
        
    </div>
    <?php
            }
        }
        
        ?>
</div>