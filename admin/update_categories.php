<?php 
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_loaisp WHERE MaLoai = '{$id}'";
    $result = mysql_query($sql);
    $rows = mysql_fetch_array($result);
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Cập nhật loại sản phẩm</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="index.php?page=update_categories_process">
                <div class="row-form">
                    <div class="span9"><input value="<?php echo $rows['MaLoai'] ?>" type="hidden" name="MaLoai" id="equals"/></div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span3">Tên loại sản phẩm:</div>
                    <div class="span9"><input value="<?php echo $rows['TenLoai'] ?>" class="validate[required]" type="text" name="TenLoai" id="equals"/></div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span3">Chọn mục loại sản phẩm:</div>
                    <div class="span9">        
                        <select name="LoaiSP" id="sport">
                            <option value="0">Loại sản phẩm mới</option>
                            <?php
                            $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = 0";
                            $result = mysql_query($sql);
                            while ($rows = mysql_fetch_array($result)) {
                                echo "<option value='{$rows['MaLoai']}'>+{$rows['TenLoai']}";
                                sub_menu($rows['MaLoai']);
                            }

                            function sub_menu($_macha) {
                                $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = '$_macha'";
                                $result = mysql_query($sql);
                                while ($rows = mysql_fetch_array($result)) {
                                    echo "<option value='{$rows['MaLoai']}'>---{$rows['TenLoai']}</option>";
                                    echo "</option>";
                                }
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