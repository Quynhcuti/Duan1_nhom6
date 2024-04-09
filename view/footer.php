      <footer>
        <div class="row-1">
          <div class="logo">
            <img src="./img/logo.png" alt="" />
          </div>
          <div class="row-1_phai">
            <p>Kết nối với chúng tôi</p>
            <div class="icon">
              <span><i class="fa-brands fa-facebook"></i></span>
              <span><i class="fa-brands fa-instagram"></i></span>
              <span><i class="fa-brands fa-facebook-messenger"></i></span>
              <span><i class="fa-brands fa-youtube"></i></span>
            </div>
          </div>
        </div>
        <div class="row row-2">
          <div class="row-2_1">
            <h2>VỀ QQ SHOP</h2>
            <p>
              Thương hiệu hàng đầu về thời trang <br />
              Luôn đặt sự hài lòng của khách hàng lên hàng đầu
            </p>
            <div class="local">
              <i class="fa-solid fa-location-dot"></i> 30 Phố Trịnh Văn Bô, Nam
              Từ Liêm, Hà Nội.
            </div>
            <div class="phone">
              <i class="fa-solid fa-phone"></i> 0123456789 - 0321654987.
            </div>
            <div class="gmail">
              <i class="fa-solid fa-envelope"></i> qqshop2024@gmail.com
            </div>
          </div>
          <div class="row-2_2">
            <h2>CÁC CHÍNH SÁCH BÁN HÀNG</h2>
            <p>
              Chính sách đổi trả sản phẩm <br />
              Chính sách bán hàng <br />
              Liên hệ nhanh
            </p>
          </div>
          <div class="row-2_3">
            <h2>HỖ TRỢ KHÁCH HÀNG</h2>
            <p>
              Chương trình khuyến mãi <br />
              Sản phẩm mới nhất <br />
              Mẹo phối đồ
            </p>
          </div>
        </div>
      </footer>
    </div>
    <!-- js cho slideshow -->
  <script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>
  </body>
</html> 