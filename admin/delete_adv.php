<?php

$id = $_GET["id"];
$query = "SELECT DuongDanAnh FROM tbl_quangcao WHERE MaQC = '{$id}'";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
    unlink("../{$rows['DuongDanAnh']}"); // x�a ?nh
}
$sql = "DELETE FROM tbl_quangcao WHERE MaQC = '{$id}'";
$result = mysql_query($sql);

if ($result) {
    echo "<script>alert('Xóa banner logo thành công.');</script>";
} else {
    echo "<script>alert('Xóa banner logo thất bại.');</script>";
}
?>
