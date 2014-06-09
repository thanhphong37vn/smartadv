<?php
if ($_POST['btnThem']) {
    $maCT = $_POST['MaCT'];
    $tenCT = $_POST['TenCT'];
    $diaChi = $_POST['DiaChi'];
    $dtdd = $_POST['DTDD'];
    $hotLine = $_POST['HotLine'];
    $website = $_POST['Website'];
    $thongtin = $_POST['ThongTin'];
    $vitri = $_POST['ViTri'];

    $sql = "UPDATE tbl_info SET TenCT = '{$tenCT}',DiaChi = '{$diaChi}',DienThoaiDD = '{$dtdd}',HotLine = '{$hotLine}',Website = '{$website}',ThongTin = '{$thongtin}',ViTri = '{$vitri}' WHERE MaCT = '{$maCT}';";
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Cập nhật thông tin thành công.');</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại.');</script>";
    }
}
?>

