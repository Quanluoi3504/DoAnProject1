<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once ('header.php')
?>
<!--<body>-->
<!--<div id="section-signin" style="font-family: 'Helvetica Neue'">-->
<!--  <div class="container">-->
<!--    <div class="col">-->
<!--      <div class="row">-->
<!--        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Đăng nhập tài khoản</span></div>-->
<!--        <div id="dntk">ĐĂNG NHẬP TÀI KHOẢN</div>-->
<!--        <div id="nbctk">Nếu bạn đã có tài khoản, đăng nhập tại đây.</div>-->
<!--        <div id="signin">-->
<!--          <form class="sign_in" id="email-sign-in" role="form">-->
<!--            <div class="sign_in_line">-->
<!--              <div> Email :</div>-->
<!--              <label for="email-signin"></label>-->
<!--              <input type="text" id="email-signin" name="email-signin">-->
<!--            </div>-->
<!--            <div class="sign_in_line">-->
<!--              <div id="pass"> Mật khẩu :</div>-->
<!--                <label for="password"></label>-->
<!--                <input type="text" id="password" name="password">-->
<!--            </div>-->
<!--            <div class="sign_in_line" id="dn" >-->
<!--              <button id="bt-dn" type="submit">Đăng nhập</button>-->
<!--              <p id="dk"><a href="page_signup.php">Đăng ký</a></p>-->
<!--          </div>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--</body>-->
<div id="signup_login_contact_form">
    <h1>Login</h1>
    <div class="signup_login_contact_form_box">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (empty($_POST['username'])) {
                    echo "<p class=".htmlspecialchars('text-warning').">Please enter your username</p> ";
                }
                elseif (empty($_POST['password'])) {
                    echo "<p class=".htmlspecialchars('text-warning').">Please enter your password</p> ";
                }
                else {
                      $username = $_POST['username'] ;
                      $password = $_POST['password'];

                    $sql = "select cus_username,cus_pass from tbl_customer where cus_username = '$username'";
                    $result = mysqli_query($conn,$sql);
                    if ($username == 'admin' && $password == 'admin') {
                        header('Location:adm/admin_page.php');

                    }
                    elseif ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        if($row['cus_username'] != $username) {
                            echo "<p class=".htmlspecialchars('text-danger').">Wrong username</p> ";
                        }elseif (!password_verify($password,$row['cus_pass'])) {
                            echo "<p class=".htmlspecialchars('text-danger').">Wrong password</p> ";
                        }
                        else {
                            $_SESSION['username'] = $username;

                        }
                    }else {
                        echo "<p class=".htmlspecialchars('text-danger').">Username is not exist</p> ";
                 }
            }}?>

            <label for="">Username:</label> <br>
            <input type="text"  name="username"> <br>
            <label for="">Password:</label> <br>
            <input type="password"  name="password"> <br> <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<?php
$conn->close();
include_once ('footer.php') ?>
