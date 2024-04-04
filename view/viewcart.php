<?php
    // unset($_SESSION['mycart']);
?>
<table border >
    <tr>
        <th>Hinh</th>
        <th>Ten san pham</th>
        <th>Don gia</th>
        <th>so luong</th>
        <th>tong tien</th>
        <th>Thao tac</th>
    </tr>
    <?php
        echo '<pre>';
        print_r($_SESSION['mycart']);
        echo '</pre>';

    ?>
    
    <td><a href=""></a></td>
    <?php
        $i = 0;
        $tt = 0;
        $tongtien = 0;
        foreach($_SESSION['mycart'] as $index => $cart){
            $tongtien = $cart['price'] * $cart['quantity'];
            $delcart = "index.php?act=delcart&index=".$index;
            $tt ;
            echo '
                <tr>
                    <td><img src="uploads/'.$cart['img'].'" alt="" width="300"></td>
                    <td>'.$cart['name'].'</td>
                    <td>'.$cart['price'].'</td>
                    <td>'.$cart['quantity'].'</td>
                    <td>'.$tongtien.'</td>
                    <td><a href="'.$delcart.'"><input type="button" value="xóa"></a></td>
                    
                </tr>
            ';
            $i++;
        }

        echo '<td><a href="index.php?act=bill">Đồng ý đặt hàng</a></td>';
    
    ?>

    
</table>
