<?php
include('check_upload_admin.php');
if (isset($_POST['btnThem'])) {
    if ($_FILES["uploadanhchinh"]["error"] > 0) {
        echo "<script>alert('Co loi khi upload: {$_FILES['uploadanhchinh']['error']}')</script>";
    } else {
        $file = check_upload_admin();
        if (strlen(trim($file)) > 0) {
            $query = "SELECT MaAdmin FROM tbl_admin ORDER BY MaAdmin DESC LIMIT 0, 1;";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            $last_id = $row['MaAdmin']; // Mã sp cuối cùng
            $last_id++;

            $tenDangNhap = $_POST['TenDangNhap'];
            $matKhau = sha1($_POST["MatKhau"]);
            $hoTen = $_POST['HoTen'];
            $email = $_POST['Email'];
            $dienThoai = $_POST['DienThoai'];
            $quyen = $_POST['Quyen'];
            $sql = "INSERT INTO tbl_admin(MaAdmin,TenDangNhap,MatKhau,HoTen,Email,DienThoai,QuyenHan,NgayTao,Avatar) 
                        VALUES ($last_id,'$tenDangNhap','{$matKhau}','{$hoTen}','{$email}','{$dienThoai}','{$quyen}',NOW(),'{$file}');";
            $result = mysql_query($sql);
            if ($result) {
                echo "<script>alert('Thêm quản trị viên thành công.');</script>";
                echo "<script type='text/javascript'>window.location.href = 'index.php?page=show_admin';</script>";
            } else {
                unlink($file);
                echo "<script>alert('Thêm quản trị viên thất bại.');</script>";
            }
        }
    }
}
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm quản trị viên</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form method="POST" action="" id="registerForm" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span3">Tên đăng nhập:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="TenDangNhap" onkeyup="check_user(this.value)" id="TenDangNhap"/></div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Mật khẩu:</div>
                    <div class="span9"><input value="" class="validate[required]" type="password" name="MatKhau" id="MatKhau"/></div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Gõ lại mật khẩu:</div>
                    <div class="span9"><input value="" class="validate[required]" type="password" name="GLMatKhau" id="GLMatKhau"/></div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Họ tên:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="HoTen" id="HoTen"/></div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Email:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="Email" onkeyup="check_email(this.value,1)" id="Email"/></div>
                    <span id="message_email" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Số điện thoại:</div>
                    <div class="span9"><input value="" class="validate[required],custom[number]" type="text" name="DienThoai" onkeyup="check_phone(this.value)" id="DienThoai"/></div>
                    <span id="message_phone" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span5">Avatar:</div>
                    <div class="span7">                                                                
                        <input type="file" name="uploadanhchinh"/>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span5">Chọn quyền:</div>
                    <div class="span7">
                        <label class="checkbox inline">
                            <input type="radio" name="Quyen" value="1"/> Admin
                        </label>
                        <label class="checkbox inline">
                            <input type="radio" name="Quyen" checked="checked" value="0"/> Mod
                        </label>
                    </div>
                    <div class="clear"></div>
                </div>    
                <div class="row-form">
                    <div class="span3"></div>
                    <div class="span9">        
                        <p><input class="btn btn-success" name="btnThem" type="submit" value="Thêm"/></p>
                    </div>
                    <div class="clear"></div>
                </div>   
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    // check số điện thoại
    function check_phone(str_phone) {
        if (str_phone != '') {
            if (/^[0][1-9][0-9]{8,9}$/.test(str_phone)) {
                $('#message_phone').hide();

            } else {
                $('#message_phone').html("Số điện thoại không hợp lệ");
                $('#message_phone').show();
            }
        }
    }
    ;

    // Sử dụng jQuery AJAX
    function check_user(str_user) {

        $.ajax({
            type: "POST",
            url: "validate.php",
            data: "TenDangNhap=" + str_user,
            success: function(data) {
                $('#message').html("");
                $('#message').show();
                $('#message').append(data);
            }
        });
    }
    ;

    function check_email(str_email, d) {

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str_email)) {

            $.ajax({
                type: "POST",
                url: "validate.php",
                data: "Email=" + str_email + "&d=" + d,
                success: function(data) {
                    $('#message_email').html("");
                    $('#message_email').show();
                    $('#message_email').append(data);
                }
            });
        }
        else {
            $('#message_email').hide();
        }
    };
    
    $(document).ready(function() {
        $('#message').hide();
        $("#registerForm").validate({
            errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
            rules: {
                Email: {required: true, email: true},
                MatKhau: {required: true, minlength: 6}
                , GLMatKhau: {required: true, equalTo: "#MatKhau"}
                , DienThoai: {digits: true,required: true, minlength: 9, maxlength: 11}
                , HoTen: {required: true, minlength: 5}
                , TenDangNhap: {required: true}
            },
            messages:{
                MatKhau:{required: "<br/>Vui lòng điền mật khẩu!", minlength: "<br/>Mật khẩu cần có tối thiểu 6 kí tự!"}
                , GLMatKhau: {required: "<br/>Vui lòng điền mật khẩu xác nhận!", equalTo: "<br/>Mật khẩu xác nhận không đúng!"}
                , DienThoai: {digits: "<br/>Bạn phải điền số!",required: "<br/>Vui lòng điền số điện thoại!", minlength: "<br/>Tối thiểu 10 số!", maxlength: "<br/>Tối đa 11 số!"}
                , Email: {required: "<br/>Vui lòng điền Email của bạn!", email: "<br/>Địa chỉ email không chính xác!"},
                HoTen: {required: "<br/>Vui lòng điền tên của bạn!", minlength: "<br/>Họ tên phải tối thiểu 5 kí tự!"},
                TenDangNhap: {required: "<br/>Vui lòng điền tên đăng nhập!"}
            }
        });
    });
</script>
<style type="text/css">
    .errors{color: #ff0000;margin-left: 135px;}
</style>