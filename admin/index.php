<?php
    require_once "../config.php";
    include "../model/pdo.php";
    include "../model/category.php";
    include "../model/product.php";
    include "../model/binhluan.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            // case 'adddm':
            //     break;
            case 'addcate':
                # code...
                $errTenLoai = '';
                $tenLoai = '';
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    //kiem tra
                    // echo "<pre>";
                    // print_r($_POST);
                    // print_r($_FILES);
                
                    $tenLoai= $_POST['tenloai'];
                    insert_cate($tenLoai);
                    $thongbao = "them thanh cong";
                }
                include "categories/add.php";
                break;
            case 'listcate':
                # code...
                $listdm = loadAll_cate();
                include "categories/list.php";
                break;
            case 'editcate':
                # code...
                if(isset($_GET['category_id']) && $_GET['category_id'] > 0 ){
                    $id = $_GET['category_id'];
                    echo $id;
                    $cate = cateById($id);
                }
                include "categories/update.php";
                break;
            case 'updatecate':
                # code...
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $id = $_POST['id'];
                    $tenLoai = $_POST['tenloai'];
                    update_cate($id,$tenLoai);
                    $thongbao = "cap nhat thanh cong";
                }
                $listdm = loadAll_cate();
                include "categories/list.php";
                break;
            case 'addpro':
                # code...
                if(isset($_POST['themmoi']) && $_POST['themmoi'] ){
                    $tensanpham = $_POST['tensanpham'];
                    $filename = $_FILES['hinh']['name'];
                    $mota = $_POST['mota'];
                    $size= $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $mausac = $_POST['mausac'];
                    $gia = $_POST['gia'];
                    $cate_id = $_POST['iddm'];

                    // print_r($_POST);
                    // die();
                    if($filename){
                        $filename = time().$filename;
                        $target_dir = "../uploads/";
                        $target_file = $target_dir.basename($filename);

                        if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                            insert_product($tensanpham,$filename,$mota,$size,$soluong,$mausac,$gia,$cate_id);
                            $thongbao = 'them du lieu thanh cong';
                        }else{
                            $thongbao = 'loi';
                        }
                    }

                }
                $listdm = loadAll_cate();
                // include "categories/list.php";
                include "products/add.php";
                break;
            case 'listpro':
                # code...
                $listsp = loadAll_product();
                include "products/list.php";
                break;
            case 'editpro':
                # code...
                if(isset($_GET['id']) && $_GET['id'] > 0 ){
                    $id = $_GET['id'];
                    // echo $id;
                    $sanpham = productByID($id);
                }
                $listdm = loadAll_cate();
                include "products/update.php";
                break;
            case 'updatepro':
                # code...
                if(isset($_POST['capnhat']) && $_POST['capnhat'] ){
                    $product_id = $_POST['id'];
                    $product_name = $_POST['tensanpham'];
                    $filename = $_FILES['hinh']['name'];
                    $description = $_POST['mota'];
                    $size= $_POST['size'];
                    $quantity = $_POST['soluong'];
                    $color = $_POST['mausac'];
                    $price = $_POST['gia'];
                    $cate_id = $_POST['iddm'];

                    // print_r($_POST);
                    // print_r($_POST);
                    // die();
                    if($filename){
                        $filename = time().$filename;
                        $target_dir = "../uploads/";
                        $target_file = $target_dir.basename($filename);

                        if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                            update_product1($product_id,$product_name,$filename,$description,$size,$quantity,$color,$price,$cate_id);
                            $thongbao = 'them du lieu thanh cong';
                        }else{
                            $thongbao = 'loi';
                        }
                    }else{
                        update_product2($product_id,$product_name,$description,$size,$quantity,$color,$price,$cate_id);
                        $thongbao = 'them du lieu thanh cong';
                    }
                }
                $listsp = loadAll_product();
                include "products/list.php";
                break;

            case 'deletepro':
                # code...
                if(isset($_GET['id']) && $_GET['id']){
                    $id = $_GET['id'];
                    // echo $id;
                    // die();
                    delete_product($id);
                }
                $listsp = loadAll_product();
                include "products/list.php";
                break;
           case 'dsbl':
                    $dsbl=load_all_binhluan(0);
                    include "binhluan/list.php";
                    break;
            case 'delBL':
                if (isset($_GET['comment_id']) && ($_GET['comment_id'])) {
                    delete_binhluan($_GET['comment_id']);
                }
                $dsbl = load_all_binhluan("");
                include "binhluan/list.php";
                break;
            default:
                # code...
                break;
        }
    }


?>