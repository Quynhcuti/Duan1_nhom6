<?php   
    if(is_array($tintuc)){
        // print_r($tintuc);
        extract($tintuc);
    }
    $hinhpath="../uploads/".$hinh_anh;
    if(is_file($hinhpath)){
      $hinh = "<img src ='".$hinhpath."' height='80'";
    }else{
      $hinh = "no photo";
    }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT TIN TỨC</h1></div>
        <div class="row form-content">
        <form action="index.php?act=updateTT" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              <label for="">Danh mục tin tức</label> <br>
              <select name="iddm">
                  <?php
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option '.($danhmuc['id_danhmuc']==$id_danh_muc?"selected":"").' value="'.$id_danhmuc.'" '.$id_danh_muc.'>'.$ten_danhmuc.'</option>';
                    }
                  ?>
              </select>
            </div>
            <div class="row mb10">
              <label for="">Tiêu đề</label> <br />
              <input type="text" name="tieude" value="<?= $tieu_de?>" />
              <span style="color:red"><?= $errTieuDe?></span>
            </div>
            <div class="row mb10">
              <label for="">Hình</label> <br />
              <input type="file" name="hinh" />
              <img style="width:80px" src="../uploads/<?= $hinh_anh?>" alt="">
              <span style="color:red"><?= $errHinhAnh?></span>
            </div>
            <div class="row mb10">
              <label for="">Nội dung</label> <br />
              <textarea name="noi_dung" id="" cols="30" rows="10"><?= $noi_dung?></textarea>
              <span style="color:red"><?= $errNoiDung?></span>
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?= $id?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=listtintuc"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($notify) && ($notify!="")){
                    echo "$notify";
                }
            ?>
          </form>
        </div>
      </div>