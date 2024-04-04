<!-- <style> 
  /* trang ctsp */
  .namesp {
    text-decoration: none;
  }
  .sp1 {
    width: 280px;
    height: 400px;
    text-align: center;
  }
  .sp1 img {
    width: 280px;
    height: 280px;
  }
  .sp2 {
    width: 280px;
    height: 400px;
    text-align: center;
  }
  .sp2 img {
    width: 280px;
    height: 280px;
  }
  .sp3 {
    width: 280px;
    height: 400px;
    text-align: center;
  }
  .sp3 img {
    width: 280px;
    height: 280px;
  }
  .sp4 {
    width: 280px;
    height: 400px;
    text-align: center;
  }
  .sp4 img {
    width: 280px;
    height: 280px;
  }
  .sp5 {
    width: 280px;
    height: 400px;
    text-align: center;
  }
  .sp5 img {
    width: 280px;
    height: 280px;
  }

  .sanpham2 {
    width: 100%;
    height: 1000px;
  }

  .sanpham2-khung1 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    width: 100%;
    height: 450px;
    grid-gap: 155px;
  }
  .sanpham2-khung2 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    width: 100%;
    height: 450px;
    grid-gap: 155px;
  }
  .sp2-1 {
    width: 300px;
    height: 500px;
    text-align: center;
  }
  .sp2-1 img {
    width: 350px;
    height: 350px;
  }
  .sp2-2 {
    width: 300px;
    height: 500px;
    text-align: center;
  }
  .sp2-2 img {
    width: 350px;
    height: 350px;
  }
  .sp2-3 {
    width: 300px;
    height: 500px;
    text-align: center;
  }
  .sp2-3 img {
    width: 350px;
    height: 350px;
  }

  /* ctsp */
  .ctsp1 {
    width: 50%;
  }
  .ctsp1 img {
    margin: 0 110px;
    transition: transform 0.5s ease;
  }
  .ctsp1 img:hover {
    transform: scale(1.1);
  }
  .ctsp2 {
    width: 50%;
  }
  .ctsp3 {
    width: 95%;
    border: 1px solid black;
    padding: 15px 15px;
  }

  .quantity {
    display: flex;
    align-items: center;
  }

  .qty-input {
    width: 50px;
    text-align: center;
  }

  .plus-btn,
  .minus-btn {
    background-color: #f0f0f0;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
  }

  .plus-btn:hover,
  .minus-btn:hover {
    background-color: #e0e0e0;
  }

  .giohangctsp {
    background-color: black;
    color: white;
    border-radius: 15px;
    width: 180px;
    height: 30px;
  }
  .giohangctsp:hover {
    background-color: white;
    color: black;
  }

  .binhluan {
    width: 100%;
    height: 300px;
    padding: 50px 230px;
  }
  .binhluan .binhluan-gui {
    width: 60px;
    height: 40px;
    background-color: rgb(200, 200, 255);
    border: none;
  }
  .binhluan .binhluan-gui:hover {
    background-color: #afdfff;
    color: white;
  }

  .danhgia {
    width: 68%;
    height: 200px;
    padding: 50px 150px;
    border: 1px solid #e0e0e0;
    margin: 0 230px;
    background-color: beige;
  }
  .danhgia .guidanhgia {
    width: 160px;
    height: 30px;
    background-color: bisque;
    border: none;
    border-radius: 5px;
    margin: 20px 230px;
  }
  .danhgia .guidanhgia:hover {
    background-color: rgb(254, 211, 158);
  }
  /* trang ctsp */
</style> -->

<?php
        extract ($listspct);
        echo '
            <div class="ctsp">
                <div class="ctsp1">
                    <img  style="width: 470px;height: 470px;" src="uploads/'.$image.'" alt=""> 
                </div>
                <div class="ctsp2">
                    <h2>'.$product_name.'</h2><br>
                    
                    <p style="font-size: 20px; color: red;">'.$price.'<sup>đ</sup></p> <br>
                    KÍCH THƯỚC <br> <br>
                    <input style="border-radius: 70px;" value=" '.$size.' " type="submit">
                    
                    <br> <br>
                    SỐ LƯỢNG <br>
                    <div class="quantity">
                        <div class="addtocart">
                          <form action="index.php?act=addtocart" method="post">
                              <input type="text" class="qty-input" name="quantity">
                              <input type="hidden" name="id" value="'.$product_id.'">
                              <input type="hidden" name="name" value="'.$product_name.'">
                              <input type="hidden" name="img" value="'.$image.'">
                              <input type="hidden" name="price" value="'.$price.'">
                              <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                          </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="ctsp3">
                        <h3>MÔ TẢ SẢN PHẨM</h3><br> <br>
                        '.$description.'
                    </div>
                </div>
            </div>
            
        ';
