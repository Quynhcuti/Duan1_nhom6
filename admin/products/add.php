
<div class="row">
    <div class="row-frmtitle">
        <H1>THÊM MỚI SẢN PHẨM</H1>
    </div>
    <?php
        // echo "<pre>";
        // print_r($listdanhmuctt);
        // echo "</pre>";

    ?>
    <div class="row frmcontent">
        <form action="index.php?act=addpro" method="post" enctype="multipart/form-data">
            <div class="row mb">
                <label for="">Danh mục</label>
                <select name="iddm" id="">
                    
                    <?php
                        foreach($listdm as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$category_id.'">'.$category_name.'</option>';
                        }
                    ?>
                </select>
            </div>
            
            <div class="row mb">
                Tên sản phẩm<br>
                <input type="text" name="tensanpham" >
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb">
                Hình ảnh<br>
                <input type="file" name="hinh" >
                <!-- <span><?= $errHinhAnh ?></span> -->
            </div>

            <div class="row mb">
                Mô tả<br>
                <textarea name="moTa" id="" cols="30" rows="10"></textarea>
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb">
                Size<br>
                <input type="text" name="size" >
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb">
                Số lượng<br>
                <input type="text" name="soluong" >
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb">
                Màu sắc<br>
                <input type="text" name="mausac" >
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb">
                Giá<br>
                <input type="text" name="gia" >
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>
            
    
            
            <div class="row mb">
                <input type="submit" value="thêm mới" name="themmoi">
                <input type="reset" name="" id="" value="Nhập lại">
                <a href="index.php?act=listpro"><input type="button" value="Danh sách" name="" id=""></a>
            </div>
            <?php if(isset($thongbao) && ($thongbao != "")){  echo $thongbao;  } ?>
        </form>
    </div>
</div>