<?php

$id = $_GET['id'];

$query = "DELETE FROM tbl_hinhanh WHERE MaSP IN (SELECT MaSP FROM tbl_sanpham WHERE MaNhaSX = {$id});";
$result = mysql_query($query) or die(mysql_error());

$query = "DELETE FROM tbl_sanpham WHERE MaNhaSX = {$id}";
$result = mysql_query($query) or die('Error 1');

$query = "DELETE FROM tbl_nhasx WHERE MaNhaSX = {$id}";
$result = mysql_query($query) or die('Error 2');

if ($result) {
    echo "<script>alert('Xóa nhà sản xuất thành công.');</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php?page=manufacturers_show';</script>";
} else {
    echo "<script>alert('Xóa nhà sản xuất thất bại.');</script>";
}
?>
