<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'listdm':
                # code...
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            
            default:
                # code...
                break;
        }
    }
?>