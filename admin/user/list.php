<?php
    // echo '<pre>';
    // print_r($listbill);
    // echo '</pre>';

?>

<div class="row">
    <div class="row-frmtitle">
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
    </div>
    
    <div class="row frmcontent">
        <div class="row form-dsLoai">
            <table border style="margin-top: 10px;">
                    <tr>
                        <th>Mã khách hàng</th>
                        <th>Tên user</th>
                        <th>Mật khẩu</th>
                        <th>Họ và tên</th>
                        <th>Số diện thoại</th>
                        <th>Vai trò</th>
                        
                    </tr>
                    
                    <?php 
                        foreach($listuser as $user){
                            extract($user);
                            // print_r($listdm);
                            
                            echo '<tr>
                                    <td>'.$user_id.'</td>
                                    <td>'.$user_name.'</td>
                                    <td>'.$password.'</td>
                                    <td>'.$fullname.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$role.'</td>
                                    
                                </tr>';
                        }
                    ?>
            </table>
        </div>
        

    </div>
</div>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa?");
    }
</script>
<style>
    table{
        border-collapse: collapse;
    }
</style>

