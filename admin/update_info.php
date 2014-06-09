<?php
$id = $_GET['i'];
$sql = "SELECT * FROM tbl_info WHERE MaCT = '$id'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$maCT = $rows['MaCT'];
$tenCT = $rows['TenCT'];
$diaChi = $rows['DiaChi'];
$dtdd = $rows['DienThoaiDD'];
$hotLine = $rows['HotLine'];
$website = $rows['Website'];
$thongtin = $rows['ThongTin'];
$vitri = $rows['ViTri'];
?>

<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Cập nhật thông tin công  ty</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="index.php?page=update_info_process"> 
                <div class="row-form">
                    <div class="span3"></div>
                    <div class="span9">
                        <input value="<?php echo $maCT ?>" class="validate[required]" type="hidden" name="MaCT" id="tenCT"/>
                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Tên công ty:</div>
                    <div class="span9"><input value="<?php echo $tenCT ?>" class="validate[required]" type="text" name="TenCT" id="tenCT"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Địa chỉ:</div>
                    <div class="span9"><input value="<?php echo $diaChi ?>" type="text" name="DiaChi" id="diaChi"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Điện thoại di động:</div>
                    <div class="span9"><input value="<?php echo $dtdd ?>" type="text" name="DTDD" id="dtdd"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Hotline:</div>
                    <div class="span9"><input value="<?php echo $hotLine ?>" type="text" name="HotLine" id="hotLine"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Địa chỉ website:</div>
                    <div class="span9"><input value="<?php echo $website ?>" type="text" name="Website" id="website"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-fluid">
                    <div class="span3">Thông tin về công ty:</div>
                    <div class="span9">
                        <textarea id="wysiwyg" name="ThongTin" style="height: 300px;"><?php echo $thongtin ?></textarea>
                    </div>
                </div>
                <div class="row-form">
                    <div class="span3">Vị trí đặt:</div>
                    <div class="span9">        
                        <select name="ViTri" id="sport">
                            <?php
                            if ($vitri == 0) {
                                echo "<option selected='selected' value='0'>Chọn vị trí</option>
                                    <option value='1'>Bên trái</option>
                                    <option value='2'>Bên phải</option>
                                    <option value='3'>Page giữa</option>";
                            }
                            if ($vitri == 1) {
                                echo "<option value='0'>Chọn vị trí</option>
                                    <option  selected='selected' value='$vitri'>Bên trái</option>
                                    <option value='2'>Bên phải</option>
                                    <option value='3'>Page giữa</option>";
                            }
                            if ($vitri == 2) {
                                echo "<option value='0'>Chọn vị trí</option>
                                    <option value='1'>Bên trái</option>
                                    <option selected='selected'  value='$vitri'>Bên phải</option>
                                    <option value='3'>Page giữa</option>";
                            }
                            if ($vitri == 3) {
                                echo "<option value='0'>Chọn vị trí</option>
                                    <option value='1'>Bên trái</option>
                                    <option value='2'>Bên phải</option>
                                    <option  selected='selected' value='$vitri'>Page giữa</option>";
                            }
                            ?>                            
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span3"></div>
                    <div class="span9">        
                        <p><input class="btn btn-success" name="btnThem" type="submit" value="Cập nhật"/></p>
                    </div>
                    <div class="clear"></div>
                </div>   
            </form>
        </div>
    </div>
</div>
