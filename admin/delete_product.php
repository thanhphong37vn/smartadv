<?php

$id = $_GET['id'];

$query = "SELECT DuongDan FROM tbl_hinhanh WHERE MaSP = {$id}";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
    unlink("../{$rows['DuongDan']}"); // x�a ?nh
}

$query = "DELETE FROM tbl_hinhanh WHERE MaSP = {$id}";
$result = mysql_query($query);

$query = "DELETE FROM tbl_sanpham WHERE MaSP = {$id}";
$result = mysql_query($query);

if ($result) {
    echo "<script>alert('Xóa sản phẩm thành công.');</script>";
} else {
    echo "<script>alert('Xóa sản phẩm thất bại.');</script>";
}
?>
