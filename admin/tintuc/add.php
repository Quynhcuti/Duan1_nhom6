<div class="row">
        <div class="row form-title"><h1>THÊM MỚI TIN TỨC</h1></div>
       
        <div class="row form-content">
          <?php
            if(isset($notify) && ($notify!="")){
                echo  "<h1 style='color:green'>$notify</h1>";
            }
          ?>
          <form action="index.php?act=addtintuc" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              <label for="">Danh mục tin tức</label> <br />
              <select name="iddm" >
                <?php 
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>';
                    }
                ?>
              </select>
              
            </div>
            <div class="row mb10">
              <label for="">Tiêu đề</label> <br />
              <input type="text" name="tieude" value="<?= $tieude?>" />
              <span style="color:red"><?= $errTieuDe?></span>
            </div>
            <div class="row mb10">
              <label for="">Hình</label> <br />
              <input type="file" name="hinh" />
              <span style="color:red"><?= $errHinhAnh?></span>

            </div>
            <div class="row mb10">
              <label for="">Nội dung</label> <br />
              <textarea name="noidung" id="" cols="30" rows="10" value="<?= $noidung?>"></textarea>
              <span style="color:red"><?= $errNoiDung?></span>
            </div>
            <div class="row mb10">
              <input type="submit" name="themmoi" value="THÊM MỚI" />
              <input type="reset" value="NHẬP LẠI" />
              <a href="index.php?act=listtintuc"><input type="button" value="DANH SÁCH"></a>
            </div>
            
          </form>
        </div>
      </div>