<?php

$id = $_GET['id'];

$query = "DELETE FROM tbl_hinhanh WHERE MaSP IN (SELECT MaSP FROM tbl_sanpham WHERE MaLoai = {$id});";
$result = mysql_query($query) or die(mysql_error());

$query = "DELETE FROM tbl_sanpham WHERE MaLoai = {$id}";
$result = mysql_query($query) or die('Error 1');

$query = "DELETE FROM tbl_loaisp WHERE MaLoai = {$id}";
$result = mysql_query($query) or die('Error 2');

if ($result) {
    echo "<script>alert('Xóa loại sản phẩm thành công.');</script>";
       echo "<script type='text/javascript'>window.location.href = 'index.php?page=product_categories';</script>";
} else {
    echo "<script>alert('Xóa loại sản phẩm thất bại.');</script>";
}
?>