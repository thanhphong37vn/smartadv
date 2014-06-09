<?php
echo "<div class='title'>SẢN PHẨM TIÊU BIỂU</div><div class='content'>";
$display = 20;
if (isset($_GET['page']) && (int) ($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $query = "SELECT COUNT(MaSP) FROM tbl_sanpham";
    $res = mysql_query($query) or die('Khong truy cap toi CSDL');
    $rows = mysql_fetch_array($res, MYSQL_NUM);
    $record = $rows[0];
    if ($record > $display) {
        $page = ceil($record / $display);
    } else {
        $page = 1;
    }
}
$start = isset($_GET['start']) && (int) ($_GET['start']) ? $_GET['start'] : 0;
$sql = "SELECT A . * , B.DuongDan, C.TenNhaSX FROM tbl_sanpham A INNER JOIN tbl_hinhanh B INNER JOIN tbl_nhasx C ON C.MaNhaSX = A.MaNhaSX AND A.MaSP = B.MaSP WHERE KhuyenMai = 1 LIMIT $start,$display";
$result = mysql_query($sql) or die("Khong truy cap toi CSDL");
if ($result && mysql_num_rows($result) > 0) {
    while ($set = mysql_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<div class='topproduct'>
                <div class='topproduct2'>
                    <div class='image'><a href='index.php?page=product_detail&id={$set['MaSP']}&ml={$set['MaLoai']}&ns={$set['TenSP']}'><img src='{$set['DuongDan']}' width='160' height='155'/></a></div>
                    <div class='titlep'><a href='index.php?page=product_detail&id={$set['MaSP']}&ml={$set['MaLoai']}&ns={$set['TenSP']}'>{$set['TenSP']}</a></div>
                    <div class='price'>Giá bán: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>" . number_format($set['GiaCu'], 0, '.', '.') . " VND</span></div>";
        ?>
        <?php
        if ($set['SPMoi'] > 0 || $set['KhuyenMai'] > 0) {
            echo "<div class='price'>Giá KM: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>" . number_format($set['Gia'], 0, '.', '.') . " VND</span></div>
                <div class='itemOnlyKM'><span>Sale</span></div>
                        ";
        }else{
            echo "<div class='price'>Giá KM: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>Call</span></div>";
        }
        ?><?php
        echo "
                    <div class='cart'><div class='cart1'><a href=''>Mua</a></div></div>
                    <div style='clear:both'></div></div>
            </div>";
    }
    echo "<ul id='pagination-digg'>";
    if ($page > 1) {
        $next = $start + $display;
        $prev = $start - $display;
        $current = ($start / $display) + 1;
        if ($current != 1) {
            echo "<li class='next'><a href='index.php?page=product&start=$prev'>«Previous</a></li>";
        }
        for ($i = 1; $i <= $page; $i++) {
            if ($current != $i) {
                echo "<li><a href='index.php?page=product&start=" . ($display * ($i - 1)) . "'>$i</a></li>";
            } else {
                echo "<li class='active'>$i</li>";
            }
        }
        if ($current != $page) {
            echo "<li class='next'><a href='index.php?page=product&start=$next'>Next »</a></li>";
        }
    }
} else {
    echo "<center>    
            <label style='color: red; font-size: 22px; font-weight: bold'>Không có sản phẩm nào</label></br>
            <img src='images/NoProduct.jpg'/>
           </center>";
}
echo "</div>";
?>