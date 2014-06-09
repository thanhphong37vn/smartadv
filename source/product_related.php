<?php
if (isset($_GET['ml'])) {
    $ml = $_GET['ml'];
    echo "<div class='title'>SẢN PHẨM LIÊN QUAN</div><div class='content'>";
    $sql = "SELECT A.*, B.DuongDan, C.* FROM tbl_sanpham A INNER JOIN tbl_hinhanh B ON A.MaSP = B.MaSP INNER JOIN tbl_loaisp C ON C.MaLoai = A.MaLoai  WHERE A.MaLoai = '{$ml}'";
    $result = mysql_query($sql) or die("Khong truy cap toi CSDL");
    if ($result && mysql_num_rows($result) > 0) {
        while ($set = mysql_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<div class='topproduct'>
                <div class='topproduct2'>
                    <div class='image'><a href='index.php?page=product_detail&id={$set['MaSP']}&ml={$set['MaLoai']}&ns={$set['TenSP']}'><img src='{$set['DuongDan']}' width='160' height='155'/></a></div>
                    <div class='titlep'><a href='index.php?page=product_detail&id={$set['MaSP']}&ml={$set['MaLoai']}&ns={$set['TenSP']}'>{$set['TenSP']}</a></div>";?><?php 
                    if ($set['GiaCu'] == 0 ) {
                echo "<div class='price'>Giá: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>Call</span></div>";
            } else {
                echo "<div class='price'>Giá: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>" . number_format($set['Gia'], 0, '.', '.') . " VND</span></div>";
            }

            if ($set['SPMoi'] > 0 || $set['KhuyenMai'] > 0) {
                echo "<div class='price'>Giá KM: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>" . number_format($set['Gia'], 0, '.', '.') . " VND</span></div>
                <div class='itemOnlyKM'><span>Sale</span></div>";
            } else {
                echo "<div class='price'>Giá KM: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>Call</span></div>";
            }
            ?><?php

            echo "
                    <div class='cart'><div class='cart1'><a href=''>Mua</a></div></div>
                    <div style='clear:both'></div></div></div>";
        }
    } else {
        echo "<center>    
            <label style='color: red; font-size: 22px; font-weight: bold'>Không có sản phẩm nào</label></br>
            <img src='images/NoProduct.jpg'/>
           </center>";
    }
}
echo "</div>";
            ?>