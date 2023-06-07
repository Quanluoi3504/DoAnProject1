<?php
include('header.php')
?>
    <link rel="stylesheet" href="css/project1_product_info.css">
    <!--<top>-->
        <div id="product" style="font-family: 'Helvetica Neue'">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><a href="page_homepage.php"> Sách kỹ năng </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Lăn vào bếp</span>
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
                        <img src="image/bi-kip-nau-an-lan-vao-bep--1-.png" style="width: 200px" alt="">
                        <img src="image/bi-kip-nau-an-lan-vao-bep--2-.png" style="width: 200px" alt="">
                    </div>
                    <div id="diquahoacuc">
                        <div id="diquahoacuc-name">Lăn vào bếp</div>
                        <div id="diquahoacuc-tt">Tình trạng: <span style="color:orange;"> Còn hàng</span> | Loại: <span style="color:orange;">Sách kỹ năng</span></div>
                        <div id="diquahoacuc-price"><b style="color:orange;"> 56.000đ </b><span><sub><strike> 75.000đ</strike></sub></span></div>
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
                            <div id="text">Nấu ăn với người này là một góc yêu thương, là thư giãn, là tài năng hay sở thích. Nhưng đối với nhiều người thì nấu ăn là cả một Thử Thách Khó Khăn hay Nỗi Kinh Hoàng Khó Nói. Làm thế nào để công việc nấu ăn trở nên dễ thở hơn với những người không có năng khiếu hay lười biếng, hoặc vừa lười vừa thường gây thảm họa (như cánh họa sĩ chẳng hạn)? Đừng lo, câu hỏi đó không còn là câu hỏi tu từ nữa mà đã có lời giải đáp cho bạn ngay ở đây.

                                Mọi thứ liên quan đến bếp núc đều có bí quyết riêng để xử lý, nếu bạn nắm được những bí quyết nho nhỏ này thì hãy an tâm là bạn đã thành công một phần rồi đó. Phần còn lại phụ thuộc vào quyết tâm (hay lý do!?) lăn vào bếp của bạn. Dù bạn học nấu ăn vì bị ép buộc, bị cưỡng chế, bị dụ dỗ, hay rảnh quá nên nghía chơi chút, hay bất cứ lý do nào, hãy cùng biến công cuộc vào bếp thành những khám phá thú vị và mới lạ.</div>
                            <div><img id="img-intro" src="image/bi-kip-nau-an-lan-vao-bep--1-.png" alt=""></div>
                            <div id="text">Cùng trải nghiệm những mẹo vặt nấu nướng, những công thức nấu ăn đơn giản và những loại thực phẩm cải thiện tính cách có trong Bí kíp nấu ăn: Lăn vào bếp của hai họa sĩ siêu lười, siêu đoảng của Cloud Pillow Studio. Một cuốn sách dễ thương, đầy màu sắc, vui nhộn, thú vị, bổ ích và cần có trên giá sách, bên kệ bếp và trên bàn ăn của bạn.

                                Một cuốn sách nấu ăn bằng tranh dành cho những người không biết nấu ăn, của hai cô nàng không biết nấu ăn.
                            </div>
                            <div><img id="img-intro" src="image/bi-kip-nau-an-lan-vao-bep--2-.png" alt=""></div>
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