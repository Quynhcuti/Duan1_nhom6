<?php
    if(is_array($bill)){
        // print_r($sanpham);
        extract($bill);
        echo '<pre>';
        print_r($bill);
        echo '</pre>';
        // die();
    }

?>

<div class="row">
    <div class="row-frmtitle">
        <H1>CẬP NHẬT TRẠNG THÁI</H1>
    </div>
    <?php
        // echo "<pre>";
        // print_r($listdm);
        // echo "</pre>";

    ?>
    <div class="row frmcontent">
        <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">Trạng thái</label>
                <select name="status" id="">
                    
                    <?php
                        foreach($liststatus as $status1){
                            extract($status1);
                                // echo '<pre>';
                                // print_r($status);
                                // echo '</pre>';
                                // die();
                            echo '<option '.($status1['status_id'] == $status ? 'selected' : '').' value="'.$status1['status_id'].'">'.$status1['status_name'].'</option>';
                        }
                    ?>
                </select>
            </div>
            
            <div class="row mb10">
                Họ và tên<br>
                <input type="text" name="fullname" value="<?= $fullname ?>" readonly>
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>
            
            <div class="row mb10">
                Địa chỉ<br>
                <input type="text" name="address" value="<?= $address ?>" readonly>
                <!-- <span><?= $errHinhAnh ?></span> -->
            </div>

            <div class="row mb10">
                Số diện thoại<br>
                <input type="text" name="phone" value="<?= $phone ?>" readonly>
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb10">
                Phương thức thanh toán<br>
                <input type="text" name="payment" value="<?= ($payment == 1) ? 'Trả tiền khi nhận hàng' : (($payment == 2) ? 'Chuyển khoản ngân hàng' : 'Thanh toán online' ) ?>" readonly>
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb10">
                Ngày tạo<br>
                <input type="text" name="soluong" value="<?= $create_at	 ?> " readonly>
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>
            
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $bill_id ?>">
                <input type="submit" value="Cap nhat" name="capnhat">
                <a href="index.php?act=billsearch"><input type="button" value="Danh sach" name="" id=""></a>
            </div>
            <?php if(isset($thongbao) && ($thongbao != "")){  echo $thongbao;  } ?>
        </form>
    </div>
</div>