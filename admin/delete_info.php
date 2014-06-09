<?php
    $id = $_GET['i'];
    $sql = "DELETE FROM tbl_info WHERE MaCT = '{$id}';";
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Xóa thông tin thành công.');</script>";
    } else {
        echo "<script>alert('Xóa thông tin thất bại.');</script>";
    }
?>

