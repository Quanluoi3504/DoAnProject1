<?php
include('header.php')
//$sql = "insert into tbl_customer"
?>
<!--<body>-->
<!--<div id="section-signup" style="font-family: 'Helvetica Neue'">-->
<!--    <div class="container">-->
<!--        <div class="col">-->
<!--            <div class="row">-->
<!--                <div id="trangchu"><a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Đăng ký tài khoản</span></div>-->
<!--                <div id="dangkytaikhoan">ĐĂNG KÝ TÀI KHOẢN</div>-->
<!--                <div id="signup">-->
<!--                    <form id="email-sign-in" role="form">-->
<!--                        <div class="signup_line">-->
<!--                            <div>Họ:</div>-->
<!--                            <label for="ho"></label>-->
<!--                            <input type="text" id="ho" name="ho">-->
<!--                        </div>-->
<!--                        <div class="signup_line">-->
<!--                            <label for="Email-signup"></label>-->
<!--                            <div>Email:</div>-->
<!--                            <br>-->
<!--                            <input type="text" id="Email-signup" name="Email-signup">-->
<!--                        </div>-->
<!--                        <div class="signup_line">-->
<!--                            <label for="pw-signup"></label>-->
<!--                            <div>Mật khẩu:</div>-->
<!--                            <br>-->
<!--                            <input type="text" id="pw-signup" name="pw-signup">-->
<!--                        </div>-->
<!--                        <div class="signup_line" id="ten-signup-top">-->
<!--                            <label for="ten-signup-main"></label>-->
<!--                            <div id="ten-signup-main">Tên:</div>-->
<!--                            <br>-->
<!--                            <input type="text" id="ten-signup-main" name="ten-signup-main">-->
<!--                        </div>-->
<!--                        <div class="signup_line">-->
<!--                            <label for="sdt-signup-main"></label>-->
<!--                            <div id="sdt-signup-main">Số điện thoại:</div>-->
<!--                            <br>-->
<!--                            <input type="text" id="sdt-signup-main" name="sdt-signup-main">-->
<!--                        </div>-->
<!--                        <div class="signup_line" id="dk-email">-->
<!--                            <button id="bt-dk" type="submit">Đăng ký</button>-->
<!--                            <p id="dn_sign_up"><a href="page_signin.php">Đăng nhập</a></p>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->

<body>
<div id="signup_login_contact_form">
    <h1>Sign up</h1>
    <div class="signup_login_contact_form_box">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (empty($_POST['username'])) {
                    echo "<p class=".htmlspecialchars('text-danger').">Please enter your username</p> ";
                }

                elseif (empty($_POST['password'])) {
                    echo "<p class=".htmlspecialchars('text-danger').">Please enter your new password</p> ";
                }
                elseif (empty($_POST['password_retyped'])) {
                    echo "<p class=".htmlspecialchars('text-danger').">Retyped your password please</p> ";
                }
                else {

                    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
                    $password = $_POST['password'];
                    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                    $retyped_password = $_POST['password_retyped'];
                    if($password != $retyped_password) {
                        echo "<p class=".htmlspecialchars('text-danger').">Password is not match</p> ";
                    }else {
                        if(preg_match('/^[a-zA-Z0-9]{50,}$/', $username)) { // for english chars + numbers only
                            // valid username, alphanumeric & longer than or equals 5 chars
                            echo "<p class=".htmlspecialchars('text-danger').">Your username is invalid</p> ";
                        }else {

                            $sql = "select cus_username from tbl_customer where cus_username  = '$username'";
                            $result = $conn ->query($sql);
                            if ($result->num_rows == 0) {
                                $sql = "insert into tbl_customer(cus_username,cus_pass) values('$username','$hashed_password')";
                                $result = $conn ->query($sql);
                                if ($result === TRUE) {
                                    echo "<p class=".htmlspecialchars('text-success').">Signed up succesfully</p> ";
                                }
                                else {
                                    echo "<p class=".htmlspecialchars('text-danger').">Error</p> ";
                                }
                            }
                            else {
                                echo "<p class=".htmlspecialchars('text-danger').">Username you typed in already existed</p> ";
                            }
                        }
                    }
                }
            }
            ?>
            <label for="">Username:</label> <br>
            <input type="text"  name="username" placeholder="No more than 50 chars"> <br>

            <label for="">Password:</label> <br>
            <input type="password"  name="password"> <br>
            <label for="">Retype password:</label> <br>
            <input type="password"  name="password_retyped"> <br> <br>
            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
    </div>
</div>
</body>
<?php
include('footer.php')
?>
