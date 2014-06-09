<div class='title'>CHI TIẾT SẢN PHẨM</div>
<div class="product_de">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT A.*, B.DuongDan, C.TenNhaSX,D.* FROM tbl_sanpham A INNER JOIN tbl_hinhanh B ON A.MaSP = B.MaSP INNER JOIN tbl_nhasx C ON A.MaNhaSX = C.MaNhaSX INNER JOIN tbl_loaisp D ON D.MaLoai = A.MaLoai WHERE A.MaSP = '{$id}'";
        $result = mysql_query($sql);
        $rows = mysql_fetch_array($result);
        echo "<div class='img'><img src='{$rows['DuongDan']}' width='252' height='252'/></div>
            <div class='title_right'>
            <span>{$rows['TenSP']}</span>
            <table style='width: 100%; text-align: left'>
            <tbody>
                <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Tên loại:</td>
                    <td style='font-family: sans-serif;font-size: 14px'>{$rows['TenLoai']}</td>
                </tr>
                <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Nhà sản xuất:</td>
                    <td style='font-family: sans-serif;font-size: 14px'>{$rows['TenNhaSX']}</td>
                </tr>
                <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Bảo hành:</td>
                    <td style='font-family: sans-serif;font-size: 14px'>{$rows['BaoHanh']} tháng</td>
                </tr>
                <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Giá:</td>
                    <td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'>" . number_format($rows['GiaCu'], 0, '.', '.') . " VND</td>
                </tr>
                <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Giá khuyến mại:</td>";
        ?>
        <?php
        if ($rows['SPMoi'] > 0 | $rows['KhuyenMai'] > 0) {
            echo "<td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'>" . number_format($rows['Gia'], 0, '.', '.') . " VND</td>";
        } else {
            echo "<td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'>Liên hệ: Mr.Kiên(0936.38.39.32) để được giá tốt nhất</td>";
        }
        echo "</tr>
        <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Trạng thái:</td>";?>
    <?php if($rows['TrangThai']==1){
                    echo "<td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'>Còn Hàng</td>";
    }else{
                    echo "<td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'>Hết Hàng</td>";
    }
    echo "</tr>
                <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'>Hướng dẫn sử dụng:</td>
                    <td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'><a href='{$rows['LinkDowload']}'>Dowload</a></td>
    </tr>
        <tr>
                    <td style='width: 35%;font-family: sans-serif;font-size: 14px'></td>
                    <td style='font-family: sans-serif;font-size: 14px;color: #ff0000;font-weight: bold'>
                        <a href=''><img src='images/btnMua.png'/></a>
                    </td>
    </tr>
    <tr>
    <td></td>
    	<td>
    		<!-- AddThis Button BEGIN -->
<div class='addthis_toolbox addthis_default_style addthis_32x32_style'>
<a class='addthis_button_facebook'></a>
<a class='addthis_button_twitter'></a>
<a class='addthis_button_pinterest_share'></a>
<a class='addthis_button_google_plusone_share'></a>
</div>
<script type='text/javascript'>var addthis_config = {'data_track_addressbar':true};</script>
<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52a87ddc13afdf78'></script>
<!-- AddThis Button END -->
    	</td>
    </tr>
    </tbody>
    </table>
    </div>
    <div class='info_product'>
    <ol id='toc'>
        <li class='current'><a href=''><span>Thông tin sản phẩm</span></a></li>
    </ol>
    <div class='content_info'>
        <p>{$rows['MoTa']}</p>
    </div>";
    }
    ?>
</div></div>
<?php include('product_related.php'); ?>