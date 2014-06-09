<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_banner WHERE MaBanner = {$id}";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$maBanner = $rows['MaBanner'];
$tenBanner = $rows['ChuThich'];
$anhchinh_cu = $rows['DuongDan'];
$vitri = $rows['ViTri'];
$trangthai = $rows['TrangThai'];
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm banner logo</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="index.php?page=update_banner_logo_process" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span9"><input value="<?php echo $maBanner ?>" class="validate[required]" type="hidden" name="MaBanner" id="equals"/></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Tên banner logo:</div>
                    <div class="span9"><input value="<?php echo $tenBanner ?>" class="validate[required]" type="text" name="TenBanner" id="equals"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Thêm hình ảnh:</div>
                    <div class="span7">                                                                
                        <input type="hidden" name="anhchinh_cu" value="<?php echo $anhchinh_cu ?>" />
                        <input type="file" name="uploadanhchinh"/><br /><br />
                        <img src="../<?php echo $anhchinh_cu; ?>" width='160' height='155' />
                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Vị trí đặt:</div>
                    <div class="span9">        
                        <select name="ViTri" id="sport" class="validate[required]">
                            <?php
                            if ($vitri == 0) {
                                echo "<option selected='selected' value='0'>Chọn vị trí</option>
                                       <option value='1'>Logo</option>
                                       <option value='2'>Banner quảng cáo</option>";
                            }
                            if ($vitri == 1) {
                                echo "<option value='0'>Chọn vị trí</option>";
                                echo "<option selected='selected' value='{$rows['ViTri']}'>Logo</option>";
                                echo "<option value='2'>Banner quảng cáo</option>";
                            }
                            if ($vitri == 2) {
                                echo "<option value='0'>Chọn vị trí</option>";
                                echo "<option value='1'>Logo</option>";
                                echo "<option selected='selected' value='{$rows['ViTri']}'>Banner quảng cáo</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span5">Chọn trạng thái:</div>
                    <div class="span7">
                        <?php
                    if ($trangthai == 1) {
                        $Hien = 'checked="true"';
                        $An = '';
                    } else {
                        $An = 'checked="true"';
                        $Hien = '';
                    }
                    ?>
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" value="0" <?php echo $An ?>/> Ẩn
                        </label>
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" value="1" <?php echo $Hien ?>/> Hiện
                        </label>
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