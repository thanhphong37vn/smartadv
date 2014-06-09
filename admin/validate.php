<?php

include('../config/dbconnect.php');
if (isset($_POST['TenDangNhap'])) {
    $username = $_POST['TenDangNhap'];
    $us = $_POST['TenDangNhap']; //lấy tên để kiểm tra

    if (strlen($us) < 5) {
        echo '<span>Tên đăng nhập phải lớn hơn 5 ký tự</span>';
    } else {
        // kiểm tra sự tồn tại của username trong database
        $sql = "SELECT COUNT(*) FROM tbl_admin WHERE TenDangNhap = '{$us}';";
        $result = mysql_query($sql) or die('<font color="red"><b>Lỗi truy xuất cơ sở dữ liệu</b></font>');
        $row = mysql_fetch_array($result);

        if ($row[0] > 0) {
            echo '<span>Tài khoản này đã tồn tại</span>';
        } else {
            echo '<span>Tài khoản này có thể sử dụng</span>';
        }
    }
}
$email = $_POST['Email'];
if (isset($email)) {

    // kiểm tra sự tồn tại của email trong database
    $sql = "SELECT COUNT(*) FROM tbl_admin WHERE Email = '{$email}';";
    $result = mysql_query($sql) or die('<span color="red">Lỗi truy xuất cơ sở dữ liệu email</span>');
    $row = mysql_fetch_array($result);

    if ($row[0] > 0) {
        if ($_POST['d'] == 1) {
            echo '<span>Email này đã được đăng ký bởi tài khoản khác</span>';
        } else {
            echo '<span>Bạn có thể sử dụng email này</span>';
        }
    } 
    else {
        if ($_POST['d'] == 1) {
            echo '<span>Bạn có thể sử dụng email này</span>';
        } else {
            echo '<span>Email này chưa được đăng ký bởi tài khoản nào</span>';
        }
    }
}
?>

