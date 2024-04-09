<style>
    table{
        border-collapse: collapse;
    }
</style>


<div class="row">
    <div class="row-frmtitle">
        <h1>SẢN PHẨM BÁN CHẠY</h1>
    </div>
    
    <div class="row frmcontent">
        <div class="row form-dsLoai">
            <table border >
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tổng số lượt mua</th>
                </tr>
                <?php 
                    foreach($list1 as $spbc){
                        extract($spbc);
                        // print_r($listdm);
                        
                        echo '<tr>
                                <td>'.$product_id.'</td>
                                <td>'.$product_name.'</td>
                                <td><img src="../uploads/'.$image.'" width="300" alt=""></td>
                                <td>'.$tongsoluongban.'</td>
                            </tr>';
                    }
                    echo '<td><a href="index.php?act=bieudo"><input type="button" value="Biểu đồ"></a></td>';
                ?>
                
            </table>   
        </div>


    </div>
</div>
<div class="row">
    <div class="row-frmtitle">
        <h1>SẢN PHẨM CÓ NHIỀU LƯỢT XEM</h1>
    </div>
    
    <div class="row frmcontent">
        <div class="row form-dsLoai">
            <table border >
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tổng số lượt xem</th>
                </tr>
                <?php 
                    foreach($list2 as $spx){
                        extract($spx);
                        // print_r($listdm);
                        
                        echo '<tr>
                                <td>'.$product_id.'</td>
                                <td>'.$product_name.'</td>
                                <td><img src="../uploads/'.$image.'" width="300" alt=""></td>
                                <td>'.$soluotxem.'</td>
                            </tr>';
                    }
                    echo '<td><a href="index.php?act=bieudoluotxem"><input type="button" value="Biểu đồ"></a></td>';
                ?>
                
            </table>   
        </div>


    </div>
</div>