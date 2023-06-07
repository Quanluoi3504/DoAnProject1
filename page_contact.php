<?php
include('header.php')
?>

    <!--<top>-->
        <div id="new-top" style="font-family: 'Helvetica Neue'">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Liên hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</top>-->
    <!--<location>-->
        <div class="container">
            <div class="col">
                <div class="row">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7449.445042164634!2d105.84777088281646!3d21.003757147409114!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1684985634781!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    <!--</location>-->
    <!--<contact>-->
        <div class="container" style="font-family: 'Helvetica Neue'">
            <div class="row">
                <div class="col">
                    <form action="">
                    <div id="lienhe"><h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                        <div>
                        <div>Tên *</div>
                        <label for="ten"></label>
                        <input type="text" id="ten" name="ten">
                    </div>
                    <div>
                        <div>Email *</div>
                        <label for="email"></label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div>
                        <div>Nội dung *</div>
                        <label for="noidung"></label>
                        <input type="text" id="noidung" name="noidung">
                    </div>
                    <div id="guilienhe" class="d-flex">
                        <button id="bt-dk" type="submit">Gửi liên hệ</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    <!--</contact>-->

<?php
include('footer.php')
?>