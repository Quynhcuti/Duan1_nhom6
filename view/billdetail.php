    
    <div class="boxcontent-billdetail">
        <?php


            $tong = 0;
            foreach ($listBill as $bill) {
                extract($bill);
                $tong = $bill['price_detail'] * $bill['quantity_detail'];
            }
                 
            echo'
                <div class="row">
                    <div class="mb title-ctdh">
                        <div class="title-ctdh_dh">
                            Chi tiết đơn hàng #'.$bill['bill_id'].'
                        </div>
                        <div class="title-ctdh_nh">
                            - '.($bill['status'] == 0 ? 'Đơn hàng mới' : ($bill['status'] == 1 ? 'Đang sử lý' : ($bill['status'] == 2 ? 'Đang giao hàng' : 'Đã nhận '))).'
                        </div>
                        <div class="title-ctdh_data">
                            Đặt lúc: '.$bill['create_at'].' 
                        </div>
                    </div>
                </div>    
            ';            
        ?>

        <?php
            extract($bill);

            echo'
                <div class="row mb20">
                    <div class="contents_info_vch">
                    <div class="contents_info">
                        <p>THÔNG TIN NHẬN HÀNG</p>
                        <p>Người nhận:      '.$bill['fullname'].' </p>
                        <p>Nhận tại:      '.$bill['address'].'</p>
                        <p>Nhận lúc:      '.$bill['create_at'].'</p>
                    </div>
                    <div class="contents_vch">
                        <p>HÌNH THỨC THANH TOÁN</p>
                        <label for="age1">'.($bill['payment'] == 1 ? 'Trả tiền khi nhận hàng' : ($bill['payment'] == 2 ? 'Chuyển khoản ngân hàng' : 'Thanh toán online')).'</label><br>
                    </div>
                    </div>
                </div>
            
            ';
            
        ?>
        
        <?php
            $tong = 0;
            extract($bill);
            $tong = $bill['quantity_detail'] * $bill['price_detail'];

            echo'
                <div class="row">
                    <div class="row form_content">
                        <div class="form_content-bill">
                            <div class=" mb title">
                                <div class=" mb title-left">
                                    Thông tin sản phẩm
                                </div>
                            </div>
                                <div class="contents1">
                                    <div class="contents_img"><img style="width:125px; height:125px;" src="uploads/'.$bill['image'].'" alt=""></div>
                                    <div class="content_ten_sl">
                                        <div class="mb contents_tensp1">'.$bill['product_name'].'</div>
                                        <div class="contents_sl">Số lượng: '.$bill['quantity_detail'].'</div>
                                    </div>
                                    <div class="contents_tt">Tổng tiền:'.$tong.'<sup>đ</sup></div>
                            </div>
                            <div class="contents_button1">
                                <a href="index.php?act=mybill"><button>Trở về trang danh sách đơn hàng</button></a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>    
            ';
        ?>
        
    </div>


<!-- <div class="row">
    <div class="row form-title">
        <h1></h1>
    </div>
    <div class="row form_content">
        <div class="row form-dsLoai">
            <table style="margin-top: 10px;">
                <tr>
                    
                    <th>mã đơn hàng</th>
                    <th>tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Tổng </th>
                    <th>Địa chỉ nhận hàng</th>

                </tr>
                <?php
                $tong = 0;
                foreach ($listBill as $bill) {
                    extract($bill);
                    $tong = $bill['price_detail'] * $bill['quantity_detail'];
                    echo '
                        <tr>
                            <td>'.$bill['bill_id'].'</td>
                            <td>'.$bill['product_name'].'</td>
                            <td><img src="uploads/'.$bill['image'].'" alt="" width="300"></td>
                            <td>'.$bill['quantity_detail'].'</td>
                            <td>'.$tong.'</td>
                            <td><a href="index.php?act=bill_detail">Xem chi tiết</a></td>
                        </tr>
                        ';
                }
                ?>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="row form-title">
        <h1>Thông tin nhận hàng</h1>
    </div>
    
    <div class="row form_content">
       
        <div class="row form-dsLoai">
            <table style="margin-top: 10px;" border>
                <tr>
                    <th>Người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Đặt lúc</th>
                </tr>
                <?php
                $tong = 0;
                    extract($bill);
                    echo '
                        <tr>
                            <td>'.$bill['fullname'].'</td>
                            <td>'.$bill['address'].'</td>
                            <td>'.$bill['phone'].'</td>
                            <td>'.$bill['create_at'].'</td>
                        </tr>
                        ';
                
                ?>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="row form-title">
        <h1>Hình thức thanh toán</h1>
    </div>
    
    <div class="row form_content">
       
        <div class="row form-dsLoai">
            <table style="margin-top: 10px;" border>
                <tr>
                    <th>Hình thức</th>
                </tr>
                <?php
                    extract($bill);
                    echo '
                        <tr>
                            <td>'.($bill['payment'] == 1 ? 'Trả tiền khi nhận hàng' : ($bill['payment'] == 2 ? 'Chuyển khoản ngân hàng' : 'Thanh toán online')).'</td>
                        </tr>
                        ';
                
                ?>
            </table>
        </div>
    </div>
</div> -->

    