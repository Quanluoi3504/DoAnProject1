<?php include_once ("header.php");

$prd_name = $_GET['prd_name'];
$prd_id = $_GET['prd_id'];
$sql = "select p.prd_id,p.prd_name,p.prd_price,p.prd_image,c.cate_id,c.cate_name from tbl_product p left join tbl_category c on p.cate_id = c.cate_id where prd_id = $prd_id;";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p id="spm"><a href="page_product.php">sach van hoc</a></p>
                <div id="category_sanphammoi">
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                                <div class="col">
                                    <div class="p-3"><a href=""><img src="image/<?php echo $row["prd_image"]?>" style="width: 200px" alt=""></a></div>
                                    <p align="center" class="product"><a href=""><?php echo $row["prd_name"]?></a></p>
                                    <p  align="center" class="price"><b>$<?php echo $row["prd_price"]?></b></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include_once ("footer.php")?>