<?php

    function loadAll_product(){
        $sql = "SELECT product_id,product_name,image,description,view,size,quantity,color,price,category_name,category_id  FROM products INNER JOIN categories WHERE products.cate_id = categories.category_id ORDER BY product_id ";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadpro_limit(){
        $sql = "SELECT * FROM products LIMIT 0,4";
        $listpro_limit = pdo_query($sql);
        return $listpro_limit;
    }

    function insert_product($product_name,$filename,$description,$size,$quantity,$color,$price,$cate_id){
        $sql = "INSERT INTO products (	product_name,image,description,view,size,quantity,color,price,cate_id)
                VALUES ('$product_name','$filename','$description',0,'$size','$quantity','$color','$price','$cate_id')";
        pdo_execute($sql);
    }


    function productByID($id){
        $sql = "SELECT * FROM  products WHERE product_id = '$id'";
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }

    function update_product1($product_id,$product_name,$filename,$description,$size,$quantity,$color,$price,$cate_id){
        $sql = "UPDATE products SET product_name = '$product_name',image = '$filename',description = '$description',size = '$size',quantity = '$quantity',color = '$color',price = '$price',cate_id = '$cate_id'  WHERE product_id = '$product_id'";
        pdo_execute($sql);
    }

    function update_product2($product_id,$product_name,$description,$size,$quantity,$color,$price,$cate_id){
        $sql = "UPDATE products SET product_name = '$product_name',description = '$description',size = '$size',quantity = '$quantity',color = '$color',price = '$price',cate_id = '$cate_id'  WHERE product_id = '$product_id'";
        pdo_execute($sql);
    }

    function delete_product($id){
        $sql = "DELETE FROM products  WHERE product_id ='$id'";
        pdo_execute($sql);

    }

    
    function search_product($name = "",$id = 0){
        $sql = "SELECT * FROM products p INNER JOIN categories c ON p.cate_id = c.category_id WHERE 1";
        if($name != "" && $id > 0) {
            $sql .= " and p.product_name LIKE '%$name%' and c.category_id = '$id'";
        }else if($name != ""){
            $sql .= " and p.product_name LIKE '%$name%' ";
        }else if($id > 0){
            $sql .= " and c.category_id = '$id'";
        }
        $listsearch = pdo_query($sql);
        return $listsearch;
    }

    function catalog_product($id){
        $sql = "SELECT * FROM products INNER JOIN categories ON products.cate_id = categories.category_id WHERE products.cate_id = categories.'$id' ";
        $listcate = pdo_query($sql);
        return $listcate;
    }

    function load_sanpham_cungloai($product_id,$cate_id){
        $sql = "SELECT * FROM products WHERE cate_id=".$cate_id." AND product_id <> ".$product_id;
        // echo $sql;
        // die();
        $dssp = pdo_query($sql);
        return $dssp;
    }
?>