<div class="row">
        <!-- <?php
          echo '<pre>';
          print_r($listTinTuc);
        ?> -->

        <div class="row form-title mb"><h1>DANH SÁCH TIN TỨC</h1></div>
        
        <!-- <form action="index.php?act=listtintuc" method="post">
              <input type="text" name="kyw" placeholder="Nhập từ khóa..." >
              <select name="iddm">
                <option value="0" selected >Tất cả</option>
                <?php
                      foreach($listTinTuc as $tintuc){
                        extract($tintuc);
                        echo '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
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
                    <th>MÃ TIN TỨC</th>
                    <th>TIÊU ĐỀ</th>
                    <th>NỘI DUNG</th>
                    <th>HÌNH ẢNH</th>
                    <th>DANH MỤC TIN TỨC</th>
                    <th></th>
                </tr>
                <?php   
                    foreach($listTinTuc as $tintuc){
                        extract ($tintuc);
                        $editTT = "index.php?act=editTT&id=".$id;
                        $delTT = "index.php?act=delTT&id=".$id;
                        $hinhpath="../uploads/".$hinh_anh;
                        if(is_file($hinhpath)){
                          $hinhanh = "<img src ='".$hinhpath."' height='80'";
                        }else{
                          $hinhanh = "no photo";
                        }
                        echo    '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$tieu_de.'</td>
                                    <td>'.$noi_dung.'</td>
                                    <td>'.$hinhanh.'</td>
                                    <td>'.$ten_danhmuc.'</td>
                                    <td><a href="'.$editTT.'" ><input type="button" value="Sửa"></a> <a onclick="return confirm(\'Ban có chắc chắc muốn xóa\');" href="'.$delTT.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                    }
                ?>  
            </table>
          </div>
          <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="index.php?act=addtintuc"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>
      