<?php
    session_start();
    // unset($_SESSION['user']);
    require_once "config.php";
    include "model/pdo.php";
    include "model/category.php";
    include "model/product.php";
    include "model/user.php";
    include "model/cart.php";
    include "model/binhluan.php";
    include "view/header.php";
    

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $listdmtop3 = loadcate_limit();
    $dsdm = loadAll_cate();
    $dssp= loadAll_product();
    $listprotop4 = loadpro_limit();
    // $listspct = productByID($id);
    //controller
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
            case 'gioithieu':
                # code...
                break;
            case 'home':
                # code...
                include "view/home.php";
                break;
            case 'sanphamsearch':
                # code...
                if(isset($_POST['keyword']) && $_POST['keyword'] != "" ){
                    $keyword = $_POST['keyword'];
                    

                }else{
                    $keyword ="";
                }
                // die();
                if(isset($_POST['catalog']) && $_POST['catalog'] > 0){
                    $iddm = $_POST['catalog'];
                    // echo $iddm;
                }else{
                    $iddm = 0;
                }
                $listsearh = search_product($keyword,$iddm);
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                # code...
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)){
                    $id = $_GET['idsp'];
                    $listspct = productByID($id);
                    extract($listspct);
                    $sp_cungloai = load_sanpham_cungloai($product_id,$cate_id);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";
                }
                break;
                case 'dangky':
                    # code...
                    $fullname = '';
                    $username = '';
                    $password = '';
                    $phone = '';
    
                    $errFullname = '';
                    $errUsername = '';
                    $errPassword = '';
                    $errPhone = '';  
    
                    if(isset($_POST['dangki'])){
                        $fullname = $_POST['fullname'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $phone = $_POST['phone'];
                        // print_r([$fullname,$username,$password,$phone]);
                        // die();
                        $isCheck = true ;
                        
                        if(!$fullname){
                            $isCheck = false;
                            $errFullname = "Bạn không được bỏ trống họ tên";
                        }
    
                        if(!$username){
                            $isCheck = false;
                            $errUsername = "Bạn không được bỏ trống tài khoản";
                        }
    
                        if(!$password){
                            $isCheck = false;
                            $errPassword = "Bạn không được bỏ trống password";
                        }
    
                        if(!$phone){
                            $isCheck = false;
                            $errPhone = "Bạn không được bỏ trống số điện thoại";
                        }
    
                        if($isCheck){
                            $checkname = check_username($username);
                            // print_r($checkname);
                            // die();
                            if(is_array($checkname)){
                                // echo "tên không sử dụng được";
                                $thongbao = "tên user đã được sử dụng";
                                // nếu giá trị có tồn tại thì
                                // if(isset($username)){
                                //     // echo $username;
                                //     // die();
                                //     // $thongbao = "tên user đã được sử dụng";
                                //     echo "tên không sử dụng được";
                                // }else{
                                //     // echo $username;
                                //     // die();
                                //     // insert_user($username,$password,$fullname,$phone,'0');
                                //     // $thongbao1 = "đăng kí thành công";
                                //     echo "tên có thể sử dụng được";
                                // }
                            }else{
                                // echo "tên  sử dụng được";
                                insert_user($username,$password,$fullname,$phone,'0');
                                    $thongbao1 = "đăng kí thành công";
                                    
    
                            }
                            // header('Location: index.php');
                            // insert_user($username,$password,$fullname,$phone,'0');
                            // header('Location: index.php');
                        }
    
                        
                    }
                    include "view/register.php";
                    break;
                case 'dangnhap':
                    # code...
                    $fullname = '';
                    
                    $password = '';
                    
    
                    
                    $errUsername = '';
                    $errPassword = '';
                    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                        
                        $username = $_POST['user_name'];
                        $password = $_POST['pass'];
                        $isCheck = true ;
                        
                        if(!$username){
                            $isCheck = false;
                            $errUsername = "Bạn không được bỏ trống tài khoản";
                        }
    
                        if(!$password){
                            $isCheck = false;
                            $errPassword = "Bạn không được bỏ trống password";
                        }
                        // print_r($_POST);
                        // die();
                        if($isCheck){
                            $check_user = check_user($username,$password);
                            if(is_array($check_user)){
    
                                $_SESSION['user'] = $check_user;
                                header('Location: index.php');
                            }else{
                                $thongbao = "User name và password không chính xác";
                            }
                        }
                        
                        // die();
                    }
                    include "view/signin.php";
                    break;
                # code...
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    
                    $username = $_POST['user_name'];
                    $password = $_POST['pass'];
                    // print_r($_POST);
                    // die();
                    $check_user = check_user($username,$password);
                    if(is_array($check_user)){

                        $_SESSION['user'] = $check_user;
                        header('Location: index.php');
                    }else{
                        $thongbao = "User name và password không chính xác";
                    }
                    
                    // die();
                }
                include "view/signin.php";
                break;
            case 'edituser':
                # code...

                include "view/edituser.php";
                break;
            case 'updateuser':
                # code...
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $user_id = $_POST['id'];
                    $fullname = $_POST['fullname'];
                    $user_name = $_POST['username'];
                    $password = $_POST['password'];
                    $phone = $_POST['phone'];

                    // echo '<pre>';
                    // print_r($_POST);
                    // echo '</pre>';
                    if($_SESSION['user']['role'] == 0 ){
                        update_user1($user_name,$password,$fullname,$phone,$user_id);
                        $_SESSION['user'] = check_user($user_name,$password);
                        header('Location: index.php?act=updateuser');
                    }else{
                        update_user2($user_name,$password,$fullname,$phone,$user_id);
                        $_SESSION['user'] = check_user($user_name,$password);
                        header('Location: index.php?act=updateuser');
                    }
                    
                    // $thongbao = "Cập nhật thành công!";

                }
                include "view/edituser.php";
                break;
            case 'thoat':
                # code...
                session_unset();
                header('Location: index.php');
                break;
            case 'addtocart':
                # code...
                // unset($_SESSION['mycart']);
                if(isset($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $name  = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    // $quantity = $_POST['quantity'];
                    if(isset($_POST['quantity']) && ($_POST['quantity'])>0){
                        $quantity = $_POST['quantity'];
                    }else{
                        $quantity = 1;
                    }
                    $temp = 0;
                    if (!isset($_SESSION['mycart'])){
                        $_SESSION['mycart'] = [];
                    }else {
                        // $i=0;
                        foreach($_SESSION['mycart'] as $cart){
                            if($cart['name'] == $name){
                                $temp = 1;
                                //$quantity = $quantity+$_SESSION['mycart'][$id][''];
                                $_SESSION['mycart']["$id"]['quantity'] += $quantity;
                                break;
                            }
                            // $i++;
                            // echo $cart['name']  . "DDDDDDDDDDD<br />";
                        }
                    }
                    
                    
                    if($temp == 0){
                        $spadd = [
                            'id'=>$id,'name'=>$name,'img'=>$img,'price'=>$price,'quantity'=>$quantity
                        ];
                        // $_SESSION['mycart'];
                        $_SESSION['mycart']["$id"] = $spadd;
                    }
                }
                // echo "<pre>";
                // var_dump($_SESSION['mycart']);die;
                include "view/giohang.php";
                break;
            case 'delcart':
                # code...
                if(isset($_GET['index']) && ($_GET['index'] >= 0)){
                    $id = $_GET['index'];
                    // echo $id;
                    // die();
                    // array_slice($_SESSION['mycart'],$_GET['index'],1);
                    unset($_SESSION['mycart'][$id]);
                    header('Location: index.php?act=viewcart');
                }
                
                break;
            case 'viewcart':
                include "view/giohang.php";
                # code...
                break;
            case 'bill':
                include "view/bill.php";
                # code...
                break;
            case 'billcomfirm':
                # code...
                if(isset($_POST['dathang']) && $_POST['dathang']){
                    $name = $_POST['fullname'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $payement = $_POST['payment'];
                    $price = $_POST['tong'];
                    $id = $_POST['product'];
                    $ngaydh = date('Y-m-d');
                    // die();
    
                    // print_r($_POST);
                    // die();
                    if(isset($_SESSION['user'])){
                        $billid_user = insert_bill($name,$address,$phone,$price,$payement,'0',$ngaydh,$_SESSION['user']['user_id']);
                        foreach($_SESSION['mycart']  as $key => $cart){
                            $id_product = $key;
                            insert_bill_detail($cart['price'],$cart['quantity'],$id_product,$billid_user);
                        }
                        
                    }else{
                        $billid_user = insert_bill($name,$address,$phone,$price,$payement,'0',$ngaydh,'');
                        foreach($_SESSION['mycart']  as $key => $cart){
                            $id_product = $key;
                            insert_bill_detail($cart['price'],$cart['quantity'],$id_product,$billid_user);
                        }
                    }
                    $_SESSION['mycart'] = [];
                }
                // die();
                $bill = BillByID($billid_user);
                $bill_detail = bill_detail_ByID($billid_user);
                include "view/billcofirm.php";
                break;
            case 'mybill':
                # code...

                $listBill = bill_detail_User_id($_SESSION['user']['user_id']);
                include "view/viewbill.php";
                break;
            case 'bill_detail':
                # code...
                $listBill = bill_detail_User_id($_SESSION['user']['user_id']);
                include "view/billdetail.php";
                break;
            default:
                # code...
                break;
        }
    }else {
        # code...
        include "view/home.php";
    }
    
    include "view/footer.php";
    



?>