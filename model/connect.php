<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Kế nối thành công";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// //uodta
//     $maLoai=3;
//     $tenLoai="Laptop";

//     $sql ="UPDATE loai
//      SET tenLoai=? 
//      WHERE maLoai=?";
     
//      try{
//         $stmt = $conn->prepare($sql);
//         $stmt->execute(array($tenLoai, $maLoai));
//         echo"Cập nhật thành công";
//      }

//      catch(PDOException $e){
//         echo "lỗi cập nhật!";
//      }
//      finally{
//        // unset($conn);
//      }

//      // truy vấn
//      //lấy tất cả loại hàng đã nhập từ bảng loại

//      $sql="SELECT * FROM loai";
//     //  echo $sql;
//      $stmt = $conn->prepare($sql);
//      $stmt->execute();
//      $rows = $stmt->fetchAll();
//      //đọc và hiển thị ds trả về
//      foreach($rows as $row){
//         echo $row["tenLoai"]."<br>";

//      }

//      //truy vấn 1 giá trị
//        //lấy tên loại theo ãm loại

//      $sql="SELECT * FROM loai where maLoai=?";
//     //  echo $sql;
//      $stmt = $conn->prepare($sql);
//      $stmt->execute(array($maLoai));
//      $rows = $stmt->fetch();
//      //đọc và hiển thị ds trả về
//      echo $rows['tenLoai'];

//      unset($conn);
?>