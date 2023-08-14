<link rel="stylesheet" href="css/bootstrap.css">
<?php
include('header.php');


?>

<!--<img-top>-->
<div id="section4">
    <div class="col">
        <div class="container">
            <div class="row">
                <div id="img1" class="col-lg-7" >
                    <img src="image/slider_1.png" alt="">
                </div>
                <div id="img2" class="col-lg-4">
                    <img src="image/slider_banner_top.png" style="width: 368px" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--</img-top>-->
<!--<sanpham>-->
<?php
$sql = "select * from tbl_product where cate_id = 1";
$tuoiteen = mysqli_query($conn,$sql);
?>
<div id="section6" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <p id="new_product"><a href="page_product.php">Sách tuoi teen</a></p>
                    <p id="new_product_view"><a href="page_product.php">Xem tất cả</a></p>
                </div>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $tuoiteen->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
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
</div>
<!--</sanpham>-->
<!--<sale2>-->
<?php
$sql = "select * from tbl_product where cate_id = 2";
$thieunhi = mysqli_query($conn,$sql);
?>
<div id="section8" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="product_sale"><a href="page_product.php">Sach thieu nhi</a></p>
                <p id="product_sale_view"><a href="page_product.php">Xem tất cả</a></p>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $thieunhi->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
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
</div>
<!--</sale2>-->
<!--<banchay>-->
<?php
$sql = "select * from tbl_product where cate_id = 3";
$kynang = mysqli_query($conn,$sql);
?>
<div id="section13" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="spm"><a href="page_product.php">Sach ky nang</a></p>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $kynang->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
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
</div>
<!--</banchay>-->
<!--<noibat>-->
<?php
$sql = "select * from tbl_product where cate_id = 4";
$vanhoc = mysqli_query($conn,$sql);
?>
<div id="section14" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="spm"><a href="page_product.php">sach van hoc</a></p>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $vanhoc->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
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
</div>
<!--</noibat>-->
<?php
include('btn/btn_go_to_top.php')
?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<?php
include 'footer.php';
?>