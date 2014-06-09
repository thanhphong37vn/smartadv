<div id="banner">                
    <?php
    $sql = "SELECT * FROM tbl_banner WHERE TrangThai = 1";
    $result = mysql_query($sql);
    while ($rows = mysql_fetch_array($result)) {
        if ($rows['ViTri'] == 1) {
            echo "<div id='logo'><a href='index.php'><img src='{$rows['DuongDan']}' /></a></div>";
        }
    }
    ?>
    <div id="search"> 
        <form action="index.php?page=page_search" method="POST">
            <input type="text" id="keywords" name="keywords" placeholder="Nhập từ khóa tìm kiếm" style="border:none;border-right:1px solid #CCC; padding:7px 10px 8px 10px; width:355px; float:left;" />
            <div style="float:left;"> 
                <input type="submit" value=" " style="background:url(images/search_03.jpg) no-repeat; padding:10px 5px 5px 5px; border:none; width:24px; height:31px;" /></div>
            <div style="clear:both"></div>
            <div id="results"></div>
        </form>
    </div>
    <!--    <div id="cart"><a href="#"> Giỏ hàng </a><font color="#FF0000">(2)</font></div>-->
</div>
