<?php
include('header.php')
//$sql = "insert into tbl_customer"
?>
<!--<body>-->
<div id="section-signup" style="font-family: 'Helvetica Neue'">
    <div class="container">
        <div class="col">
            <div class="row">
                <div id="trangchu"><a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Đăng ký tài khoản</span></div>
                <div id="dangkytaikhoan">ĐĂNG KÝ TÀI KHOẢN</div>
                <div id="signup">
                    <form id="email-sign-in" role="form">
                        <div class="signup_line">
                            <div>Họ:</div>
                            <label for="ho"></label>
                            <input type="text" id="ho" name="ho">
                        </div>
                        <div class="signup_line">
                            <label for="Email-signup"></label>
                            <div>Email:</div>
                            <br>
                            <input type="text" id="Email-signup" name="Email-signup">
                        </div>
                        <div class="signup_line">
                            <label for="pw-signup"></label>
                            <div>Mật khẩu:</div>
                            <br>
                            <input type="text" id="pw-signup" name="pw-signup">
                        </div>
                        <div class="signup_line" id="ten-signup-top">
                            <label for="ten-signup-main"></label>
                            <div id="ten-signup-main">Tên:</div>
                            <br>
                            <input type="text" id="ten-signup-main" name="ten-signup-main">
                        </div>
                        <div class="signup_line">
                            <label for="sdt-signup-main"></label>
                            <div id="sdt-signup-main">Số điện thoại:</div>
                            <br>
                            <input type="text" id="sdt-signup-main" name="sdt-signup-main">
                        </div>
                        <div class="signup_line" id="dk-email">
                            <button id="bt-dk" type="submit">Đăng ký</button>
                            <p id="dn_sign_up"><a href="page_signin.php">Đăng nhập</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</body>-->
<?php
include('footer.php')
?>
