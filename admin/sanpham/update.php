<?php   
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../uploads/".$img;
    if(is_file($hinhpath)){
      $hinh = "<img src ='".$hinhpath."' height='80'";
    }else{
      $hinh = "no photo";
    }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT SẢN PHẨM</h1></div>
        <div class="row form-content">
        <form action="index.php?act=updateSP" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              <select name="iddm">
                  <option value="0" selected >Tất cả</option>
                  <?php
                    foreach($dsdm as $danhmuc){
                      extract($danhmuc);
                      if($iddm==$id) $s="selected"; else $s="";
                      echo '<option value="'.$id.'" '.$s.'>'.$tenDanhMuc.'</option>';
                    }
                  ?>
              </select>
            </div>
            <div class="row mb10">
              <label for="">Tên sản phẩm</label> <br />
              <input type="text" name="name" value="<?= $name?>"/>
            </div>
            <div class="row mb10">
              <label for="">Giá</label> <br />
              <input type="text" name="price" value="<?= $price?>" />
            </div>
            <div class="row mb10">
              <label for="">Hình</label>
              <input type="file" name="hinh" />
              <?= $hinh?>
            </div>
            <div class="row mb10">
              <label for="">Mô tả</label> <br />
              <textarea name="moTa" id="" cols="30" rows="10"><?= $moTa?></textarea>
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?= $sanpham["id"]?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($notify) && ($notify!="")){
                    echo "$notify";
                }
            ?>
          </form>
        </div>
      </div>