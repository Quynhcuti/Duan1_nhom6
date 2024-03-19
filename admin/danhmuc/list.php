<div class="row">
        <div class="row form-title"><h1>DANH SÁCH LOẠI HÀNG</h1></div>
        <div class="row form-content">
          <div class="row mb10 form-dsLoai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php   
                    foreach($dsdm as $danhmuc){
                        extract ($danhmuc);
                        $editDM = "index.php?act=editDM&id=".$id;
                        $delDM = "index.php?act=delDM&id=".$id;

                        echo    '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$tenDanhMuc.'</td>
                                    <td><a href="'.$editDM.'" ><input type="button" value="Sửa"></a> <a onclick="return delDM();" href="'.$delDM.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                    }
                ?>  
            </table>
          </div>
          <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>
      <script>
        function delDM(){
          return confirm("Bạn có chắc chắc muốn xóa");
        }
      </script>