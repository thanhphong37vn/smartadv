<?php
include('check_upload_banner_logo.php');
if (isset($_POST['btnThem'])) {
    $maQC = $_POST['MaQC'];
    $tenQC = $_POST['TenQC'];
    $link = $_POST['Link'];
    $vitri = $_POST['ViTri'];
    $trangthai = $_POST['TrangThai'];
    $anhchinh_cu = $_POST['anhchinh_cu'];
    $uploadanhchinh = $_FILES['uploadanhchinh']['name'];
    if ($uploadanhchinh) {
        $file = check_upload_banner_logo();
    } else {
        $file = $anhchinh_cu;
    }
    $sql = "UPDATE tbl_quangcao SET TenQC = '{$tenQC}',DuongDanAnh = '{$file}',Link = '{$link}',ViTri = '{$vitri}',TrangThai = '{$trangthai}' WHERE MaQC = '{$maQC}';";
    $result = mysql_query($sql);
    if ($result) {
        unlink($anhchinh_cu);
        echo "<script>alert('Sửa quảng cáo thành công')</script>";
    } else {
        echo "<script>alert('Sửa quảng cáo thất bại')</script>";
    }
}
?>