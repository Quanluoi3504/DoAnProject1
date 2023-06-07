<?php
$connect = mysqli_connect("127.0.0.1", "root" ,"12345678", "project1" );
    $sql = "select prd_id,prd_name,prd_price,prd_quantity,prd_image,cate_id from tbl_product ";
$result = mysqli_query($connect,$sql);
    while ($row = $result->fetch_assoc()) {
        echo $row['prd_id'];
        echo '<br>';
        echo $row['prd_name'];
        echo '<br>';
        echo $row['prd_price'];
        echo '<br>';
        echo $row['prd_image'];
        echo '<br>';

    };

?>