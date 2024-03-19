<?php
    session_start();
    include "../model/pdo.php"; 
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/tintuc.php";
    include "../model/sach.php";
    include "header.php";

    //controller
    //nếu đnăg nhập tc
    if(isset($_SESSION["user"])){

        if(isset($_GET["act"])){
            $act = $_GET["act"];
                switch($act){
                case 'adddm':
                    //kiểm tra ng dùng có click vào nút add hay k
                    if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                        $tenLoai = $_POST["tenLoai"];
                        insert_danhmuc($tenLoai);
                        $notify = "Thêm thành công";
                    }
                    include "danhmuc/add.php";  
                    break;
                // case 'adddm':
                //     //kiểm tra ng dùng có click vào nút add hay k
                //     if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                //         $tenLoai = $_POST["tenLoai"];
                //         // insert_danhmuc($tenLoai);
                //         $sql= "SELECT * FROM danhmuc WHERE tenDanhMuc='$tenLoai'";
                //         echo $sql;
                //         die();
                //         $result= $conn->query($sql);
                //         if($result->num_rows > 0){
                //             $notify = "Danh mục đã tồn tại!";
                //         }else{
                //             $sql = "INSERT INTO danhmuc(tenDanhMuc) VALUES ('$tenLoai')";
                //             if($conn->query($sql) == true){
                //                 $notify = "Thêm thành công";
                //             }else{
                //                 echo "Lỗi "; 
                //             }
                            
                //         }
                        
                //     }
                    
                //     include "danhmuc/add.php";  
                //     break;
                case 'listdm':
                    $dsdm = load_all_danhmuc();
                    include "danhmuc/list.php";  
                    break;
                case 'delDM':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        del_danhmuc($_GET['id']);      
                    }
                    $dsdm = load_all_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case 'editDM':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $dm=load_one_danhmuc($_GET['id']);
                        
                    }
                    include "danhmuc/update.php";
                    break;
                case 'updateDM':
                    if(isset($_POST["capnhat"]) && ($_POST["capnhat"])){
                        $tenLoai = $_POST["tenLoai"];
                        $id = $_POST["id"];
                        update_danhmuc($id,$tenLoai);
                        $notify = "Cập nhật thành công";
                    }
                    $dsdm = load_all_danhmuc();
                    include "danhmuc/list.php";
                    break;

                /* sản phẩm */

                case 'addsp':
                    $isCheck = true;
                    //kiểm tra ng dùng có click vào nút add hay k
                    if(isset($_POST["themmoi"]) && ($_POST["themmoi"])){
                        // echo "<pre>";
                        // print_r($_POST);
                        // die();
                        $iddm = $_POST["iddm"];
                        $name = $_POST["name"];
                        $price = $_POST["price"];
                        $moTa = $_POST["moTa"];
                        $hinh = $_FILES["hinh"]["name"];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        }else {
                        //    echo "Sorry, there was an error uploading your file.";
                        }
                        insert_sanpham($name,$price,$hinh,$moTa,$iddm);
                        $notify = "Thêm thành công";
                    }
                    $dsdm = load_all_danhmuc();
                    include "sanpham/add.php";  
                    break;
                case 'listsp':
                    if(isset($_POST["listTIM"]) && ($_POST["listTIM"])){
                        $kyw=$_POST["kyw"];
                        $iddm=$_POST["iddm"];
                    }else{
                        $kyw ='';
                        $iddm=0;
                    }
                    $dsdm = load_all_danhmuc();
                    $dssp = load_all_sanpham($kyw,$iddm);
                    include "sanpham/list.php";  
                    break;
                case 'delSP':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        del_sanpham($_GET['id']);                   
                    }
                    $dssp = load_all_sanpham("",0);
                    include "sanpham/list.php";
                    break;
                case 'editSP':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $sanpham=load_one_sanpham($_GET['id']);
                    }

                    $dsdm = load_all_danhmuc();
                    include "sanpham/update.php";
                    break;
                case 'updateSP':
                    if(isset($_POST["capnhat"]) && ($_POST["capnhat"])){
                        // echo "<pre>";
                        // print_r($_POST);
                        // die();

                        $id = $_POST["id"];
                        $iddm = $_POST["iddm"];
                        $name = $_POST["name"];
                        $price = $_POST["price"];
                        $moTa = $_POST["moTa"];
                        $hinh = $_FILES["hinh"];

                        // echo "<pre>";
                        // print_r([$id,$iddm,$name,$price,$moTa,$hinh]);
                        // die();
                        $filename = $hinh['name'];
                        if($filename){
                            $filename = time().$filename;
                            $dir = "../uploads/$filename";
                            
                            if(move_uploaded_file($hinh['tmp_name'], $dir)){
                                $sql = "UPDATE sanpham SET name='$name',price ='$price',img= '$filename',moTa='$moTa',iddm='$iddm' WHERE id = $id";
                                // echo $sql;
                                // die();
                                pdo_execute($sql);
                            }
                        }else{
                            $sql = "UPDATE sanpham SET name='$name',price ='$price',moTa='$moTa',iddm='$iddm' WHERE id = $id";
                            pdo_execute($sql);
                            

                        }
                        // $hinh = $_FILES["hinh"]["name"];
                        // $target_dir = "../uploads/";
                        // $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        // if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //     // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        // }else {
                        // //    echo "Sorry, there was an error uploading your file.";
                        // }
                        // update_sanpham($id,$iddm,$name,$price,$moTa,$hinh);
                        $notify = "Cập nhật thành công";
                    }
                    $dsdm = load_all_danhmuc();
                    $dssp = load_all_sanpham("",0);
                    include "sanpham/list.php";
                    break;
                case 'dskh':

                    $dstk = load_all_taikhoan();
                    include "taikhoan/list.php";
                    break;
                //bình luận
                case 'dsbl':
                    $dsbl=load_all_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'delBL':

                    if (isset($_GET['id']) && ($_GET['id'])) {
                    delete_binhluan($_GET['id']);
                    }
                    $dsbl = load_all_binhluan("");
                    include "binhluan/list.php";
                    break;
                //tin tức
                case 'addtintuc':
                        $errTieuDe='';
                        $errNoiDung='';
                        $errHinhAnh='';
                        $isCheck = true;

                        $tieude ='';
                        $noidung='';
                        $filename='';
                        $iddm='';
                    if(isset($_POST['themmoi']) && $_POST['themmoi']){
                        // echo "<pre>";
                        // print_r($_POST);
                        // print_r($_FILES);

                        $tieude= $_POST["tieude"];
                        $noidung= $_POST["noidung"];
                        $filename= $_FILES["hinh"]["name"];
                        $iddm= $_POST["iddm"];

                        // print_r([$tieude,$noidung,$filename,$iddm]);

                        //validate 
                        if(!$tieude){ 
                            $isCheck = false;
                            $errTieuDe = "Bạn không được để trống tiêu đề";
                        }
                        if(!$noidung){ 
                            $isCheck = false;
                            $errNoiDung = "Bạn không được để trống nội dung";
                        }
                        if(!$filename){ 
                            $isCheck = false;
                            $errHinhAnh = "Bạn không được để trống ảnh";
                        }

                        if($isCheck){
                            $filename = time().$filename;
                            $target_dir = "../uploads/";
                            $target_file = $target_dir.basename($filename);
                            // echo $target_file;
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                                // $notify = "upload ảnh thành công";
                                insert_tintuc($tieude,$noidung,$filename,$iddm);
                                $notify = "Thêm thành công";
                            }else{
                                $notify = "upload lỗi";
                            }

                        }
                    
                    }
                    $listdanhmuc = loadAll_DanhMucTinTuc();
                    include "tintuc/add.php";
                    
                    break;
                case 'listtintuc':
                    $listTinTuc = loadAll_TinTuc();
                    include "tintuc/list.php";
                    break;
                case 'editTT':
                    $errTieuDe='';
                    $errNoiDung='';
                    $errHinhAnh='';
                    $isCheck = true;

                    $tieu_de ='';
                    $noi_dung='';
                    $filename='';
                    $id_danh_muc='';

                    if(isset($_GET["id"]) && $_GET["id"] > 0){
                        $id = $_GET["id"];
                        // echo $id;
                        $tintuc= loadTinTucById($id);
                        
                    }
                    $listdanhmuc = loadAll_DanhMucTinTuc();
                    
                    include "tintuc/update.php";
                    break;
                case 'updateTT':

                    $errTieuDe='';
                    $errNoiDung='';
                    $errHinhAnh='';
                    $isCheck = true;

                    $tieu_de ='';
                    $noi_dung='';
                    $filename='';
                    $id_danh_muc='';

                    
                    if(isset($_POST["capnhat"]) && $_POST["capnhat"]){

                        $tieu_de= $_POST["tieude"];
                        $noi_dung= $_POST["noi_dung"];
                        $filename= $_FILES["hinh"]["name"];
                        $id_danh_muc= $_POST["iddm"];
                        $id = $_POST["id"];
                        // print_r([$tieu_de,$noi_dung,$filename,$id_danh_muc]);

                        //validate 
                        if(!$tieu_de){ 
                            $isCheck = false;
                            $errTieuDe = "Bạn không được để trống tiêu đề";
                        }
                        if(!$noi_dung){ 
                            $isCheck = false;
                            $errNoiDung = "Bạn không được để trống nội dung";
                        }
                        // if(!$filename){ 
                        //     $isCheck = false;
                        //     $errHinhAnh = "Bạn không được để trống ảnh";
                        // }

                        if($isCheck){
                            // người dùng thay đổi img
                            if(!$filename){
                                update_tintucTh1($id,$tieu_de,$noi_dung,$id_danh_muc);
                                    $notify = "Sửa thành công"; 
                            }else{
                                // NGười dùng khong thay đổi img
                                $filename = time().$filename;
                                $target_dir = "../uploads/";
                                $target_file = $target_dir.basename($filename);
                                // echo $target_file;
                                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                                    // $notify = "upload ảnh thành công";
                                    update_tintucTh2($id,$tieu_de,$noi_dung,$filename,$id_danh_muc);
                                    $notify = "Sửa thành công";
                                }else{
                                    $notify = "upload lỗi";
                                }
                            }
                            
                        }
                    }
                    $listdanhmuc = loadAll_DanhMucTinTuc();
                    $listTinTuc = loadAll_TinTuc();
                    include "tintuc/list.php";
                    break;

                case 'delTT':
                    if(isset($_GET['id']) && ($_GET['id'])){
                        delete_tintuc($_GET['id']);
                    }

                //sách
                case 'addsach':
                    $errTenSach='';
                    $errGia='';
                    $errHinhAnh='';
                    $errMoTa='';
                    $isCheck = true;

                    $tensach ='';
                    $gia='';
                    $filename='';
                    $moTa='';
                    $iddm='';
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    // echo "<pre>";
                    // print_r($_POST);
                    // print_r($_FILES);

                    $tensach= $_POST["tensach"];
                    $filename= $_FILES["hinh"]["name"];
                    $gia= $_POST["gia"];
                    $moTa= $_POST["moTa"];
                    $iddm= $_POST["iddm"];

                    // print_r([$tensach,$filename,$gia,$moTa,$iddm]);

                    //validate 
                    if(!$tensach){ 
                        $isCheck = false;
                        $errTenSach = "Bạn không được để trống tên sách";
                    }
                    
                    if(!$filename){ 
                        $isCheck = false;
                        $errHinhAnh = "Bạn không được để trống ảnh";
                    }
                    if(!$gia){ 
                        $isCheck = false;
                        $errGia = "Bạn không được để trống giá";
                    }
                    if(!$moTa){ 
                        $isCheck = false;
                        $errMoTa = "Bạn không được để trống mô tả";
                    }
                    if($isCheck){
                        $filename = time().$filename;
                        $target_dir = "../uploads/";
                        $target_file = $target_dir.basename($filename);
                        // echo $target_file;
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                            // $notify = "upload ảnh thành công";
                            insert_sach($tensach,$filename,$gia,$moTa,$iddm);
                            $notify = "Thêm thành công";
                        }else{
                            $notify = "upload lỗi";
                        }

                    }
                
                }
                $listdanhmuc = loadAll_DanhMucNhaXB();
                include "sach/add.php";
                break;
                case 'listsach':
                    $listS= loadAll_Sach();
                    include "sach/list.php";
                    break;
                case 'updateS':

                    $errTenSach='';
                    $errGia='';
                    $errHinhAnh='';
                    $errMoTa='';
                    $isCheck = true;

                    $tensach ='';
                    $gia='';
                    $filename='';
                    $moTa='';
                    $id_nha_xuatban='';

                    
                    if(isset($_POST["capnhat"]) && $_POST["capnhat"]){

                        $tensach= $_POST["tensach"];
                        $gia= $_POST["gia"];
                        $filename= $_FILES["hinh"]["name"];
                        $id_nha_xuatban= $_POST["iddm"];
                        $id = $_POST["id"];
                        

                        //validate 
                        if(!$tensach){ 
                            $isCheck = false;
                            $errTenSach = "Bạn không được để trống tên sách";
                        }
                        
                        if(!$filename){ 
                            $isCheck = false;
                            $errHinhAnh = "Bạn không được để trống ảnh";
                        }
                        if(!$gia){ 
                            $isCheck = false;
                            $errGia = "Bạn không được để trống giá";
                        }
                        if(!$moTa){ 
                            $isCheck = false;
                            $errMoTa = "Bạn không được để trống mô tả";
                        }

                        if($isCheck){
                            // người dùng thay đổi img
                            if(!$filename){
                                update_STh1($id,$ten_sach,$id_nha_xuatban,);
                                    $notify = "Sửa thành công"; 
                            }else{
                                // NGười dùng khong thay đổi img
                                $filename = time().$filename;
                                $target_dir = "../uploads/";
                                $target_file = $target_dir.basename($filename);
                                // echo $target_file;
                                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                                    // $notify = "upload ảnh thành công";
                                    update_tintucTh2($id,$tieu_de,$noi_dung,$filename,$id_danh_muc);
                                    $notify = "Sửa thành công";
                                }else{
                                    $notify = "upload lỗi";
                                }
                            }
                            
                        }
                    }
                    $listdanhmuc = loadAll_DanhMucTinTuc();
                    $listTinTuc = loadAll_TinTuc();
                    include "tintuc/list.php";
                    break;
                case 'delS':
                    if(isset($_GET['id']) && ($_GET['id'])){
                        delete_sach($_GET['id']);
                    }
                    $listS= loadAll_Sach();
                    include "sach/list.php";
                    break;
                default:
                    include "home.php";
                    break;
            }
        }else{
            include "home.php";
        }
    }else{
        include "home.php";
    }


    include "footer.php";
?>