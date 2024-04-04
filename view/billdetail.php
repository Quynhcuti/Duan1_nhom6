
    <div class="boxcontent-billdetail">
        <div class="row">
            <div class="mb title-ctdh">
                <div class="title-ctdh_dh">
                    Chi tiết đơn hàng # 9234723498192473
                </div>
                <div class="title-ctdh_nh">
                    - Đã nhận hàng
                </div>
                <div class="title-ctdh_data">
                    Đặt lúc: 15:24 Thứ Bảy, 4/4/2024 
                </div>
            </div>
        </div>
        <div class="row mb20">
            <div class="contents_info_vch">
                <div class="contents_info">
                    <p>THÔNG TIN NHẬN HÀNG</p>
                    <p>Người nhận: </p>
                    <p>Nhận tại: </p>
                    <p>Nhận lúc: </p>
                </div>
                <div class="contents_vch">
                    <p>HÌNH THỨC THANH TOÁN</p>
                    <label for="age1">Trả tiền khi nhận hàng</label><br>
                    <label for="age2">Chuyển khoản ngân hàng</label><br>  
                    <label for="age3">Thanh toán online</label bel><br><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row form_content">

                    <div class="form_content-bill">
                        <div class=" mb title">
                            <div class=" mb title-left">
                                Thông tin sản phẩm
                            </div>
                        </div>
                            <div class="contents1">
                                <div class="contents_img"><img style="width:125px; height:125px;" src="../view/img/z5233286858726_b91d1d324d3c8ac3695ea5afe4c099c6.jpg" alt=""></div>
                                <div class="content_ten_sl">
                                    <div class="mb contents_tensp1">Tên sản phẩm</div>
                                    <div class="contents_sl">Số lượng: 1</div>
                                </div>
                                <div class="contents_tt">Tổng tiền: 1.000.000 <sup>đ</sup></div>
                        </div>
                        <div class="contents_button1">
                            <a href="index.php?act=viewbill"><button>Trở về trang danh sách đơn hàng</button></a>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
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

    