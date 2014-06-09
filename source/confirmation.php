<div id="boxproduct">
    <div class="title">KÍCH HOẠT TÀI KHOẢN</div>
    <div id="login_m">
        <?php
        $passkey = $_GET['passkey'];

// Lấy dòng dữ liệu phù hợp vơi passkey này trong database
        $sql1 = "SELECT * FROM tbl_thanhvien_temp WHERE confirm_code ='$passkey'";
        $result1 = mysql_query($sql1);

// Nếu có dữ liệu 
        if ($result1) {

            // đếm xem có bao nhiêu  passkey này 
            $count = mysql_num_rows($result1);

            // nếu tìm thấy, lấy dữ liệu từ table "temp_members_db"
            if ($count == 1) {

                $rows = mysql_fetch_array($result1);

                $usname = $rows['UserName'];
                $fullname = $rows['HoTen'];
                $pass = $rows['MatKhau'];
                $gender = $rows['GioiTinh'];
                $ngaysinh = $rows['NgaySinh'];
                $diachi = $rows['DiaChi'];
                $email = $rows['Email'];
                $sdt = $rows['SoDienThoai'];
                $ndk = $rows['NgayDangKi'];


                // chèn dữ liệu vừa lấy bên bảng "temp_members_db" đưa vào bảng "registered_members" 
                mysql_query("SET NAMES utf8;");
                $sql2 = "INSERT INTO tbl_thanhvien(UserName,MatKhau,HoTen,Email,GioiTinh,SoDienThoai,DiaChi,NgaySinh,NgayDangKi)
                    VALUES('$usname','$pass','$fullname','$email','$gender','$sdt','$diachi','$ngaysinh','$ndk')";
                $result2 = mysql_query($sql2);
                // nếu di chuyển thành công  dữ liệu từ bảng "temp_members_db" sang bảng "registered_members" hiển thị thông báo "tài khoản của bạn đã được kích hoạt" và đừng quên để xóa mã xác nhận từ bảng "temp_members_db"
                if ($result2) {
                    header('location:index.php?page=success&s=2');

                    // Xoá thông tin của người dùng này từ bảng "temp_members_db" có passkey này
                    $sql3 = "DELETE FROM tbl_thanhvien_temp WHERE confirm_code = '$passkey'";
                    $result3 = mysql_query($sql3);
                } else {
                    header('location:index.php?page=errors&e=2');
                }
            }

            // nếu ko tìm thấy  passkey, hiễn thị thông báo "Sai Mã Xác Nhận" 
            else {
                header('location:index.php?page=errors&e=3');
            }
        }
        ?>
    </div>
</div>
