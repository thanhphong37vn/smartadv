<?php

if (isset($_POST['btnThem'])) {
    $id = $_POST['MaLoai'];
    $tenloai = $_POST['TenLoai'];
    $loaiSP = $_POST['LoaiSP'];
    $sql = "UPDATE tbl_loaisp SET TenLoai = '{$tenloai}',MaCha = '{$loaiSP}' WHERE MaLoai = '{$id}';";
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Cập nhật loại sản phẩm thành công.');</script>";
//        echo "<script>alert('Cập nhật loại sản phẩm thành công.');</script>";
//       index.php?page=product_categories
        echo "<script type='text/javascript'>window.location.href = 'index.php?page=product_categories';</script>";
    } else {
        echo "<script>alert('Cập nhật loại sản phẩm thất bại.');</script>";
    }
}
?>
