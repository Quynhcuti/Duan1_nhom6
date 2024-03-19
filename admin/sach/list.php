<div class="row">
        <?php
          echo '<pre>';
          print_r($listS);
        ?>

        <div class="row form-title mb"><h1>DANH SÁCH SÁCH</h1></div>
        
        <!-- <form action="index.php?act=listtintuc" method="post">
              <input type="text" name="kyw" placeholder="Nhập từ khóa..." >
              <select name="iddm">
                <option value="0" selected >Tất cả</option>
                <?php
                      foreach($listSach as $sach){
                        extract($sach);
                        echo '<option value="'.$id_nha_xuat_ban .'">'.$ten_nha_xuat_ban.'</option>';
                      }
                ?>
              </select>
              <input type="submit" name="listTIM" value="TÌM">
        </form> -->
        <div class="row form-content">
          <div class="row mb10 form-dsLoai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SÁCH</th>
                    <th>TÊN SÁCH</th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ</th>
                    <th>DANH MỤC NHÀ XUẤT BẢN</th>
                    <th></th>
                </tr>
                <?php   
                    foreach($listS as $sach){
                        extract ($sach);
                        $editS = "index.php?act=editS&id=".$id;
                        $delS = "index.php?act=delS&id=".$id;
                        $hinhpath="../uploads/".$hinh_anh;
                        if(is_file($hinhpath)){
                          $hinhanh = "<img src ='".$hinhpath."' height='80'";
                        }else{
                          $hinhanh = "no photo";
                        }
                        echo    '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$ten_sach.'</td>
                                    <td>'.$hinhanh.'</td>
                                    <td>'.$gia.'</td>
                                    <td>'.$mo_ta.'</td>
                                    <td>'.$ten_nha_xuat_ban.'</td>
                                    <td><a href="'.$editS.'" ><input type="button" value="Sửa"></a> <a onclick="return confirm(\'Ban có chắc chắc muốn xóa\');" href="'.$delS.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                    }
                ?>  
            </table>
          </div>
          <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="index.php?act=addsach"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>
      