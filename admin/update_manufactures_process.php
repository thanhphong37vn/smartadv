<?php
if (isset($_POST['btnThem'])) {
    $mansx = $_POST['MaNSX'];
    $tenNSX = $_POST['TenNSX'];
    $sql = "UPDATE tbl_nhasx SET TenNhaSX = '{$tenNSX}' WHERE MaNhaSX = '{$mansx}';";
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Cập nhật nhà sản xuất thành công.');</script>";
        echo "<script type='text/javascript'>window.location.href = 'index.php?page=manufacturers_show';</script>";
    } else {
        echo "<script>alert('Cập nhật nhà sản xuất thất bại.');</script>";
    }
}
?>
