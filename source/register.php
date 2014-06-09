<div id="boxproduct">
    
    <div class="title">ĐĂNG NHẬP HỆ THỐNG</div>
    
    <div id="register_m"><center>
            
            <form id="loginForm" action="index.php?page=register_process" method="POST">
               
                <table style="width:60%; border:0; margin-top: 20px">
                    <tr>
                        <td width="20%" height="50">Tên đăng nhập: <font color="#FF0000">*</font></td>
                        <td width="32%" height="50"><input type="text" id="TenDangNhap" name="TenDangNhap" class="text" onkeyup="check_user(this.value)"/><br><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="50">Mật khẩu: <font color="#FF0000">*</font></td>
                        <td height="50"><input type="password" id="MatKhau" name="MatKhau" class="text"/><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="50">Nhập lại mật khẩu: <font color="#FF0000">*</font></td>
                        <td height="50"><input type="password" id="GLMatKhau" name="GLMatKhau" class="text"/><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="50">Họ và Tên: <font color="#FF0000">*</font></td>
                        <td height="50"><input type="text" id="HoTen" name="HoTen" class="text"/><br><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="50">Giới tính: </td>
                        <td height="50"><select name="GioiTinh"  style="width:100px; height:25px">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td height="50">Ngày sinh: </td>
                        <td height="50">
                           
                            <script type="text/javascript">

                                date();
                                function date()
                                {
                                    document.write("<span style='margin-right:3px'>Ngày</span><select name='ngay' id='select' style='margin-left:5px;width:50px; height:25px'>");
                                    for (var i = 1; i <= 31; i++)
                                    {
                                        document.write("<option>" + i + "</option>");
                                    }
                                    document.write("</select>");

                                    document.write("<span style='margin-left:3px'>Tháng</span><select name='thang' id='select' style='margin-left:5px;width:50px; height:25px'>");
                                    for (var i = 1; i <= 12; i++)
                                    {
                                        document.write("<option>" + i + "</option>");
                                    }
                                    document.write("</select>");

                                    document.write("<span style='margin-left:3px'>Năm</span><select name='nam' id='select' style='margin-left:5px;width:60px; height:25px'>");
                                    for (var i = 1970; i <= 2030; i++)
                                    {
                                        document.write("<option>" + i + "</option>");
                                    }
                                    document.write("</select>");
                                }
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td height="50">Email: <font color="#FF0000">*</font></td>
                        <td height="50"><input type="text" id="Email" name="Email" class="text" onkeyup="check_email(this.value,1)"/><br><span id="message_email"></span></td>
                    </tr>
                    <tr>
                        <td height="50">Điện thoại: <font color="#FF0000">*</font></td>
                        <td height="50"><input type="text" id="DienThoai" name="DienThoai" class="text" onkeyup="check_phone(this.value)"/><br><span id="message_phone"></span></td>
                    </tr>
                    <tr>
                        <td height="70">Địa chỉ: <font color="#FF0000">*</font></td>
                        <td height="70"><textarea name="DiaChi" id="DiaChi" style="width: 270px;height: 70px"></textarea><span id="message"></span></td>
                    </tr>
                    <tr>
                        <td height="35" colspan="2"><div align="center">
                                <input type="submit" value="Đăng ký" name="btnDangKy" style="border: 0;background: #1376c9; cursor: pointer;border-radius: 3px 3px 3px 3px;width: 100px;height: 35px;color: #FFF;margin-left: 250px" />
                            </div></td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</div>

<script type="text/javascript">
    function check_phone(str_phone){
        if(str_phone != ''){
            if(/^[0][1-9][0-9]{8,9}$/.test(str_phone)){
                $('#message_phone').hide();

            }else{
                $('#message_phone').html("Số điện thoại không hợp lệ");
                $('#message_phone').show();
            }
        }
    };
    
    function check_user(str_user){

        $.ajax({
            type: "POST",
            url: "source/check_user.php",
            data: "TenDangNhap=" + str_user,
            success: function(data){
                $('#message').html("");
                $('#message').show();
                $('#message').append(data);
            }
        });
    };

    function check_email(str_email, d){

        if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str_email)){

            $.ajax({
                type: "POST",
                url: "source/check_user.php",
                data: "Email=" + str_email + "&d=" + d,
                success: function(data){
                    $('#message_email').html("");
                    $('#message_email').show();
                    $('#message_email').append(data);
                }
            });
        }
        else{
            $('#message_email').hide();
        }
    };
    
    $(document).ready(function() {
        $('#message').hide();
        $("#loginForm").validate({
            errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
            rules: {
//                TenDangNhap: {required: true, minlength: 6},
                MatKhau: {required: true, minlength: 6},
                GLMatKhau: {required: true, equalTo: "#MatKhau"},
                Email :{required: true, email: true},
                DienThoai: {digits: true,required: true, minlength: 9, maxlength: 11},
                DiaChi: {required: true, minlength: 15},
                HoTen: {required: true, minlength: 5}
            },
            messages: {
//                TenDangNhap: {required: "<br/>Vui lòng điền tên đăng nhập!", minlength: "<br/>Tên đăng nhập cần có tối thiểu 6 kí tự!"},
                MatKhau: {required: "<br/>Vui lòng điền mật khẩu!", minlength: "<br/>Mật khẩu cần có tối thiểu 6 kí tự!"},
                GLMatKhau: {required: "<br/>Vui lòng điền mật khẩu xác nhận!", equalTo: "<br/>Mật khẩu xác nhận không đúng!"},
                DienThoai: {digits: "<br/>Bạn phải điền số!",required: "<br/>Vui lòng điền số điện thoại!", minlength: "<br/>Tối thiểu 10 số!", maxlength: "<br/>Tối đa 11 số!"},
                Email: {required: "<br/>Vui lòng điền Email của bạn!", email: "<br/>Địa chỉ email không chính xác!"},
                DiaChi :{required: "<br/>Vui lòng điền địa chỉ của bạn!",minlength: "<br/>Địa chỉ phải tối thiểu 15 kí tự!"},
                HoTen :{required: "<br/>Vui lòng điền họ tên của bạn của bạn!",minlength: "<br/>Họ tên phải tối thiểu 5 kí tự!"}
            }
        });
    });
</script>