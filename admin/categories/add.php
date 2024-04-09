<div class="row">
  <div class="row-frmtitle">
    <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=addcate" method="post">
      <div class="row mb">
        Mã loại <br>
        <input type="text" name="category_id" disabled>
      </div>
      <div class="row mb">
        Tên loại <br>
        <input type="text" name="tenloai">
      </div>
      <div class="row mb">
        <input type="submit" value="Thêm mới" name="themmoi">
        <input type="reset" name="" id="" value="Nhập lại">
        <a href="index.php?act=listcate"><input type="button" value="Danh sách" name="" id=""></a>
      </div>
      <?php if(isset($thongbao) && ($thongbao != "")){
        echo $thongbao;
      } ?>
    </form>
  </div>
</div>