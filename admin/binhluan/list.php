<div class="row">
    <div class="row form-title">
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
    <div class="row form_content">
       
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
                    foreach ($dsbl as $binhluan) {
                        extract($binhluan);
                        $editBL = "index.php?act=editBL&id=" . $id;
                        $delBL = "index.php?act=delBL&id=" . $id;
                        
                        echo '<tr>
                               <td><input type="checkbox"></td>
                               <td>' . $id . '</td>
                               <td>' . $noidung . '</td>
                               <td>' . $iduser . '</td>
                               <td>' . $idpro . '</td>
                               <td>' . $ngaybinhluan . '</td>
                               <td><a href="' . $delBL. '" ><input onclick="return confirmDelete();" type="button" value="Xóa"></a> </td>
                               
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