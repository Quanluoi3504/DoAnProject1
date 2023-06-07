<?php
include('header.php')
?>
    <link rel="stylesheet" href="css/project1_product_info.css">
    <!--<top>-->
        <div id="product" style="font-family: 'Helvetica Neue'">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><a href="page_homepage.php"> Sách kỹ năng </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Cà phê cùng Tony</span>
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
                        <img src="image/ca-phe-cung-tony-phien-ban-sach-kho-nho--1-.png" style="width: 200px" alt="">
                        <img src="image/ca-phe-cung-tony-phien-ban-sach-kho-nho--2-.png" style="width: 200px" alt="">
                    </div>
                    <div id="diquahoacuc">
                        <div id="diquahoacuc-name">Cà phê cùng Tony</div>
                        <div id="diquahoacuc-tt">Tình trạng: <span style="color:orange;"> Còn hàng</span> | Loại: <span style="color:orange;">Sách kỹ năng</span></div>
                        <div id="diquahoacuc-price"><b style="color:orange;"> 56.000đ </b><span><sub><strike> 75.000đ</strike></sub></span></div>
                    </div>
<!--                    --><?php
//                    include('btn/btn_up_down_amount.php');
//                    ?>
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
                            <div id="text"> Cà phê cùng Tony là sự tập hợp các bài viết trên trạng mạng xã hội của tác giả Tony Buổi Sáng (TnBS) về những bài học, câu chuyện anh đã trải nghiệm trong cuộc sống. Đó có thể là cách anh chia sẻ với các bạn trẻ về những chuyện to tát như khởi nghiệp,đạo đức kinh doanh, học tập đến những việc nhỏ nhặt như ăn mặc, giao tiếp, vệ sinh cơ thể… sao cho văn minh, lịch sự. Hay chỉ đơn giản thuật lại những trải nghiệm thực tế của anh trong quá trình sống, kinh doanh ở trong và ngoài nước.

                                Xuyên suốt cuốn sách, các câu chuyện được kể với giọng điệu trào phúng, hài hước lại được thể hiện bằng ngôn ngữ “cư dân mạng” tạo sự gần gũi để các bạn trẻ có thể dễ dàng tiếp nhận. Mặc dù tác giả luôn khẳng định những thông tin, chi tiết trong câu chuyện là hư cấu và thậm xưng nhưng điều đó không có nghĩa làm cuốn sách bớt đi sự thú vị.

                            </div>
                            <div><img id="img-intro" src="image/ca-phe-cung-tony-phien-ban-sach-kho-nho--1-.png" alt=""></div>
                            <div id="text"> Chia sẻ về sự ra đời của cuốn sách, tác giả tâm niệm không muốn những điều anh tâm đắc và đúc kết chỉ dừng lại ở mạng xã hội. Anh hi vọng những câu chuyện của mình thông quaCà phê cùng Tony có thể thổi nguồn cảm hứng tới những độc giả không có điều kiện sử dụng internet, đồng thời khuyến khích văn hóa đọc ở các bạn trẻ trong thời đại mà văn hóa nghe nhìn đang  dần chiếm ưu thế. Đơn giản và không cầu kì, đọc Cà phê cùng Tony, độc giả sẽ cảm thấy như đang khám phá câu chuyện của chính mình qua cách kể  của một người khác.

                                Được bầu chọn là 1 trong những cuốn sách hay nên đọc cho tuần đầu tháng 10, với Cà phê cùng Tony, độc giả sẽ không thể cười lớn như khi đọc những mẩu chuyện cười mà chỉ có thể tủm tỉm với những triết lí dí dỏm mà TnBS mang đến.</div>
                            <div><img id="img-intro" src="image/ca-phe-cung-tony-phien-ban-sach-kho-nho--2-.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</sanphanlienquan>-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
<?php
include('btn/btn_go_to_top.php')
?>
<?php
include('footer.php')
?>