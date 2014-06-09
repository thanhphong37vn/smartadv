<?php

include('check_upload.php');
if (isset($_POST['btnThem'])) {
    $maSP = $_POST['MaSP'];
    $tenSP = $_POST['TenSP'];
    $gia = $_POST['Gia'];
    $giaKM = $_POST['GiaKM'];
    $baohanh = $_POST['BaoHanh'];
    $moi = (isset($_POST['Moi'])) ? 1 : 0;
    $khuyenmai = (isset($_POST['KhuyenMai'])) ? 1 : 0;
    $loaiSP = $_POST['LoaiSP'];
    $nhaSX = $_POST['NhaSX'];
    $linkdowload = $_POST['LinkDowload'];
    $mota = $_POST['MoTa'];
    $anhchinh_cu = $_POST['anhchinh_cu'];
    $uploadanhchinh = $_FILES['uploadanhchinh']['name'];

    if ($uploadanhchinh) {
        $file = check_upload();
    } else {
        $file = $anhchinh_cu;
    }
    $sql = "UPDATE tbl_sanpham SET TenSP = '{$tenSP}',MoTa = '{$mota}',Gia = '{$giaKM}',GiaCu = '{$gia}',BaoHanh = '{$baohanh}',
                SPMoi = '{$moi}',KhuyenMai = '{$khuyenmai}',MaLoai = '{$loaiSP}',MaNhaSX = '{$nhaSX}',NgaySua = NOW(),LinkDowload = '{$linkdowload}' WHERE MaSP = '{$maSP}';";
    $result = mysql_query($sql);
    if ($result) {
        $query = "UPDATE tbl_hinhanh SET DuongDan = '{$file}' WHERE MaSP = {$maSP};";
        $result = mysql_query($query) or die("Lỗi cập nhật ảnh chính: " . mysql_error());
        unlink($anhchinh_cu);
        echo "<script>alert('Cập nhật sản phẩm thành công.');</script>";
    }else{
        echo "<script>alert('Cập nhật sản phẩm thất bại.');</script>";
    }
//    $query = "UPDATE tbl_hinhanh SET DuongDan = '{$file}' WHERE MaSP = {$maSP};";
//    $result = mysql_query($query) or die("Lỗi cập nhật ảnh chính: " . mysql_error());
}
?>
