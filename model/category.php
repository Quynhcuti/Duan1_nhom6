<?php 
    function loadAll_cate(){
        $sql = "SELECT * FROM categories ORDER BY category_id  ";
        $listDM = pdo_query($sql);
        return $listDM;
    }

    function loadcate_limit(){
        $sql = "SELECT * FROM categories LIMIT 0,3";
        $listcatetop3 = pdo_query($sql);
        return $listcatetop3;
    }
    function insert_cate($name){
        $sql = "INSERT INTO categories (category_name)
                VALUES ('$name')";
        pdo_execute($sql);
    }

    function update_cate($id,$name){
        $sql = "UPDATE categories SET category_name = '$name' WHERE category_id = '$id' ";
        pdo_execute($sql);
    }

    function cateById($id){
        $sql = "SELECT * FROM categories WHERE category_id = '$id'";
        $cate = pdo_query_one($sql);
        return $cate;
    }
    
?>