<?php
    function insert_binhluan($content,$user_id,$product_id,$create_at){
        $sql = "INSERT INTO comment(content,user_id,product_id,create_at) VALUES ('$content','$user_id','$product_id','$create_at')";
        pdo_execute($sql);
    }

    function load_all_binhluan($product_id){
        $sql = "SELECT * FROM comment where 1";
        if($product_id>0) $sql.=" AND product_id='".$product_id."'";
        $dsbl = pdo_query($sql);
        return $dsbl;
    }

    function delete_binhluan($comment_id){
        $sql = "DELETE FROM comment where comment_id=".$comment_id;
        pdo_execute($sql);
    }
?>
