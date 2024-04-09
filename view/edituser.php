<div class="boxcontent">
    <?php
        if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
    ?>
    <form action="index.php?act=updateuser" method="post">
        <div class="form-signin">
            <div class="row1">
                Họ tên
                <input type="text" name="fullname"  value=<?= $fullname ?>>
            </div>
            <div class="row1">
                Tài khoản
                <input type="text" name="username" value=<?= $user_name ?>  >
            </div>
            <div class="row1">
                Mật khẩu
                <input type="password" name="password" value=<?= $password ?>>
            </div>
            <div class="row1">
                Số điện thoại
                <input type="text" name="phone" value=<?= $phone ?>>
            </div>
            <div class="button2">
                <input type="hidden" name="id" value=<?= $user_id ?>>
                <input type="submit" value="Cập nhật" name="capnhat">
            </div>
        </div>
    </form>
    <span class="thongbao"><?= isset($thongbao)?$thongbao:""; ?></span>
    
</div>

