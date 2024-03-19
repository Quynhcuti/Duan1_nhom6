<div class="row">
        <div class="row form-title"><h1>THÊM MỚI SẢN PHẨM</h1></div>
        <div class="row form-content">
          <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
              <label for="">Danh mục</label>
              <select name="iddm" >
                <?php 
                    foreach($dsdm as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                    }
                ?>
              </select>
              
            </div>
            <div class="row mb10">
              <label for="">Tên sản phẩm</label> <br />
              <input type="text" name="name" />
            </div>
            <div class="row mb10">
              <label for="">Giá</label> <br />
              <input type="text" name="price" />
            </div>
            <div class="row mb10">
              <label for="">Hình</label> <br />
              <input type="file" name="hinh" />
            </div>
            <div class="row mb10">
              <label for="">Mô tả</label> <br />
              <textarea name="moTa" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
              <input type="submit" name="themmoi" value="THÊM MỚI" />
              <input type="reset" value="NHẬP LẠI" />
              <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($notify) && ($notify!="")){
                    echo "$notify";
                }
            ?>
          </form>
        </div>
      </div>