<?php
if ($_POST['btnThem']) {
    $query = "SELECT MaCT FROM tbl_info ORDER BY MaCT DESC LIMIT 0, 1;";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $last_id = $row['MaCT']; // Mã sp cuối cùng
    $last_id++;
    
    $tenCT = $_POST['TenCT'];
    $diaChi = $_POST['DiaChi'];
    $dtdd = $_POST['DTDD'];
    $hotLine = $_POST['HotLine'];
    $website = $_POST['Website'];
    $thongtin = $_POST['ThongTin'];
    $vitri = $_POST['ViTri'];

    $sql = "INSERT INTO tbl_info (MaCT,TenCT,DiaChi,DienThoaiDD,HotLine,Website,ThongTin,ViTri) VALUES ($last_id,'{$tenCT}','{$diaChi}','{$dtdd}','{$hotLine}','{$website}','{$thongtin}','{$vitri}');";
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Thêm thông tin thành công.');</script>";
    } else {
        echo "<script>alert('Thêm thông tin thất bại.');</script>";
    }
}
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm thông tin công  ty</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="">
                <div class="row-form">
                    <div class="span3">Tên công ty:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="TenCT" id="tenCT"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Địa chỉ:</div>
                    <div class="span9"><input value="" type="text" name="DiaChi" id="diaChi"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Điện thoại di động:</div>
                    <div class="span9"><input value="" type="text" name="DTDD" id="dtdd"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Hotline:</div>
                    <div class="span9"><input value="" type="text" name="HotLine" id="hotLine"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Địa chỉ website:</div>
                    <div class="span9"><input value="" type="text" name="Website" id="website"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-fluid">
                    <div class="span3">Thông tin về công ty:</div>
                    <div class="span9">
                        <textarea id="wysiwyg" name="ThongTin" style="height: 300px;"></textarea>
                    </div>
                </div>
                <div class="row-form">
                    <div class="span3">Vị trí đặt:</div>
                    <div class="span9">        
                        <select name="ViTri" id="sport">
                            <option value="0">Chọn vị trí</option>
                            <option value="1">Bên trái</option>
                            <option value="2">Bên phải</option>
                            <option value="3">Page giữa</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span3"></div>
                    <div class="span9">        
                        <p><input class="btn btn-success" name="btnThem" type="submit" value="Thêm"/></p>
                    </div>
                    <div class="clear"></div>
                </div>   
            </form>
        </div>
    </div>
</div>