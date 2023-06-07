<?php
include('header.php')
?>
    <link rel="stylesheet" href="css/project1_product_info.css">
    <!--<top>-->
        <div id="product" style="font-family: 'Helvetica Neue'">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><a href="page_homepage.php"> Sách văn học </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Nếu gặp người ấy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</top>-->

    <!--<product>-->
        <div class="container" style="font-family: 'Helvetica Neue'">
            <div class="row">
                <div class="col">
                    <div id="img-diquahoacuc">
                        <img src="image/neu-gap-nguoi-ay-cho-toi-gui-loi-chao--1-.png" style="width: 200px" alt="">
                        <img src="image/neu-gap-nguoi-ay-cho-toi-gui-loi-chao--2-.png" style="width: 200px" alt="">
                    </div>
                    <div id="diquahoacuc">
                        <div id="diquahoacuc-name">No baked</div>
                        <div id="diquahoacuc-tt">Tình trạng: <span style="color:orange;"> Còn hàng</span> | Loại: <span style="color:orange;">Sách văn học</span></div>
                        <div id="diquahoacuc-price"><b style="color:orange;"> 65.000đ </b><span><sub><strike> 86.000đ</strike></sub></span></div>
                    </div>
                </div>
            </div>
        </div>
    <!--</product>-->

    <!--<sanphanlienquan>-->
        <div id="introduce-product" class="container" style="font-family: 'Helvetica Neue'">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button style="background: white" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            MÔ TẢ SẢN PHẨM
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="text">Cả hai im lặng một lúc, tôi nghe được cả tiếng ro ro của máy nén khí khi thổi ô xi vào bể thủy sinh. Xung quanh phảng phất thứ mùi như mùi của khu rừng vừa tạnh mưa.

                                “Này, Satoshi.”

                                Karin gọi tên tôi. Tôi có cảm giác như chỗ mỏng nhất của lớp da bao bọc trái tim bị rách toác, một thứ gì đó vừa được giải phóng ra.

                                “Gì vậy?” Giọng tôi run run.

                                “Gặp được cậu tớ vui lắm. Tớ chỉ muốn nói như vậy thôi.”</div>
                            <div><img id="img-intro" src="image/neu-gap-nguoi-ay-cho-toi-gui-loi-chao--1-.png" alt=""></div>
                            <div id="text">Takuji Ichikawa sinh ngày mùng 7 tháng 10 năm 1962 tại Tokyo. Ông tốt nghiệp trường đại học Dokkyo. Cuốn tiểu thuyết đầu tay của ông, Separation, xuất bản năm 2002.

                                Cuốn Em sẽ đến cùng cơn mưa (xuất bản tại Nhật với tên Ima Ainiyukimasu) in lần đầu năm 2003, là một trong những tiểu thuyết thành công nhất Nhật Bản, được chuyển thể thành truyện tranh, kịch, phim truyền hình ở Nhật và điện ảnh tại Mỹ.
                            </div>
                            <div><img id="img-intro" src="image/neu-gap-nguoi-ay-cho-toi-gui-loi-chao--2-.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--</sanphanlienquan>-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
<?php
include('footer.php')
?>