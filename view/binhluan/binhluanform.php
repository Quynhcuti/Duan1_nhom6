<?php
    // session_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $user_id=$_SESSION["user"]["comment_id"];
    $product_id=$_REQUEST["product_id"];
    $dsbl=load_all_binhluan($comment_id);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }
        .binhluan table td:nth-child(1) {
            width: 50%;
        }
        .binhluan table td:nth-child(2) {
            width: 20%;
        }
        .binhluan table td:nth-child(3) {
            width: 30%;
        }   

    </style>
</head>
<body>
    <div class="row mb ">
        <div class="boxtitle ">BÌNH LUẬN</div>
        <div class="boxcontent-binhluan">
            <table> 
                <?php
                    foreach ($dsbl as $comment) {
                        extract($comment);
                        echo '<tr><td>'.$content.'</td>';
                        echo '<td>'.$user_id.'</td>';
                        echo '<td>'.$create_at.'</td></tr>';
                    }
                ?>
            </table>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="product_id" value="<?=$product_id?>">
                <input type="text" name="noidung" >
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
            if(isset($_POST["guibinhluan"])&&($_POST["guibinhluan"])){
                $content=$_POST["content"];
                $product_id=$_POST["product_id"];
                $user_id=$_SESSION["user"]["comment_id"];
                $create_at=date("h:i:sa d/m/Y");
                insert_binhluan($content,$user_id,$product_id,$create_at);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
            
        ?>  
    </div>
</body>
</html>