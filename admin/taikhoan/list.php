<div class="row">
        <div class="row form-title"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
        <div class="row form-content">
          <div class="row mb10 form-dsLoai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TK</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>ĐỊA CHỈ EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php   
                    foreach($dstk as $taikhoan){
                        extract ($taikhoan);
                        $editTK = "index.php?act=editTK&id=".$id;
                        $delTK = "index.php?act=delTK&id=".$id;

                        echo    '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>

                                    <td><a href="'.$editTK.'" ><input type="button" value="Sửa"></a> <a href="'.$delTK.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                    }
                ?>  
            </table>
          </div>
          <div class="row mb10">
            
          </div>
        </div>
      </div>