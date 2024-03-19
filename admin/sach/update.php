<?php   
    if(is_array($sach)){
        // print_r($sach);
        extract($sach);
    }
    $hinhpath="../uploads/".$hinh_anh;
    if(is_file($hinhpath)){
      $hinh = "<img src ='".$hinhpath."' height='80'";
    }else{
      $hinh = "no photo";
    }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT SÁCH</h1></div>
        <div class="row form-content">
        <form action="index.php?act=updateS" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              <label for="">Danh mục nhà xuất bản</label> <br>
              <select name="iddm">
                  <?php
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option '.($nhaxuatban['id_nha_xuat_ban']==$id_nha_xuatban ?"selected":"").' value="'.$id_nha_xuat_ban.'" '.$id_nha_xuat_ban.'>'.$ten_nha_xuat_ban.'</option>';
                    }
                  ?>
              </select>
            </div>
            <div class="row mb10">
              <label for="">Tên sách</label> <br />
              <input type="text" name="tensach" value="<?= $ten_sach?>" />
              <span style="color:red"><?= $errTieuDe?></span>
            </div>
            <div class="row mb10">
              <label for="">Hình</label> <br />
              <input type="file" name="hinh" />
              <img style="width:80px" src="../uploads/<?= $hinh_anh?>" alt="">
              <span style="color:red"><?= $errHinhAnh?></span>
            </div>
            <div class="row mb10">
              <label for="">Giá</label> <br />
              <input type="text" name="gia" value="<?= $gia?>" />
              <span style="color:red"><?= $errGia?></span>
            </div>
            <div class="row mb10">
              <label for="">Mô tả</label> <br />
              <textarea name="mo_ta" id="" cols="30" rows="10"><?= $mo_ta?></textarea>
              <span style="color:red"><?= $errMoTa?></span>
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?= $id?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=listsach"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($notify) && ($notify!="")){
                    echo "$notify";
                }
            ?>
          </form>
        </div>
      </div>