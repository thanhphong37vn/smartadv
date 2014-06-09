<?php
include('check_upload_banner_logo.php');
if (isset($_POST['btnThem'])) {
    $maBanner = $_POST['MaBanner'];
    $tenBanner = $_POST['TenBanner'];
    $vitri = $_POST['ViTri'];
    $trangthai = $_POST['TrangThai'];
    $anhchinh_cu = $_POST['anhchinh_cu'];
    $uploadanhchinh = $_FILES['uploadanhchinh']['name'];
    if ($uploadanhchinh) {
        $file = check_upload_banner_logo();
    } else {
        $file = $anhchinh_cu;
    }
    $sql = "UPDATE tbl_banner SET ChuThich = '{$tenBanner}',DuongDan = '{$file}',ViTri = '{$vitri}',TrangThai = '{$trangthai}' WHERE MaBanner = '{$maBanner}';";
    $result = mysql_query($sql);
    if ($result) {
        unlink($anhchinh_cu);
        echo "<script>alert('Sửa banner logo thành công')</script>";
    } else {
        echo "<script>alert('Sửa banner logo thất bại')</script>";
    }
}
?>

