<div class="row">

        <div class="row form-title mb"><h1>DANH SÁCH SẢN PHẨM</h1></div>
        <form action="index.php?act=listsp" method="post">
              <input type="text" name="kyw" >
              <select name="iddm">
                <option value="0" selected >Tất cả</option>
                <?php
                      foreach($dsdm as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                      }
                ?>
              </select>
              <input type="submit" name="listTIM" value="TÌM">
        </form>
        <div class="row form-content">
          <div class="row mb10 form-dsLoai">
            

          
            <table>
                <tr>
                    <th></th>
                    <th>STT</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ</th>
                    <th>LƯỢT XEM</th>
                    <th>DANH MỤC</th>
                    <th></th>
                </tr>
                <?php   
                    foreach($dssp as $key => $sanpham){
                        extract ($sanpham);
                        $editSP = "index.php?act=editSP&id=".$id;
                        $delSP = "index.php?act=delSP&id=".$id;
                        $hinhpath="../uploads/".$img;
                        if(is_file($hinhpath)){
                          $img = "<img src ='".$hinhpath."' height='80'";
                        }else{
                          $img = "no photo";
                        }
                        echo    '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.($key+1).'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$img.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$moTa.'</td>
                                    <td>'.$luotXem.'</td>
                                    <td>'.$tenDanhMuc.'</td>
                                    <td><a href="'.$editSP.'" ><input type="button" value="Sửa"></a> <a href="'.$delSP.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                    }
                ?>  
            </table>
          </div>
          <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>