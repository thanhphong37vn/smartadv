</div>
<div class="product_de">
    <div class='content'>
        <?php echo"<div class='info_product'>
    <ol id='toc'>
        <li class='current'><a href=''><span>Thông tin về công ty</span></a></li>
    </ol>
    <div class='content_info'>"; ?>
        <?php
        $sql = "SELECT ThongTin FROM tbl_info WHERE ViTri = '3'";
        $result = mysql_query($sql);
        while ($rows = mysql_fetch_array($result)) {
            echo "<p>{$rows['ThongTin']}</p>";
        }
        echo "</div>";
        ?>
    </div>
</div>