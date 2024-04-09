<style>
    
    .boxall-tsp{
        
        width: 90%;
        height: auto;
    }
    .boxall-tsp .catalog{
        margin-left: 108px;
    }
    .boxall-tsp form select{
        width: 200px;
        height: 30px;
        padding: 5px 10px;
        border:1px solid #efeaea;
    }
    .boxall-tsp form select:active{
        border:1px solid #efeaea;
    }
    .boxall-tsp form input{
        background-color: #ffffff;
        width: 70px;
        height: 30px;
        border:1px solid #efeaea;
    }
    .product{
        display:  flex;
        flex-wrap: wrap;
        margin:20px 0;
    }
    
    .pro{
        width: calc(100% / 3 - 15px);
        min-height: 400px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 120px;
        padding: 0 10px;
    }
    .pro img{
        
        width: 70%;
        height: 370px;
        border-radius: 10px;
    }
    .pro .name{
        font-size: 10px;
        margin-top: 20px;
        margin-left: 12px;
        margin-bottom: 20px;
    }
    .pro>a{
        color: #000000;
        text-decoration: none;
        font-size: 20px;
        margin-left: 12px;
    }
    .price{
        display: flex;
        margin-top: 35px;
        margin-left: 12px;
    }
    .price>.giam{
        margin-left: 35px;
        text-decoration: line-through;
    }
</style>
<article class="boxall-tsp">
    <?php
    
        // print_r($listsp);
        // print_r($listdm);
    ?>
    <div class="catalog">
        <form action="index.php?act=sanphamsearch" method="post">
            <p>Chọn danh mục</p> 
            <select name="catalog" id="">
                
                <?php
                    foreach ($dsdm as $danhmuc) {
                        # code...
                        extract($danhmuc);
                        echo '<option value="'.$category_id.'">'.$category_name.'</option>';
                    }
                
                ?>
                <input type="submit" value="Tìm kiếm" >
            </select>
        </form>
    </div>
    
    
        <div class="product">
            <?php 
                $i=0;
                foreach($listsearh as $sp){
                    extract($sp);
                    
                    $linksp = "index.php?act=sanphamct&idsp=" .$product_id;
                    if(($i==2) || ($i==5) || ($i==8)){
                        $mr="";
                    }else{
                        $mr="mr";
                    }
                    echo '
                        <div class="pro" '.$mr.'>
                            <img src="uploads/'.$image.'" alt="">
                            <div class="name">QQ Shop</div>
                            <a href="'.$linksp.'">'.$product_name.'</a>
                            <div class="price">
                                <p>Giá: '.$price.'</p>
                            </div>
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
            
            <!-- <div class="pro mr">
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
</article>
