<div id="slide">
    <div class="border_box">
        <div class="box_skitter box_skitter_large">
            <ul>
                <?php
                $sql = "SELECT * FROM tbl_banner WHERE ViTri = '2'";
                $result = mysql_query($sql);
                while ($rows = mysql_fetch_array($result)) {
                    if ($rows['TrangThai'] == 1) {
                        echo "<li><a href=''><img src='{$rows['DuongDan']}'/></a><div class='label_text'><p>block</p></div></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div id="hotro">
    <div class="title">HỖ TRỢ TRỰC TUYẾN</div>
    <div class="content" style="height: 200px;">
        <!--        <div style="font:16px Georgia; color:#ff5400; padding:10px 0 15px 70px;">Mr.Kiên : 0936 38 39 32</div>-->
        <div style="height:30px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:25px; padding-top:7px; margin-left:20px;">Mr.Kiên: 0936 38 39 32</div>
        <div style="height:10px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:25px; padding-top:7px; margin-left:20px;">ĐT : 04.2200.1555</div>
            <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <div id="SkypeButton_Call_quangcaosmart_1" style="height:10px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:10px; padding-top:7px; margin-left:10px;">
            Mail :<a href="mailto:vsmart.hn@gmail.com?Subject=Làm biển quảng cáo" target="_top">vsmart.hn@gmail.com</a><br>
            Skype:<a href="#">quangcaosmart</a>
<!--            <div id="SkypeButton_Call_quangcaosmart_1" >-->
                <script type="text/javascript">
                    Skype.ui({
                        "name": "dropdown",
                        "element": "SkypeButton_Call_quangcaosmart_1",
                        "participants": ["quangcaosmart"]
                    });
                </script>
<!--            </div>-->
            <!--
            <div style="background:url(images/hotro_15.jpg) no-repeat; height:30px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:25px; padding-top:7px; margin-left:20px;">04.2200.1555</div><!--
            <div style="background:url(images/hotro_15.jpg) no-repeat; height:30px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:25px; padding-top:7px; margin-left:20px;">Tư vấn sản phẩm</div>-->
            <!--        <div style="background:url(images/hotro_15.jpg) no-repeat; height:30px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:25px; padding-top:7px; margin-left:20px;">Hướng dẫn sử dụng</div>-->
            <!--        <div > -->
            <br>
            <!--        <div style="background:url(images/hotro_15.jpg) no-repeat; height:30px; font:12px Tahoma; color:#06a9ba; font-weight:bold; padding-left:25px; padding-top:7px; margin-left:20px;">Bảo hành</div>-->
            <div style=" float:left; color:#ff5400; font:12px Tahoma; font-weight:bold;">Vui lòng liên hệ số Hotline để có giá tốt nhất</div>
        </div>
        <!--        </div>-->
    </div>