<link rel="stylesheet" href="css/project1_shoppingcart.css">
<?php
include_once ('header.php');

?>
<!--<top>-->
<div id="product" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="col">
            <div class="row">
                <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Giỏ hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</top>-->
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
                        <td>Di qua hoa cuc</td>
                        <td>Sach ky nang</td>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once ("footer.php");
?>