<link rel="stylesheet" href="css/bootstrap.css">
<?php
include_once ('header.php');

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
                    <p id="new_product">Sách Tuổi Teen</p>
                    <p id="new_product_view"><a href="page_sachtuoiteen.php">Xem tất cả</a></p>
                </div>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $tuoiteen->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
                                    <p align="center" class="product"><a href=""><?php echo $row["prd_name"]?></a></p>
                                    <p  align="center" class="price"><b>$<?php echo $row["prd_price"]?></b></p>
                                    <a href="javascript:void(0);" onclick="productDetails('<?php echo $row['prd_name']; ?>','<?php echo $row['prd_id']; ?>','<?php echo $row['prd_price']; ?>')">View details</a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function displayProductsByCate(category) {
        // Redirect to product.php and pass the selected category as a parameter
        window.location.href = 'sort_by_cate.php?category=' + encodeURIComponent(category);
    }
    function productDetails($prd_name,$prd_id) {
        window.location.href = 'product.php?prd_name=' + encodeURIComponent($prd_name)+"&prd_id="+encodeURIComponent($prd_id);
    }
</script>
<!--</sanpham>-->
<!--<sale2>-->
<?php
$sql = "select * from tbl_product where cate_id = 2" ;
$thieunhi = mysqli_query($conn,$sql);
?>
<div id="section6" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="product_sale">Sách Thiếu Nhi</p>
                <p id="new_product_view"><a href="page_sachthieunhi.php">Xem tất cả</a></p>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $thieunhi->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
                                    <p align="center" class="product"><a href=""><?php echo $row["prd_name"]?></a></p>
                                    <p  align="center" class="price"><b>$<?php echo $row["prd_price"]?></b></p>
                                    <a href="javascript:void(0);" onclick="productDetails('<?php echo $row['prd_name']; ?>','<?php echo $row['prd_id']; ?>','<?php echo $row['prd_price']; ?>')">View details</a>
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
<div id="section6" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="spm">Sách Kỹ Năng</p>
                <p id="new_product_view"><a href="page_sachkynang.php">Xem tất cả</a></p>

                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $kynang->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
                                    <p align="center" class="product"><a href=""><?php echo $row["prd_name"]?></a></p>
                                    <p  align="center" class="price"><b>$<?php echo $row["prd_price"]?></b></p>
                                    <a href="javascript:void(0);" onclick="productDetails('<?php echo $row['prd_name']; ?>','<?php echo $row['prd_id']; ?>','<?php echo $row['prd_price']; ?>')">View details</a>

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
<div id="section6" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="spm">Sách Văn Học</p>
                <p id="new_product_view"><a href="page_sachvanhoc.php">Xem tất cả</a></p>

                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                            <?php while($row = $vanhoc->fetch_assoc()) {?>
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
                                    <p align="center" class="product"><a href=""><?php echo $row["prd_name"]?></a></p>
                                    <p  align="center" class="price"><b>$<?php echo $row["prd_price"]?></b></p>
                                    <a href="javascript:void(0);" onclick="productDetails('<?php echo $row['prd_name']; ?>','<?php echo $row['prd_id']; ?>','<?php echo $row['prd_price']; ?>')">View details</a>
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