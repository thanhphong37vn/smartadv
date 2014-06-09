<div id="boxleft">
    <div class="title">DANH MỤC SẢN PHẨM</div>
    <div class="content">
        <div id="smoothmenu2" class="ddsmoothmenu-v">
            <ul>
                <?php
                $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = 0";
                $result = mysql_query($sql);
                while ($rows = mysql_fetch_array($result)) {
                    echo "<li><a href='index.php?page=product_categories_show&id={$rows['MaLoai']}&n={$rows['TenLoai']}'>{$rows['TenLoai']}</a><ul>";
                    sub_menu($rows['MaLoai']);
                    echo "</ul>";
                }

                function sub_menu($_macha) {
                    $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = '$_macha'";
                    $result = mysql_query($sql);
                    while ($rows = mysql_fetch_array($result)) {
                        echo "<li><a href='index.php?page=product_categories_show&id={$rows['MaLoai']}&n={$rows['TenLoai']}'>{$rows['TenLoai']}</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div><!-- end boxleft -->
<div id="quangcao">
    <div class="content">
        <?php
        $sql = "SELECT * FROM tbl_quangcao WHERE TrangThai = 1";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_array($result)) {
            if ($row['ViTri'] == "1") {
                echo "<a href='{$row['Link']}'><img src='{$row['DuongDanAnh']}' width='190' height='200'/></a>";
            }
            if ($row['ViTri'] == "2") {
                echo "<a href='{$row['Link']}'><img src='{$row['DuongDanAnh']}' width='190' height='200'/></a>";
            }
            if ($row['ViTri'] == "3") {
                echo "<a href='{$row['Link']}'><img src='{$row['DuongDanAnh']}' width='190' height='200'/></a>";
            }
            if ($row['ViTri'] == "4") {
                echo "<a href='{$row['Link']}'><img src='{$row['DuongDanAnh']}' width='190' height='200'/></a>";
            }
        }
        ?>
    </div>
</div>
<div id='download'>
    <div class='title'>Like facebook</div>
    <div class='content'>
<!--        <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/pages/Thi%E1%BA%BFt-B%E1%BB%8B-Mi%E1%BB%81n-B%E1%BA%AFc/181166678756556?ref=hl;width=180&amp;height=180&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:180px;" allowTransparency="true"></iframe>-->
          <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FTrung-t%25C3%25A2m-thi%25E1%25BA%25BFt-k%25E1%25BA%25BF-qu%25E1%25BA%25A3ng-c%25C3%25A1o-SMART%2F605984779455050%3Ffref%3Dts&amp;width=180&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:280px;" allowTransparency="true"></iframe>
    </div>
</div>
<div style='clear:both'></div>