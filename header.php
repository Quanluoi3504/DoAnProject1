<?php
 $conn = mysqli_connect("127.0.0.1","root","12345678","category");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/project1_signin.css">
    <link rel="stylesheet" href="css/project1_signup.css">
    <link rel="stylesheet" href="css/project1_introduce.css">
    <link rel="stylesheet" href="css/project1_product.css">
    <link rel="stylesheet" href="css/project1_homepage.css">
    <link rel="stylesheet" href="css/category-book.css">
    <script src="https://kit.fontawesome.com/623c50a3c8.js" crossorigin="anonymous"></script>
</head>
<body>
<!--<header>-->
    <div id="section2" style="font-family: 'Helvetica Neue'">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-lg-3">
                    <a href="page_homepage.php">
                        <img src="image/logo.png" alt="logo" class="img-fluid">
                    </a>
                    <div id="signin_signup_pay">
                        <div id="signin">
                    <a  href="page_signin.php"><i class="fa-solid fa-lock"></i> Đăng nhập</a>
                        </div>
                        <div  id="signup">
                    <a href="page_signup.php"><i class="fa-solid fa-right-to-bracket"></i> Đăng ký</a>
                        </div>
                        <div id="pay">
                    <a  href="page_shopingcart.php"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</header>-->
<menu>
    <div id="section3" style="font-family: 'Helvetica Neue'">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div id="menu">
                        <ul>
                            <li><a href="page_homepage.php"><i class="fa-solid fa-house"></i> TRANG CHỦ</a></li>
                            <li><a href="page_introduce.php"><i class="fa-solid fa-share-nodes"></i> GIỚI THIỆU</a></li>
                            <li>
                                <a href="page_product.php"><i class="fa-solid fa-book"></i> SẢN PHẨM</a>
                                <ul class="sub-menu">
                                    <li><a href="page_product.php"><i class="fa-brands fa-hotjar"></i> Sản phẩm nổi bật</a></li>
                                    <li><a href="page_product.php"><i class="fa-solid fa-tag"></i> Sản phẩm giảm giá</a></li>
                                    <li><a href="page_sachtuoiteen.php"><i class="fa-solid fa-tag"></i> Sách tuổi teen</a></li>
                                    <li><a href="page_sachthieunhi.php"><i class="fa-solid fa-tag"></i> Sách thiếu nhi</a></li>
                                    <li><a href="page_sachkynang.php"><i class="fa-solid fa-tag"></i> Sách kỹ năng</a></li>
                                    <li><a href="page_sachvanhoc.php"> <i class="fa-solid fa-tag"></i>Sách văn học</a></li>
                                </ul>
                            </li>
                            <li><a href="page_news.php"><i class="fa-solid fa-newspaper"></i> TIN TỨC</a></li>
                            <li><a href="page_contact.php"><i class="fa-solid fa-phone"></i> LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</menu>
<!--category-->
<!--<div class="category_section layout_padding">-->
<!--    <div class="container">-->
<!--        <div class="category_main">-->
<!--            <h2 class="category_text">Category</h2>-->
<!---->
<!--            <div class="category_menu">-->
<!--                <ul>-->
<!--                    <li><a href="#" onclick="displayProductsByCate('ASUS')">Asus</a></li>-->
<!--                    <li><a href="#" onclick="displayProductsByCate('Macbook')">Macbook</a></li>-->
<!--                    <li><a href="#" onclick="displayProductsByCate('Dell')">Dell</a></li>-->
<!--                    <li><a href="#" onclick="displayProductsByCate('HP')">HP</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <script>-->
<!--                function displayProductsByCate($category) {-->
<!--                    // Redirect to product.php and pass the selected category as a parameter-->
<!--                    window.location.href = ' ?category=' + encodeURIComponent($category);-->
<!--                }</script>-->
<!--            <script>-->
<!--                function addToCart($prd_name,$prd_id,$prd_price,$prd_quantity = 1) {-->
<!--                    window.location.href = 'cart.php?prd_name=' + encodeURIComponent($prd_name)+"&prd_id="+encodeURIComponent($prd_id)+"&prd_price="+encodeURIComponent($prd_price)+"&quantity="+encodeURIComponent($prd_quantity);-->
<!--                }-->
<!--            </script>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
