<?php include('header.php');
$sql = "select * from tbl_product";
$result = mysqli_query($conn,$sql);

?>
<!--<top>-->
  <div id="product" style="font-family: 'Helvetica Neue'">
    <div class="container">
      <div class="col">
        <div class="row">
          <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Tất cả sản phẩm</span>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--</top>-->
<!--<category>-->
  <div id="category" style="font-family: 'Helvetica Neue'">
    <div class="container">
      <div class="row">
        <div class="col">
          <div id="danhmuc" style="color: #707070">DANH MỤC</div>
          <div id="line-top">__________________________</div>
          <div>
            <div>
              <a href="page_homepage.php">Trang chủ</a>
            </div>
            <br>
            <div>
              <a href="page_introduce.php">Giới thiệu</a>
            </div>
            <br>
            <div>
              <a href="page_product.php">Sản phẩm</a>
            </div>
            <br>
            <div>
              <a href="page_news.php">Tin tức</a>
            </div>
            <br>
            <div>
              <a href="#">Liên hệ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--</category>-->
<!--<all-pro-duct>-->
    <div id="tatcasanpham" style="font-family: 'Helvetica Neue'">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div id="content-top">TẤT CẢ SẢN PHẨM</div>
                    <br>
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                        <?php while($row = $result->fetch_assoc()) {?>
                            <div class="col">
                                <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 240px" alt=""></a></div>
                                <p align="center" class="product"><a href=""><?php echo $row["prd_name"]?></a></p>
                                <p  align="center" class="price"><b>$<?php echo $row["prd_price"]?></b></p>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</all-pro-duct>-->
<?php
include('btn/btn_go_to_top.php')
?>
<?php include('footer.php') ?>
</body>
</html>