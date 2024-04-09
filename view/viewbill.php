
    

    <div class="boxcontent-mybill">
        <div class="row">
            <div class="row mb form-title">
                <h1>ĐƠN HÀNG CỦA TÔI</h1>
            </div>
                <?php
                        $tong = 0;
                        foreach ($listBill as $bill) {
                            extract($bill);
                            $tong = $bill['price_detail'] * $bill['quantity_detail'];
                            echo '
                                
                                <div class="row form_content">
                                    <div class="form_content-bill">
                                        <div class=" mb title">
                                            <div class=" mb title-left">
                                                Đơn hàng: '.$bill['bill_id'].'
                                            </div>
                                            <div class="title-right">
                                                '.($bill['status'] == 0 ? 'Đơn hàng mới' : '' ).'
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <div class="contents_img"><img style="width:200px; height:100px;" src="uploads/'.$bill['image'].'"></div>
                                            <div class="contents_tensp">'.$bill['product_name'].'</div>
                                            <div class="contents_tt">Tổng tiền: '.$tong.'<sup>đ</sup></div>
                                        </div>
                                        <div class="contents_button">
                                            <a href="index.php?act=bill_detail"><button>Xem chi tiết</button></a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                ';
                        }
                ?>
        </div>
    </div>
