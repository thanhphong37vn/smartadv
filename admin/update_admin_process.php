<?php

include('check_upload_admin.php');
if (isset($_POST['btnThem'])) {
    $hoTen = $_POST['HoTen'];
    $email = $_POST['Email'];
    $dienThoai = $_POST['DienThoai'];
    $matKhau = sha1($_POST['MatKhau']);
    $anhchinh_cu = $_POST['anhchinh_cu'];
    $uploadanhchinh = $_FILES['uploadanhchinh']['name'];
    
    if ($uploadanhchinh) {
        $file = check_upload_admin();
    } else {
        $file = $anhchinh_cu;
    }
    if($matKhau==''){
       mysql_query("SET names utf8");
  $sql="UPDATE  tbl_admin 
        SET HoTen='$hoTen',
            MatKhau = '$matKhau',
            DienThoai='$dienThoai',
            Email = '$email', Avatar = '{$file}'
        WHERE TenDangNhap='{$_SESSION["admin_login"]}'";
         $result = mysql_query($sql) or die("Có lỗi xảy ra trong quá trình sửa thông tin.");
        // echo $result4;
         if($result)
         {
             unlink($anhchinh_cu);
              echo "<script>alert('Sửa thông tin thành công')</script>";
         }
         else{
             echo "<script>alert('Sửa thông tin thất bại')</script>";
         }
    }
    else
    {
        mysql_query("SET names utf8");
        $sql="UPDATE  tbl_admin 
        SET HoTen='$hoTen',
            MatKhau = '$matKhau',
            DienThoai='$dienThoai',
            Email = '$email', Avatar = '{$file}'
        WHERE TenDangNhap='{$_SESSION["admin_login"]}'";
         $result = mysql_query($sql) or die("Có lỗi xảy ra trong quá trình sửa thông tin.");
        // echo $result4;
         if($result)
         {
              echo "<script>alert('Sửa thông tin thành công')</script>";
         }
         else{
             echo "<script>alert('Sửa thông tin thất bại')</script>";
         }
    }
}
?>