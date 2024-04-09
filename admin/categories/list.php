
<div class="row">
    <div class="row-frmtitle">
        <H1>Danh sách loại hàng</H1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 form-dsLoai">
            <table>
                <tr>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Nút</th>
                    
                </tr>
                <?php 
                    foreach($listdm as $dm){
                        extract($dm);
                        $editcate = "index.php?act=editcate&category_id=". $category_id;
                        echo '<tr>
                                <td>'.$category_id.'</td>
                                <td>'.$category_name.'</td>
                                <td><a href="'.$editcate.'"><input type="button" value="cap nhap"></a></td>
                            </tr>';
                    }
                ?>
                
            </table>
        </div>
        <div class="row-mb10">
            
            <a href="index.php?act=addcate"><input type="button" value="Nhập thêm" name="" id=""></a>
        </div>
    </div>
</div>
