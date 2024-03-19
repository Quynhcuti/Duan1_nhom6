<?php 
    function loadAll_cate(){
        $sql = "SELECT * FROM categories ORDER BY category_id ";
        $listDM = pdo_query($sql);
        return $listDM;

    }

?>