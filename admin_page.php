<?php
include_once('header.php');
include_once('Database_prj.php');
?>

<?php
$user_sql = "select count(cus_id) as Num_of_cus from tbl_customer;";
$prd_sql = "select count(prd_id) as Num_of_prd from tbl_product;";
$ord_sql = "select count(ord_id) as Num_of_order from tbl_order;";
$user_result = mysqli_query($conn,$user_sql);
$prd_result = mysqli_query($conn,$prd_sql);
$ord_result = mysqli_query($conn,$ord_sql);

?>
    <div id="content">
        <div class="midde_cont">
            <div class="container-fluid">
                <div class="row column_title">
                    <div class="col-md-12">
                        <div class="page_title">
                            <h2 style="font-weight: bold">Admin Page</h2>
                        </div>
                    </div>
                </div>
                <div class="row column1">
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section ">
                            <div class="counter_no">
                                <div>
                                    <p class="total_no"><?php $row=$user_result->fetch_assoc();echo $row['Num_of_cus']?></p>
                                    <p class="head_couter">Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section ">
                            <div class="counter_no">
                                <div>
                                    <p class="total_no"><?php $row=$prd_result->fetch_assoc();echo $row['Num_of_prd']?></p>
                                    <p class="head_couter">Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section">
                            <div class="counter_no">
                                <div>
                                    <p class="total_no"><?php $row=$ord_result->fetch_assoc();echo $row['Num_of_order']?></p>
                                    <p class="head_couter">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="full counter_section ">
                            <div class="counter_no">
                                <div>
                                    <p class="total_no">10</p>
                                    <p class="head_couter">Advertisements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$conn->close();
include_once('footer.php');
?>