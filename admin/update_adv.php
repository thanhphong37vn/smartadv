<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_quangcao WHERE MaQC = {$id}";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
$maQC = $rows['MaQC'];
$tenQC = $rows['TenQC'];
$link = $rows['Link'];
$vitri = $rows['ViTri'];
$trangthai = $rows['TrangThai'];
$anhchinh_cu = $rows['DuongDanAnh'];
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Cập nhật quảng cáo quảng cáo</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="index.php?page=update_adv_process" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span3"></div>
                    <div class="span9">
                        <input value="<?php echo $maQC ?>" class="validate[required]" type="hidden" name="MaQC" id="equals"/>
                    </div>
                </div> 
                <div class="row-form">
                    <div class="span3">Tên banner logo:</div>
                    <div class="span9"><input value="<?php echo $tenQC ?>" class="validate[required]" type="text" name="TenQC" id="equals"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Link dẫn tới website:</div>
                    <div class="span9"><input value="<?php echo $link ?>" class="validate[required]" type="text" name="Link" id="equals"/></div>
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
                            <option value='1'>Quảng cáo 1</option>
                            <option value='2'>Quảng cáo 2</option>
                            <option value='3'>Quảng cáo 3</option>
                            <option value='4'>Quảng cáo 4</option>
                            <option value='5'>Quảng bên trái</option>
                            <option value='6'>Quảng bên phải</option>";
                            }
                            if ($vitri == 1) {
                                echo "<option value='0'>Chọn vị trí</option>
                            <option  selected='selected' value='$vitri'>Quảng cáo 1</option>
                            <option value='2'>Quảng cáo 2</option>
                            <option value='3'>Quảng cáo 3</option>
                            <option value='4'>Quảng cáo 4</option>
                            <option value='5'>Quảng bên trái</option>
                            <option value='6'>Quảng bên phải</option>";
                            }
                            if ($vitri == 2) {
                                echo "<option value='0'>Chọn vị trí</option>
                            <option value='1'>Quảng cáo 1</option>
                            <option  selected='selected' value='$vitri'>Quảng cáo 2</option>
                            <option value='3'>Quảng cáo 3</option>
                            <option value='4'>Quảng cáo 4</option>
                            <option value='5'>Quảng bên trái</option>
                            <option value='6'>Quảng bên phải</option>";
                            }
                            if ($vitri == 3) {
                                echo "<option value='0'>Chọn vị trí</option>
                            <option value='1'>Quảng cáo 1</option>
                            <option value='2'>Quảng cáo 2</option>
                            <option  selected='selected' value='$vitri'>Quảng cáo 3</option>
                            <option value='4'>Quảng cáo 4</option>
                            <option value='5'>Quảng bên trái</option>
                            <option value='6'>Quảng bên phải</option>";
                            }
                            if ($vitri == 4) {
                                echo "<option value='0'>Chọn vị trí</option>
                            <option value='1'>Quảng cáo 1</option>
                            <option value='2'>Quảng cáo 2</option>
                            <option value='3'>Quảng cáo 3</option>
                            <option  selected='selected' value='$vitri'>Quảng cáo 4</option>
                            <option value='5'>Quảng bên trái</option>
                            <option value='6'>Quảng bên phải</option>";
                            }
                            if ($vitri == 5) {
                                echo "<option value='0'>Chọn vị trí</option>
                            <option value='1'>Quảng cáo 1</option>
                            <option value='2'>Quảng cáo 2</option>
                            <option value='3'>Quảng cáo 3</option>
                            <option value='4'>Quảng cáo 4</option>
                            <option  selected='selected' value='$vitri'>Quảng bên trái</option>
                            <option value='6'>Quảng bên phải</option>";
                            }
                            if ($vitri == 6) {
                                echo "<option value='0'>Chọn vị trí</option>
                            <option value='1'>Quảng cáo 1</option>
                            <option value='2'>Quảng cáo 2</option>
                            <option value='3'>Quảng cáo 3</option>
                            <option value='4'>Quảng cáo 4</option>
                            <option value='5'>Quảng bên trái</option>
                            <option  selected='selected' value='$vitri'>Quảng bên phải</option>";
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
