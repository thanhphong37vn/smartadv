<div id="fdmega-menu">
    <ul id="menu_n">
        <li><a href="index.php?page=news">Tin tức</a>
        <li><a href="#">Tất cả sản phẩm</a>
            <div class="con ms2">
                    <?php
                    $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = 0";
                    $result = mysql_query($sql);
                    while ($rows = mysql_fetch_array($result)) {
                        echo "<div class='cont cs21'><h3 class='me'><a href='index.php?page=product_categories_show&id={$rows['MaLoai']}&n={$rows['TenLoai']}'>{$rows['TenLoai']}</a></h3>";
                        submenu($rows['MaLoai']);
                        echo "</div>";
                    }

                    function submenu($_macha) {
                        $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = '$_macha'";
                        $result = mysql_query($sql);
                        while ($rows = mysql_fetch_array($result)) {
                            echo "<a href='index.php?page=product_categories_show&id={$rows['MaLoai']}&n={$rows['TenLoai']}'>{$rows['TenLoai']}</a>";
                        }
                    }
                    ?>
            </div>
        </li>
        <li><a href="index.php?page=new_product">Sản phẩm mới</a></li>
        <li><a href="index.php?page=sales_product">Sản phẩm khuyến mại</a></li>
    </ul><div style="clear:both"></div>
</div>
<div style="clear:both"></div>
