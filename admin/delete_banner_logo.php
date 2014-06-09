<?php

$id = $_GET["id"];
$query = "SELECT DuongDan FROM tbl_banner WHERE MaBanner = {$id}";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
    unlink("../{$rows['DuongDan']}"); // x�a ?nh
}
$sql = "DELETE FROM tbl_banner WHERE MaBanner = '$id'";
$result = mysql_query($sql);

if ($result) {
    echo "<script>alert('Xóa banner logo thành công.');</script>";
} else {
    echo "<script>alert('Xóa banner logo thất bại.');</script>";
}
?>
