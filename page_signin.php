<?php
include('header.php')
?>
<!--<body>-->
<div id="section-signin" style="font-family: 'Helvetica Neue'">
  <div class="container">
    <div class="col">
      <div class="row">
        <div id="trangchu"> <a href="page_homepage.php">Trang chủ </a><i class="fa-solid fa-arrow-right"></i><span style="color: orange"> Đăng nhập tài khoản</span></div>
        <div id="dntk">ĐĂNG NHẬP TÀI KHOẢN</div>
        <div id="nbctk">Nếu bạn đã có tài khoản, đăng nhập tại đây.</div>
        <div id="signin">
          <form class="sign_in" id="email-sign-in" role="form">
            <div class="sign_in_line">
              <div> Email :</div>
              <label for="email-signin"></label>
              <input type="text" id="email-signin" name="email-signin">
            </div>
            <div class="sign_in_line">
              <div id="pass"> Mật khẩu :</div>
                <label for="password"></label>
                <input type="text" id="password" name="password">
            </div>
            <div class="sign_in_line" id="dn" >
              <button id="bt-dn" type="submit">Đăng nhập</button>
              <p id="dk"><a href="page_signup.php">Đăng ký</a></p>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--</body>-->
<?php include('footer.php') ?>
