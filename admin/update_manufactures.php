<?php
    $id = $_GET['id'];
    
    $query = "SELECT * FROM tbl_nhasx WHERE MaNhaSX = {$id}";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);    
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Cập nhật nhà sản xuất</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="index.php?page=update_manufactures_process">
                <div class="row-form">
                    <div class="span9"><input value="<?php echo $row['MaNhaSX'] ?>" type="hidden" name="MaNSX" id="equals"/></div>
                    <div class="clear"></div>
                </div>                         
                <div class="row-form">
                    <div class="span3">Tên nhà sản xuất:</div>
                    <div class="span9"><input value="<?php echo $row['TenNhaSX'] ?>" class="validate[required]" type="text" name="TenNSX" id="equals"/></div>
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
