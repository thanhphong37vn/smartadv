<div id="boxproduct">
    <div class="title">ĐĂNG NHẬP HỆ THỐNG</div>
    <div id="login_m"><center>
            <form id="loginForm" action="" method="POST">
                <table style="width:60%; border:0; margin-top: 80px">
                    <tr>
                        <td width="14%" height="50">Tên đăng nhập: <font color="#FF0000">*</font></td>
                        <td width="32%" height="50"><input type="text" name="TenDangNhap" class="text"/><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="50">Mật khẩu <font color="#FF0000">*</font></td>
                        <td height="50"><input type="password" name="MatKhau" class="text"/><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="35" colspan="2"><div align="center">
                                <input type="submit" value="Đăng nhập" style="border: 0;background: #1376c9; cursor: pointer;border-radius: 3px 3px 3px 3px;width: 100px;height: 35px;color: #FFF;margin-left: 198px" />
                            </div></td>
                    </tr>
                    <tr><td></td>
                        <td height="35"><a href="#">Quên mật khẩu?</a> | <a href="#">Đăng ký</a></td>
                    </tr>
                </table>
            </form></center>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#message').hide();
        $("#loginForm").validate({
            errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
            rules: {
                TenDangNhap: {required: true, minlength: 6},
                MatKhau: {required: true, minlength: 6}
            },
            messages: {
                MatKhau: {required: "<br/>Vui lòng điền mật khẩu!", minlength: "<br/>Mật khẩu cần có tối thiểu 6 kí tự!"},
                TenDangNhap: {required: "<br/>Vui lòng điền tên đăng nhập!", minlength: "<br/>Tên đăng nhập cần có tối thiểu 6 kí tự!"}
            }
        });
    });
</script>