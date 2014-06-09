<?php

if (isset($_POST['btnDangKy'])) {
    $confirm_code = mysql_real_escape_string(md5(uniqid(rand())));
    $tenDangNhap = $_POST['TenDangNhap'];
    $matKhau = sha1($_POST['MatKhau']);
    $golaiMK = $_POST['GLMatKhau'];
    $hoTen = $_POST['HoTen'];
    $gioiTinh = $_POST['GioiTinh'];
    $ngay = $_POST['ngay'];
    $thang = $_POST['thang'];
    $nam = $_POST['nam'];
    $email = $_POST['Email'];
    $dienThoai = $_POST['DienThoai'];
    $diaChi = $_POST['DiaChi'];
    $ngaySinh = $nam . "-" . $thang . "-" . $ngay;
    mysql_query("SET NAMES UTF8");
    $sql ="INSERT INTO `mayanhkts`.`tbl_thanhvien` (MaTV,UserName,HoTen,MatKhau,GioiTinh,DiaChi,Email,SoDienThoai,NgayDangKi) 
         VALUES (NULL, '$tenDangNhap', '$hoTenp', '$matKhau', '$gioiTinh', '$diaChi', '$email', '$dienThoai',NOW())";

 
    $result = mysql_query($sql) or die("Có lỗi xảy ra trong quá trình đăng ký");
    $sql = "INSERT INTO tbl_thanhvien_temp(confirm_code,UserName,MatKhau,HoTen,Email,Gioitinh,SoDienThoai,DiaChi,NgaySinh,NgayDangKi)
                              VALUES('$confirm_code','$tenDangNhap','$matKhau','$hoTen','$email','$gioiTinh','$dienThoai','$diaChi','$ngaySinh',NOW())";
    $result = mysql_query($sql) or die("Có lỗi xảy ra trong quá trình đăng ký");
    //Khởi tạo đối tượng
    $mail = new PHPMailer();

    /* =====================================
     * THIET LAP THONG TIN GUI MAIL
     * ===================================== */

    $mail->IsSMTP(); // Gọi đến class xử lý SMTP
    $mail->Host = "localhost"; // tên SMTP server
    $mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
    $mail->SMTPAuth = true; // Sử dụng đăng nhập vào account
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com"; // Thiết lập thông tin của SMPT
    $mail->Port = 465; // Thiết lập cổng gửi email của máy
    $mail->Username = "phongthan91hn@gmail.com"; // SMTP account username
    $mail->Password = "manhtao123"; // SMTP account password
//Thiet lap thong tin nguoi gui va email nguoi gui
    $mail->SetFrom('phongthan91hn@gmail.com', 'Thiết bị miền bắc');

//Thiết lập thông tin người nhận
    $mail->AddAddress("$email", "Thành viên thiết bị miền bắc");
    $mail->AddAddress($email, "Thành viên thiết bị miền bắc");

//Thiết lập email nhận email hồi đáp
//nếu người nhận nhấn nút Reply
    $mail->AddReplyTo("phongthan91hn@gmail.com", "Thiết bị mua sắm");

    /* =====================================
     * THIET LAP NOI DUNG EMAIL
     * ===================================== */

//Thiết lập tiêu đề
    $mail->Subject = "Thiết bị miền bắc";

//Thiết lập định dạng font chữ
    $mail->CharSet = "utf-8";

    //Thiết lập nội dung chính của email

    $body = "Cảm ơn quý khách đã đăng ký tài khoản trên Thiết bị miền bắc!.
             Quý khách hãy click vào link để hoàn tất đăng ký http://localhost:82/thietbimienbac.vn/index.php?page=confirmation&passkey=$confirm_code";
    $mail->Body = $body;

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        header('location:index.php?page=errors&s=1');
    } else {
        header('location:index.php?page=success&s=1');
    }
}
?>

