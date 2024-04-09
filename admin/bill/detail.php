<?php
    // echo '<pre>';
    // print_r($listbill);
    // echo '</pre>';
    // if(is_array($billdetail)){
    //     extract($billdetail);
    //     // echo '<pre>';
    //     print_r($billdetail);
    //     // var_dump($billdetail);
    //     // echo '</pre>';
    // }
?>
<!-- <div class="row">
    <div class="row-frmtitle">
        <h1>CHI TIẾT ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=updatestatus" method="post">
        <div class="row frmcontent">
            <div class="row form-dsLoai">
                <table border style="">
                        <tr>
                            <th>Mã đơn hàng chi tiết</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                        
                        </tr>
                        <tr>
                            <td><?= $billdetail[0]['bill_detail_id'] ?></td>
                            <td><?= $billdetail[0]['product_name'] ?></td>
                            <td><?= $billdetail[0]['price_detail'] ?></td>
                            <td><?= $billdetail[0]['quantity_detail'] ?></td>        
                        </tr>
                                    
                                
                        <tr>
                            <th>Tổng</th>
                            <th colspan="3">
                                <?php
                                    $tong = 0;
                                    $tong = $billdetail[0]['price_detail'] * $billdetail[0]['quantity_detail'];
                                    echo $tong;
                            
                                ?>
                            </th>
                            <th rowspan="2">
                                
                                    <input type="hidden" name="id" value="<?= $billdetail[0]['bill_detail_id'] ?>">
                                        <select name="status" id="" >
                                            <option value="">--Chọn--</option>
                                            <option value="<?= $billdetail[0]['status'] ?>">Đơn hàng mới</option>
                                            <option value="<?= $billdetail[0]['status'] ?>">Đang xử lí</option>
                                            <option value="<?= $billdetail[0]['status'] ?>">Đang giao hàng</option>
                                            <option value="<?= $billdetail[0]['status'] ?>">Đã nhận hàng</option>
                                        </select>
                                        <br>
                                        <input type="submit" value="Cap nhat" name="capnhat">
                                   
                            </th>

                        </tr>
                        
                </table>
            </div>
            
        </div>
    </form>
    
</div> -->
<div class="row frmcontent">
        <div class="row form-dsLoai">
            <table border style="">
                    <tr>
                        <th>Mã đơn hàng chi tiết</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                       
                    </tr>
                    <?php 
                        $tong = 0;
                        $tt = 0;
                        $id = '';
                        foreach($billdetail as $bill){
                            extract($bill);
                            
                            $tong = $price_detail * $quantity_detail;
                            $tt += $tong;
                            
                            
                            echo '<tr>
                                    <td>'.$bill_detail_id.'</td>
                                    <td>'.$product_name.'</td>
                                    <td>'.$price_detail.'</td>
                                    <td>'.$quantity_detail.'</td>
                                    <td>'.$tong.'</td>
                                    
                                    
                                </tr>
                                ';
                            
                        }
                        echo '
                        <th>Tổng</th>
                        <th colspan="3">'.$tt.'</th>    
                        
                        ';
                    ?>
                    <!-- <?php
                        echo '
                        <tr>
                            
                            <th rowspan="2">
                                <form action="index.php?act=updatestatus" method="post">
                                    <input type="hidden" name="id" value="'.$bill_detail_id.'">
                                        <select name="status" id="">
                                            <option value="">--Chọn--</option>
                                            <option value="0">Đơn hàng mới</option>
                                            <option value="1">Đang xử lí</option>
                                            <option value="2">Đang giao hàng</option>
                                            <option value="3">Đã nhận hàng</option>
                                        </select>
                                        <br>
                                    <input type="submit" value="Cap nhat" name="capnhat">
                                </form>   
                            </th>

                        </tr>';
                    ?> -->
            </table>
        </div>
        
</div>
<style>
    table{
        border-collapse: collapse;
    }
</style>

