<?php
if (isset($_SESSION["admin_login"])) {
    $sql = "SELECT * FROM tbl_admin WHERE TenDangNhap = '{$_SESSION["admin_login"]}'";
    $result = mysql_query($sql);
    if ($rows = mysql_fetch_array($result)) {
        $_SESSION["author"] = $rows['QuyenHan'];
    }
}
?>