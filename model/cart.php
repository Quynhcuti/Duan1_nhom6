<?php
    function insert_bill($fullname,$address,$phone,$total_price,$payment,$status,$create_at,$user_id_bill){
        $sql = "INSERT INTO bill (fullname,	address, phone, total_price, payment,status,create_at,user_id_bill)
                VALUES ('$fullname','$address','$phone','$total_price','$payment',0,'$create_at','$user_id_bill')";
        // echo '<pre>';
        // echo $sql;
        // echo '</pre>';

        // die();
        return pdo_execute_return_lastInsertID($sql);
    }

    function insert_bill_user_id($fullname,$address,$phone,$total_price,$payment,$status,$user_id){
        $sql = "INSERT INTO bill (fullname, address, phone, total_price, payment,status, user_id)
                VALUES ('$fullname','$address','$phone','$total_price','$payment','0','$user_id')";
        // echo '<pre>';
        // echo $sql;
        // echo '</pre>';

        // die();
        return pdo_execute_return_lastInsertID($sql);
    }

    function insert_bill_detail($price,$quantity,$product_id,$bill_id){
        $sql = "INSERT INTO bill_detail (price_detail,quantity_detail, product_id_bill_detail ,id_bill)
                VALUES ('$price','$quantity','$product_id','$bill_id')";
        // echo '<pre>';
        // echo $sql;
        // echo '</pre>';

        // die();
        return pdo_execute($sql);
    }

    function BillByID($id){
        $sql = "SELECT * FROM  bill WHERE bill_id = '$id'";
        $bill = pdo_query_one($sql);
        return $bill;
    }

    // function bill_detail_ByID($id){
    //     $sql = "SELECT * FROM  bill_detail WHERE bill_id = '$id'";
    //     $bill = pdo_query_one($sql);
    //     return $bill;
    // }

    function bill_detail_ByID($id){
        $sql = "SELECT price_detail,quantity_detail, image,product_name  FROM  bill_detail INNER JOIN products ON bill_detail.product_id_bill_detail = products.product_id  WHERE id_bill = '$id'";
        // echo '<pre>';
        // echo $sql;
        // echo '</pre>';

        // die();
        $bill = pdo_query($sql);
        return $bill;
    }

    function loadAll_bill($phone = ""){
        $sql = "SELECT * FROM  bill WHERE 1";
        if($phone != ""){
            $sql .= " and phone = '$phone' ";
        }
        $bill = pdo_query($sql);
        return $bill;
    }

    function bill_detail_User_id($id){
        $sql = "SELECT bill_id, price_detail, quantity_detail, image, product_name, status, payment, create_at, address, fullname, phone FROM  bill_detail INNER JOIN bill ON bill_detail.id_bill = bill.bill_id INNER JOIN products ON bill_detail.product_id_bill_detail = products.product_id WHERE user_id_bill = '$id'";
        // echo '<pre>';
        // echo $sql;
        // echo '</pre>';

        // die();
        $bill = pdo_query($sql);
        return $bill;
    }
?>