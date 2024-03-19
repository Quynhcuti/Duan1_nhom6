<?php   
    if(is_array($dm)){
        extract($dm);


    }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
        <div class="row form-content">
          <form action="index.php?act=updateDM" method="post">
            <div class="row mb10">
              <label for="">Mã Loại</label><br />
              <input type="text" name="maLoai" disabled /> <br />
            </div>
            <div class="row mb10">
              <label for="">Tên loại</label> <br />
              <input type="text" name="tenLoai" value="<?=$tenDanhMuc ?>" />
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id ?>" >
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($notify) && ($notify!="")){
                    echo "$notify";
                }
            ?>
          </form>
        </div>
      </div>