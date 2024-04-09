<?php
    // echo '<pre>';
    // print_r($listbill);
    // echo '</pre>';

?>

<div class="row">
    <div class="mb row-frmtitle">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="billsearch">
        <form action="index.php?act=billsearch" class="bill" method="post">
            <input type="text"  name="keyword" placeholder="Tìm kiếm">
            <input type="submit"  value="Tìm kiếm" name="timkiem">   
        </form>
    </div>
    <div class="row frmcontent">
        <div class="row form-dsLoai">
            <table border style="margin-top: 10px;">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Họ và tên</th>
                        <th>Địa chỉ</th>
                        <th>Số diện thoại</th>
                        
                        <th>Hình thức thanh toán</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                    
                    <?php 
                        foreach($listbill as $bill){
                            extract($bill);
                            // print_r($listdm);
                            $bill_detail = "index.php?act=bill_detail&id=" .$bill_id;
                            $edit_bill = "index.php?act=edit_bill&id=" .$bill_id;
                            echo '<tr>
                                    <td>'.$bill_id.'</td>
                                    <td>'.$fullname.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$phone.'</td>
                                    
                                    <td>'.($payment == 1 ? 'Trả tiền khi nhận hàng' : ($payment == 2 ? 'Chuyển khoản ngân hàng' : 'Thanh toán online')).'</td>
                                    <td>'.($status == 0 ? 'Đơn hàng mới' : ($status == 1 ? 'Đang xử lí' : ($status == 2 ? 'Đang giao hàng' : 'Đã nhận hàng') ) ).'</td>
                                    <td>'.$create_at.'</td>
                                    <td><a style="text-decoration: none;" href="'.$bill_detail.'">Chi tiết</a></td>
                                    <td><a style="text-decoration: none;" href="'.$edit_bill.'">Sửa</a></td>
                                </tr>';
                        }
                    ?>
            </table>
        </div>
        <div class="row mb10">

        </div>
        <div class="row mb10">
            
        </div>

    </div>
</div>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa?");
    }
</script>
<style>
    table{
        border-collapse: collapse;
    }
</style>

