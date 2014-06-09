<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include('config/dbconnect.php');
include('dao/include_dao.php');

$tblSanphamMySqlDAO = new TblSanphamMySqlDAO();
$queryAll = $tblSanphamMySqlDAO->queryAll();

$count = count($queryAll);
echo "<h1>Use DAO layer : " . $count . "</h1>";
for ($i = 1; $i <= $count; $i++) {
    echo "<p>";
    echo $queryAll[$i]->maSP . "----";
    echo $queryAll[$i]->tenSP . "----";
    echo $queryAll[$i]->moTa . "----";
    echo $queryAll[$i]->ngayThem . "----";
    echo $queryAll[$i]->ngaySua . "</br>";
}
?>