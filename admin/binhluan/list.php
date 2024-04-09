<div class="row">
    <div class="row-frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <!-- <script>
        function confirmDelete() {
            var x = confirm("Bạn có chắc chắn muốn bình luận này không?");
            if (x) {
                // Nếu người dùng chọn "OK", thực hiện hành động xóa
                window.location.href = 'index.php?act=dsbl'; // Điều hướng đến trang xóa
            } else {
                // Nếu người dùng chọn "Cancel" hoặc đóng hộp thoại, không làm gì cả
            }
        }
    </script> -->
    <div class="row frmcontent">
       
            <div class="row form-dsLoai">
                <table style="margin-top: 10px;">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung</th>
                        <th>Id user</th>
                        <th>Id pro</th>
                        <th>Ngày bình luận</th>
                        <th></th>

                    </tr>
                    <?php
                    foreach ($dsbl as $comment) {
                        extract($comment);
                        $editBL = "index.php?act=editBL&comment_id=".$comment_id;
                        $delBL = "index.php?act=delBL&comment_id=".$comment_id;
                        
                        echo '<tr>
                               <td><input type="checkbox"></td>
                               <td>'.$comment_id.'</td>
                               <td>'.$content.'</td>
                               <td>'.$id_user.'</td>
                               <td>'.$id_product.'</td>
                               <td>'.$create_at.'</td>
                               <td><a href="'.$delBL.'" ><input onclick="return confirmDelete();" type="button" value="Xóa"></a> </td>
                               
                           </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">

            </div>
            <div class="row mb10">
                
            </div>
        </form>
    </div>
</div>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa?");
    }
</script>