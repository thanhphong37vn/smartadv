<div id="boxproduct">
    <div class="title">THÔNG BÁO</div>
    <div id="login_m">
        <?php
        switch ($_GET['s']) {
            case 1: echo "<center>
                    <h4>Đăng ký thành công<h4>
                    <div style='font-size:12px;'>Bạn đã đăng ký thành công.<br>Chào mừng bạn đã đến với website của chúng tôi.<br>
                    <img src='images/success.gif'/><br>Mã xác nhận của bạn đã được gửi tới email của bạn.<br>Để hoàn tất việc đăng ký bạn vui lòng vào email
                    kiểm tra và bấm vào link để xác nhận
                    </div>
                    </center>";
                break;
            case 2:echo "<center>
                    <h4>Kích hoạt tài khoản thành công<h4>
                    <div style='font-size:12px;'>Bạn đã kích hoạt tài khoản thành công.<br>Chào mừng bạn đã đến với website của chúng tôi.<br>
                    <img src='images/success.gif'/><br>Bạn có thể sử dụng tài khoản này để đăng nhập.<br>Chúc bạn có một ngày tốt lành.Mọi chi tiết
                    xin liên hệ Số điện thoại: 01667728370 hoặc Email: wangshi.aptech@gmail.com để được hỗ trợ.
                    </div>
                    </center>";
                break;
        }
        ?>
    </div>
</div>