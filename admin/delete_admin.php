<?php

$id = $_GET["id"];
$query = "SELECT Avatar FROM tbl_banner WHERE MaAdmin = {$id}";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
    unlink("../{$rows['Avatar']}"); // x�a ?nh
}

$sql = "DELETE FROM tbl_admin WHERE MaAdmin = '$id'";

$result = mysql_query($sql);
if ($result) {
    echo "<script>alert('Xóa quản trị viên thành công.');</script>";
} else {
    echo "<script>alert('Xóa quản trị viên thất bại.');</script>";
}
?>