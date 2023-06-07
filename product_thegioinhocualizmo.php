<?php
include('header.php')
?>
    <link rel="stylesheet" href="css/project1_product_info.css">
    <!-- <top>-->
         <div id="product" style="font-family: 'Helvetica Neue'">
             <div class="container">
                 <div class="col">
                     <div class="row">
                         <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><a href="page_homepage.php"> Sách thiếu nhi </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Thế giới nhỏ của Liz Climo</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    <!-- </top>-->

    <!--<product>-->
        <div class="container" style="font-family: 'Helvetica Neue'">
            <div class="row">
                <div class="col">
                    <div id="img-diquahoacuc">
                        <img src="image/the-gioi-nho-cua-liz-climo--1-.png" style="width: 200px" alt="">
                        <img src="image/the-gioi-nho-cua-liz-climo--2-.png" style="width: 200px" alt="">
                    </div>
                    <div id="diquahoacuc">
                        <div id="diquahoacuc-name">Thế giới nhỏ của Liz Climo</div>
                        <div id="diquahoacuc-tt">Tình trạng: <span style="color:orange;"> Còn hàng</span> | Loại: <span style="color:orange;">Sách thiếu nhi</span></div>
                        <div id="diquahoacuc-price"><b style="color:orange;"> 86.000đ </b><span><sub><strike> 98.000đ</strike></sub></span></div>
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
                            <div id="text">
                                Nữ họa sĩ Liz Climo đã tạo ra một thế giới động vật dễ thương và lôi cuốn, nơi gấu xám, thỏ, nhím, cáo… cũng gặp phải đủ loại vấn đề thường ngày và xử lí chúng theo những cách vừa thông minh, vừa hài hước.

                                Đọc cuốn sách này, các bạn sẽ được học những phương pháp dạy con kiểu… khủng long, cách chế đồ hóa trang Halloween siêu nhanh theo phong cách tatu và thỏ, cùng vô vàn sáng kiến thông minh khác của những ngừoi bạn động vật để giữ cho cuộc sống hằng ngày của chúng luôn tươi mới và tràn đầy niềm vui!
                            </div>
                            <div><img id="img-intro" src="image/the-gioi-nho-cua-liz-climo--1-.png" alt=""></div>
                            <div id="text">
                                Với những câu chuyện đối đáp của các loài thú từ khủng long thời tiền sử đến chuột, hươu, cá sấu thời hiện đại, chúng ta không khỏi nắc nẻ cười trước sự đáng yêu vô biên giới của chúng. Tác giả Liz Climo có cách vẽ đơn giản, dễ hiểu, mỗi mặt giấy là một câu chuyện ngắn. Sách phù hợp cho cả trẻ em và người lớn.

                                Nếu bạn cần một quyển sách nhẹ nhàng, dễ thương để đọc giải trí thì mình thấy đây là một quyển sách rất phù hợp. Các câu chuyện nhỏ, xem kẽ nhau bởi những chủ đề cụ thể. Thích nhất là phần gia đình, khi những hành động cực kỳ đáng yêu của các chú khủng long con, gấu con đối với ba mẹ của chúng.
                            </div>
                            <div><img id="img-intro" src="image/the-gioi-nho-cua-liz-climo--2-.png" alt=""></div>
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