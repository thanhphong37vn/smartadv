<div class="title">SẢN PHẨM KHUYẾN MÃI</div>
<div class="content">
    <marquee scrollamount="5" direction="left" onmousemove="this.stop()" behavior="scroll" onmouseout="this.start()" width="795px">

        <?php
        $sql = "SELECT * FROM tbl_sanpham A INNER JOIN tbl_hinhanh B ON A.MaSP = B.MaSP WHERE A.TrangThai=1 ";
        $result = mysql_query($sql);
        while ($rows = mysql_fetch_array($result)) {
//            if ($rows['TrangThai'] == 1) {
                if ($rows['SPMoi'] == 1 | $rows['KhuyenMai'] == 1) {
                    echo "<div class='topproduct'>
                    <div class='topproduct2'>
                    <div class='image'><a href='index.php?page=product_detail&id={$rows['MaSP']}&ml={$rows['MaLoai']}&ns={$rows['TenSP']}'><img src='{$rows['DuongDan']}' width='160' height='155'/></a></div>
                    <div class='titlep'><a href='index.php?page=product_detail&id={$rows['MaSP']}&ml={$rows['MaLoai']}&ns={$rows['TenSP']}'>{$rows['TenSP']}</a></div>                
                    <div class='price'>Giá bán: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>" . number_format($rows['GiaCu'], 0, '.', '.') . " VND</span></div>
                    <div class='price'>Sales: <span style='color:#F00;font:11px Tahoma;font-weight:bold;'>" . number_format($rows['Gia'], 0, '.', '.') . " VND</span></div>
                    <div class='itemOnlyKM'><span>Sale</span>
                    </div>";
                }
                echo "</div>
                    </div>";
//            }
        }
        ?>
        <!--<div class="cart"><div class="cart1"><a href="">Mua</a></div></div>-->
        <div style="clear:both"></div>
    </marquee>
</div>