<?php
include('header.php')
?>
<link rel="stylesheet" href="css/project1_news.css">
    <!--<top>-->
        <div id="new-top" style="font-family: 'Helvetica Neue'">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Tin tức</span>
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
                        <div id="danhmuc" style="color: #707070">DANH MỤC TIN TỨC</div>
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

    <!--<news-content>-->
        <div class="container" style="font-family: 'Helvetica Neue'">
            <div class="row">
                <div class="col">
                    <div id="news-body">
                    <div style="font-size: 30px">Tin tức</div>
                    <div class="container text-center">
                        <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <p align="center" class="product"><a href="news_ocsen.php">Chuyện con ốc sên muốn biết tại sao nó chậm chạp</a></p>
                                <div class="p-3"><a href="news_ocsen.php"><img src="image/oc-sen.png" style="width: 300px " alt=""></a></div>
                            </div>
                            <div class="col">
                                <p align="center" class="product"><a href="news_lutrenhapenderwicks.php">Lũ trẻ nhà Penderwicks</a></p>
                                <div class="p-3"><a href="news_lutrenhapenderwicks.php"><img src="image/lu-tre.png" style="width: 300px" alt=""></a></div>
                            </div>
                            <div class="col">
                                <p align="center" class="product"><a href="news-cuoctinhgia.php">Em muốn có một cuộc tình già với anh</a></p>
                                <div class="p-3"><a href="news-cuoctinhgia.php"><img src="image/cuoc-tinh.png" style="width: 300px" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!--</news-content>-->
<?php
include('footer.php')
?>