?>  
        <!-- <div class="ctsp">
            <div class="ctsp1">
                <img  style="width: 470px;height: 470px;" src="img/z5233286858726_b91d1d324d3c8ac3695ea5afe4c099c6.jpg" alt=""> 
                <img  style="width: 470px;height: 470px;" src="img/z5233286882712_12df7e25f1304af6ae3fb84c666aafe9.jpg" alt="">
            </div>
            <div class="ctsp2">
                <h2>SP646 - Áo Thun Adrien</h2><br>
                Product code:PVN5274 <br><br>
                <p style="font-size: 20px; color: red;">349.000 ₫</p> <br>
                KÍCH THƯỚC <br> <br>
                <input style="border-radius: 70px;" value=" M " type="submit">
                <input style="border-radius: 70px;" value=" L " type="submit">
                <input style="border-radius: 70px;" value=" XL " type="submit">
                <input style="border-radius: 70px;" value="XXL" type="submit">
                <br> <br>
                SỐ LƯỢNG <br>
                <div class="quantity">
                    <button class="minus-btn" type="button">-</button>
                    <input type="text" class="qty-input" value="1">
                    <button class="plus-btn" type="button">+</button> | <button class="giohangctsp">THÊM VÀO GIỎ
                        HÀNG</button>
                </div>
                <br>
                <br>
                <div class="ctsp3">
                    <h3>MÔ TẢ SẢN PHẨM</h3><br> <br>
                    - Chất vải: Cotton <br><br>
                    - Form chuẩn, thoải mái <br><br>
                    - Hình ảnh chân thật, sản phẩm đúng như mô tả <br><br>
                    Đường may rất tỉ mỉ, chắc chắn. <br> <br>

                    CHẤT LIỆU SẢN PHẨM <br> <br>

                    Chất vải : Cotton mềm mịn, bền. Khách hàng phối với Jeans , Kaki, Short đều được. Mặc dạo phố hay
                    đến các buổi tiệc đều mang đến sự thoải mái, tự tin đẳng cấp dành cho khách hàng <br> <br>

                    CHÍNH SÁCH VẬN CHUYỂN <br><br>

                    Miễn phí vận chuyển đơn hàng trên 500.000đ <br> <br>

                    CHÍNH SÁCH ĐỔI TRẢ <br> <br>

                    - Đổi/ Trả trong vòng 7 ngày kể từ khi nhận hàng <br>
                    - Miễn phí đổi trả nếu lỗi sai sót từ phía FEAER <br>
                </div>
            </div>
        </div> -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){         
                $("#binhluan").load("view/binhluan/binhluanform.php", {product_id: <?= $comment_id?>});  
            });
        </script>
        <div class="binhluan">
            <?php

            ?>
        </div>
        <center>
            <h2>SẢN PHẨM LIÊN QUAN</h2>
        </center>
        <br><br>
        <div class="sanpham">
          <?php
            foreach ($sp_cungloai as $sp_cungloai) {
              extract($sp_cungloai);
              $linksp = "index.php?act=sanphamct?idsp=".$product_id;
              echo '
                <div class="sp1">
                  <img src="uploads/'.$image.'" alt="">
                  <p>'.$product_name.'</p>
                  <span>'.$price.'<sup>đ</sup></span>
                  <div class="addtocart">
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$product_id.'">
                        <input type="hidden" name="name" value="'.$product_name.'">
                        <input type="hidden" name="img" value="'.$image.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                    </form>
                  </div>
                </div>

              ';
            }
          ?>
            <!-- <div class="sp1">
                <img src="img/z5233286890685_450d0b02451c7b61ece48ad40d2bcd43.jpg" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div> -->

            <!-- <div class="sp2">
                <img src="img/z5233286904443_e830502534fbabd114de5f0d180d89d0.jpg" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div> -->

            <!-- <div class="sp3">
                <img src="img/z5233286940415_8859dcfe484efdae8e02638fa8f68699.jpg" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div> -->

            <!-- <div class="sp4">
                <img src="img/z5233286981373_5733bb8d00b68e832cd935c2a43f6ae5.jpg" alt="">
                <p>Áo Sơ Mi DELUXE</p>
                <span>379.000 đ</span>
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                    <button class="giohang" title="Thêm vào giỏ hàng">
                        + Thêm vào giỏ hàng
                    </button>
                </form>
            </div> -->
        </div>

        

<!-- <article class="mota">
  <h3>MÔ TẢ SẢN PHẨM</h3>

  <p>
      - Áo Thun có cổ Just Men với chất liệu Poly thể thao, co giãn mạnh và thấm hút ổn.</p>
  <p>- Form ôm vừa người, không quá chật, đủ khoe vóc dáng khỏe mạnh.</p>
  <p>- Màu sắc: đa dạng gam màu từ trung tính lịch lãm đến trẻ trung trendy.</p>
</article> -->





<script>
    document.addEventListener("DOMContentLoaded", function () {
        const minusButton = document.querySelector(".minus-btn");
        const plusButton = document.querySelector(".plus-btn");
        const inputField = document.querySelector(".qty-input");

        minusButton.addEventListener("click", function () {
            let currentValue = parseInt(inputField.value);
            if (currentValue > 1) {
                inputField.value = currentValue - 1;
            }
        });

        plusButton.addEventListener("click", function () {
            let currentValue = parseInt(inputField.value);
            inputField.value = currentValue + 1;
        });
    });
</script>