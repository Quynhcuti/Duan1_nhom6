<?php
    include "header.php";   
    include "../model/pdo.php";
    include "../model/category.php";
    
    

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'listcate':
                # code...
                $listDM = loadAll_cate();
                include "categories/list.php";
                break;
            
            default:
                # code...
                break;
        }
    }

?>