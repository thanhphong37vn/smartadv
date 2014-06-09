<?php
if (isset($_POST['btnThem'])) {
    $query = "SELECT MaNhaSX FROM tbl_nhasx ORDER BY MaNhaSX DESC LIMIT 0, 1;";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $last_id = $row['MaNhaSX']; // Mã sp cuối cùng
    $last_id++;

    $tenNSX = $_POST['TenNSX'];
    $sql = "INSERT INTO tbl_nhasx(MaNhaSX,TenNhaSX) VALUES($last_id,'{$tenNSX}')";
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Thêm nhà sản xuất thành công.');</script>";
        echo "<script type='text/javascript'>window.location.href = 'index.php?page=manufacturers_show';</script>";
    } else {
        echo "<script>alert('Thêm nhà sản xuất thất bại.');</script>";
    }
}
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm nhà sản xuất</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="">
                <div class="row-form">
                    <div class="span3">Tên nhà sản xuất:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="TenNSX" id="equals"/></div>
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