<div id="boxproduct">
    <div class="title">THÔNG BÁO</div>
    <div id="login_m">
        <?php
        switch ($_GET['e']) {
            case 1: echo "<center>
                    <h4>Đăng ký thất bại<h4>
                    <div style='font-size:12px;'>Bạn đăng ký thất bại.<br>Bạn hãy kiểm tra lại thông tin đã nhập chính xác chưa.<br>
                    <img src='images/errors.jpg'/><br>Chúc bạn có một ngày tốt lành.<br>Chúc bạn có một ngày tốt lành.Mọi chi tiết
                    xin liên hệ Số điện thoại: 01667728370 hoặc Email: wangshi.aptech@gmail.com để được hỗ trợ.
                    </div>
                    </center>";
                break;
            case 2:echo "<center>
                    <h4>Kích hoạt tài khoản thất bại<h4>
                    <div style='font-size:12px;'>Bạn kích hoạt tài khoản thất bại.<br>Chúc bạn có một ngày tốt lành.Mọi chi tiết
                    xin liên hệ Số điện thoại: 01667728370 hoặc Email: wangshi.aptech@gmail.com để được hỗ trợ.
                    </div>
                    </center>";
                break;
            case 3:echo "<center>
                    <h4>Đây không phải là mã kích hoạt của bạn<h4>
                    <div style='font-size:12px;'>Bạn kích hoạt tài khoản thất bại.<br>Bạn hãy vào email để kiểm tra lại đường dẫn kích hoạt của bạn<br>Chúc bạn có một ngày tốt lành.Mọi chi tiết
                    xin liên hệ Số điện thoại: 01667728370 hoặc Email: wangshi.aptech@gmail.com để được hỗ trợ.
                    </div>
                    </center>";
                break;
        }
        ?>
    </div>
</div>