<article>
        <div class="content">
          <div class="banner">
            <!-- Slideshow container -->
            <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="view/img/banner1.jpg" style="width:100%">

            </div>

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="view/img/banner2.jpg" style="width:100%">

            </div>

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="view/img/banner3.jpg" style="width:100%">

            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </div>
          <div class="spmoi-phukien">
            <div class="spmoi">
              <img
                src="img/z5233287385840_af0ae845f139d8e8883ee281db061f34.jpg"
                style="width: 540px; height: 500px"
                alt=""
              />
              <h2>Hàng mới</h2>
              <p>QQ shop liên tục cập nhật các mẫu mới nhất theo su hướng</p>
              <button class="button-muangay">Mua ngay</button>
            </div>
            <div class="phukien">
              <img
                src="img/z5233287033176_490f4c0b979b2936c652e34ed5810d48.jpg"
                style="width: 540px; height: 500px"
                alt=""
              />
              <h2>Phụ kiện</h2>
              <p>QQ shop liên tục cập nhật các mẫu mới nhất theo su hướng</p>
              <button class="button-muangay">Mua ngay</button>
            </div>
          </div>
          <div class="danhmucsp">
            <h2>Danh mục sản phẩm</h2>
            <div class="box-dmsp">
              <?php
                foreach ($listdmtop3 as $categories) {
                  extract($categories);
                  
                  // $linkdm = "index.php?act=iddm".$category_id;
                  echo '
                  <div class="sp">
                      <img
                      src="img/z5233287464498_5c65b0b3181dfc132dfeb379fc828196.jpg"
                      style="width: 330px; height: 330px"
                      alt=""
                    />
                    <a href="index.php?act=sanphamsearch"><h4>'.$category_name.'</h4></a>
                    
                  </div>  
                  ';
                }
              ?>
            </div>
              <!-- <div class="sp">
                <img
                  src="img/z5233286981373_5733bb8d00b68e832cd935c2a43f6ae5.jpg"
                  style="width: 330px; height: 330px"
                  alt=""
                />
                <h3><a href=""></a></h3>
              </div>
              <div class="sp">
                <img
                  src="img/z5233286981373_5733bb8d00b68e832cd935c2a43f6ae5.jpg"
                  style="width: 330px; height: 330px"
                  alt=""
                />
                <h3>Váy</h3>
              </div>
              <div class="sp">
                <img
                  src="img/z5233286981373_5733bb8d00b68e832cd935c2a43f6ae5.jpg"
                  style="width: 330px; height: 330px"
                  alt=""
                />
                <h3>Váy</h3>
              </div>
            </div> -->
          
          <div class="top10sp">
            <h2>Sản phẩm</h2>
            <div class="product">
            <?php 
                foreach($listprotop4 as $sp){
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" .$product_id;
                    echo '
                      <div class="pro">
                          <img src="uploads/'.$image.'" alt="">
                          <div class="name">QQ Shop</div>
                          <a href="'.$linksp.'">'.$product_name.'</a>
                          <div class="price">
                              <p>Giá: '.$price.'</p>
                          </div>
                          <div class="addtocart">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="quantity" value="1">
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
              <!-- <div class="pro">
                  <img src="" alt="">
                  <div class="name">Tên thương hiệu</div>
                  <a href="">Tên hàng hóa</a>
                  <div class="price">
                      <p>Giá</p>
                      <p class="giam">Giảm giá</p>
                  </div>
              </div>
              <div class="pro">
                  <img src="" alt="">
                  <div class="name">Tên thương hiệu</div>
                  <a href="">Tên hàng hóa</a>
                  <div class="price">
                      <p>Giá</p>
                      <p class="giam">Giảm giá</p>
                  </div>
              </div>
              <div class="pro">
                  <img src="" alt="">
                  <div class="name">Tên thương hiệu</div>
                  <a href="">Tên hàng hóa</a>
                  <div class="price">
                      <p>Giá</p>
                      <p class="giam">Giảm giá</p>
                  </div>
              </div>
              <div class="pro">
                  <img src="" alt="">
                  <div class="name">Tên thương hiệu</div>
                  <a href="">Tên hàng hóa</a>
                  <div class="price">
                      <p>Giá</p>
                      <p class="giam">Giảm giá</p>
                  </div>
              </div> -->
            </div>
          </div>
        </div>
      </article>