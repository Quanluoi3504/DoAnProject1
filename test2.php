<?php
$connect = mysqli_connect("127.0.0.1", "root" ,"12345678", "project1" );
    $sql = "select prd_id,prd_name,prd_price,prd_quantity,prd_image,cate_id from tbl_product ";
$result = mysqli_query($connect,$sql);
    while ($row = $result->fetch_assoc()) {
        echo $row['prd_id'];
        echo '<br>';
        echo $row['prd_name'] ;
        echo '<br>';
        echo $row['prd_quantity'] * 2;
        echo '<br>';
        echo $row['prd_price'] * 2;
        echo '<br>';
        echo $row['prd_image'] ;
        echo '<br>';

    };
?>

<div id="cart" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="cart">
                    <div>Gio hang</div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>The loai</th>
                            <th>So luong</th>
                            <th>Gia</th>
                        </tr>
                        <td>
                            <?php
                            echo $row['prd_id'];
                            ?>
                        </td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
