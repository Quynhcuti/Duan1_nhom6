<div class="row">
        <div class="row form-title"><h1>THÊM MỚI SÁCH</h1></div>
       
        <div class="row form-content">
          <?php
            if(isset($notify) && ($notify!="")){
                echo  "<h1 style='color:green'>$notify</h1>";
            }
          ?>
          <form action="index.php?act=addsach" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              <label for="">Danh mục nhà xuất bản</label> <br />
              <select name="iddm" >
                <?php 
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id_nha_xuat_ban.'">'.$ten_nha_xuat_ban.'</option>';
                    }
                ?>
              </select>
              
            </div>
            <div class="row mb10">
              <label for="">Tên sách</label> <br />
              <input type="text" name="tensach" value="<?= $tensach?>" />
              <span style="color:red"><?= $errTenSach?></span>
            </div>
            <div class="row mb10">
              <label for="">Hình</label> <br />
              <input type="file" name="hinh" />
              <span style="color:red"><?= $errHinhAnh?></span>
            </div>
            <div class="row mb10">
              <label for="">Giá</label> <br />
              <input type="text" name="gia" value="<?= $gia?>" />
              <span style="color:red"><?= $errGia?></span>
            </div>
            <div class="row mb10">
              <label for="">Mô tả</label> <br />
              <textarea name="moTa" id="" cols="30" rows="10" value="<?= $moTa?>"></textarea>
              <span style="color:red"><?= $errMoTa?></span>
            </div>
            <div class="row mb10">
              <input type="submit" name="themmoi" value="THÊM MỚI" />
              <input type="reset" value="NHẬP LẠI" />
              <a href="index.php?act=listsach"><input type="button" value="DANH SÁCH"></a>
            </div>
            
          </form>
        </div>
      </div>