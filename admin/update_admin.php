<?php
    $id= $_GET['id'];
    $sql = "SELECT  * FROM tbl_admin WHERE MaAdmin = {$id}";
    $result = mysql_query($sql);
    $rows = mysql_fetch_array($result);
    $tenDangNhap = $rows['TenDangNhap'];
    $hoTen = $rows['HoTen'];
    $email = $rows['Email'];
    $dienThoai = $rows['DienThoai'];
    $anhchinh_cu = $rows['Avatar'];
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Cập nhật quản trị viên</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form method="POST" action="index.php?page=update_admin_process" id="registerForm" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span3">Tên đăng nhập:</div>
                    <div class="span9">
                        <input value="<?php echo $tenDangNhap ?>" class="validate[required]" type="hidden" name="TenDangNhap" id="TenDangNhap"/>
                        <input value="<?php echo $tenDangNhap ?>" class="validate[required]" type="text" disabled name="TenDangNhap" id="TenDangNhap"/>
                    </div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Mật khẩu mới:</div>
                    <div class="span9"><input value="" class="validate[required]" type="password" name="MatKhau" id="MatKhau"/></div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Họ tên:</div>
                    <div class="span9"><input value="<?php echo $hoTen ?>" class="validate[required]" type="text" name="HoTen" id="HoTen"/></div>
                    <span id="message" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Email:</div>
                    <div class="span9"><input value="<?php echo$email ?>" class="validate[required]" type="text" name="Email" onkeyup="check_email(this.value,1)" id="Email"/></div>
                    <span id="message_email" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Số điện thoại:</div>
                    <div class="span9"><input value="<?php echo $dienThoai ?>" class="validate[required],custom[number]" type="text" name="DienThoai" onkeyup="check_phone(this.value)" id="DienThoai"/></div>
                    <span id="message_phone" class="errors"></span>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span5">Avatar:</div>
                    <div class="span7">                                                                
                        <input type="hidden" name="anhchinh_cu" value="../<?php echo $anhchinh_cu;?>" />
                        <input type="file" name="uploadanhchinh"/><br /><br />
                        <img src="../<?php echo $anhchinh_cu;?>" width='160' height='155' alt="Admin's Picture" />
                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3"></div>
                    <div class="span9">        
                        <p><input class="btn btn-success" name="btnThem" type="submit" value="Cập nhật"/></p>
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
</script>
<style type="text/css">
    .errors{color: #ff0000;margin-left: 135px;}
</style>