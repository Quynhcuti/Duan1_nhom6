
<div class="row">
        <div class="row form-title"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        <div class="row form-content">
          <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
              <label for="">Mã Loại</label><br />
              <input type="text" name="maLoai" disabled placeholder="id" /> <br />
            </div>
            <div class="row mb10">
              <label for="">Tên loại</label> <br />
              <input type="text" name="tenLoai" placeholder="Nhập tại đây" />
            </div>
            <div class="row mb10">
              <input type="submit" name="themmoi" value="THÊM MỚI" />
              <input type="reset" value="NHẬP LẠI" />
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