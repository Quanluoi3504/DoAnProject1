<?php
include('header.php')
?>
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
