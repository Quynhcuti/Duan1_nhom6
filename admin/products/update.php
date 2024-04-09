<?php
    if(is_array($sanpham)){
        // print_r($sanpham);
        extract($sanpham);
    }

?>

<div class="row">
    <div class="row-frmtitle">
        <H1>CẬP NHẬT SẢN PHẨM</H1>
    </div>
    <?php
        // echo "<pre>";
        // print_r($listdm);
        // echo "</pre>";

    ?>
    <div class="row frmcontent">
        <form action="index.php?act=updatepro" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">danh muc</label>
                <select name="iddm" id="">
                    <option value=""></option>
                    <?php
                        foreach($listdm as $categories){
                            extract($categories);
                            echo '<option '.($categories['category_id'] == $cate_id ? 'selected' : '').' value="'.$categories['category_id'].'">'.$categories['category_name'].'</option>';
                        }
                    ?>
                </select>
            </div>
            
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensanpham" value="<?= $product_name ?>">
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>
            
            <div class="row mb10">
                hinh anh<br>
                <input type="file" name="hinh" >
                <img src="../uploads/<?= $image ?>" alt="" width ="300">
                <!-- <span><?= $errHinhAnh ?></span> -->
            </div>

            <div class="row mb10">
                Mô tả<br>
                <input type="text" name="mota" value="<?= $description ?>">
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb10">
                size<br>
                <input type="text" name="size" value="<?= $size ?>">
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb10">
                So luong<br>
                <input type="text" name="soluong" value="<?= $quantity ?> ">
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb10">
                Mau sac<br>
                <input type="text" name="mausac" value="<?= $color ?>  " >
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>

            <div class="row mb10">
                Gia<br>
                <input type="text" name="gia" value="<?= $price ?>">
                <!-- <span><?= $errTieuDe ?></span> -->
            </div>
            
            
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $product_id ?>">
                <input type="submit" value="Cap nhat" name="capnhat">
                <input type="reset" name="" id="" value="Nhap lai">
                <a href="index.php?act=listpro"><input type="button" value="Danh sach" name="" id=""></a>
            </div>
            <?php if(isset($thongbao) && ($thongbao != "")){  echo $thongbao;  } ?>
        </form>
    </div>
</div>