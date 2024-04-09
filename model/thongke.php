<?php
    function san_pham_chay(){
        $sql = "SELECT product_id, product_name, image, SUM(bill_detail.quantity_detail)  tongsoluongban FROM bill_detail INNER JOIN products ON bill_detail.product_id_bill_detail = products.product_id GROUP BY product_id_bill_detail";
        $listbanchay = pdo_query($sql);
        return $listbanchay;
    }

    function san_pham_view(){
        $sql = "SELECT product_id,product_name, image, MAX(view) soluotxem FROM products ";
        $list2= pdo_query($sql);
        return $list2;
    }

?>