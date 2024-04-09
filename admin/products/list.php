<div class="row">
    <div class="row-frmtitle">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 form-dsLoai">
            <table>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Màu sắc</th>
                    <th>Giá</th> 
                    <th>Tên danh mục</th>
                    <th>Nút</th>
                    <img src="" alt="">  
                </tr>
                
                <?php 
                    foreach($listsp as $sp){
                        extract($sp);
                        // print_r($listdm);
                        $editpro = "index.php?act=editpro&id=". $product_id;
                        $deletepro = "index.php?act=deletepro&id=". $product_id;
                        echo '<tr>
                                <td>'.$product_id.'</td>
                                <td>'.$product_name.'</td>
                                <td><img src="../uploads/'.$image.'" width="300" alt=""></td>
                                <td>'.$description.'</td>
                                <td>'.$view.'</td>
                                <td>'.$size.'</td>
                                <td>'.$quantity.'</td>
                                <td>'.$color.'</td>
                                <td>'.$price.'</td>
                                <td>'.$category_name.'</td>
                                <td><a href="'.$editpro.'"><input type="button" value="sửa"></a> <a onclick = "return confirm(\'Bạn có chắc chắn muốn xóa không ? \')" href="'.$deletepro.'"><input type="button" value="xóa"></a></td>

                            </tr>';
                    }
                ?>
                
            </table>
            <a href="index.php?act=addpro"><input type="button" value="Nhập thêm" /></a>
        </div>
        
    </div>
</div>

