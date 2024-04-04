<?php 
    if(is_array($cate)){
        // print_r($cate);
        extract($cate);
    }
?>

<div class="row">
  <div class="row-frmtitle">
    <H1>CAP NHAP LOAI HANG HOA</H1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatecate" method="post">
      <div class="row mb10">
        Ma loai <br>
        <input type="text" name="category_id" disabled>
      </div>
      <div class="row mb10">
        Ten loai <br>
        <input type="text" name="tenloai" value="<?= $category_name; ?>">
      </div>
      <div class="row mb10">
        <input type="hidden" name="id" value="<?= $category_id; ?>">
        <input type="submit" value="cap nhat" name="capnhat">
        <input type="reset" name="" id="" value="Nhap lai">
        <a href="index.php?act=addcate"><input type="button" value="Danh sach" name="" id=""></a>
      </div>
      <?php if(isset($thongbao) && ($thongbao != "")){
        echo $thongbao;
      } ?>
    </form>
  </div>
</div>