<?php
if ($_POST['btnThem']) {

    $query = "SELECT MaLoai FROM tbl_loaisp ORDER BY MaLoai DESC LIMIT 0, 1;";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $last_id = $row['MaLoai']; // Mã sp cuối cùng
    $last_id++;

    $tenloai = $_POST['TenLoai'];
    $loaiSP = $_POST['LoaiSP'];
    $sql = "INSERT INTO tbl_loaisp(MaLoai,TenLoai,MaCha) VALUES($last_id,'{$tenloai}','{$loaiSP}')";
    mysql_query("SET NAMES UTF8");
    $result = mysql_query($sql);
    if ($result) {
        echo "<script>alert('Thêm loại sản phẩm thành công.');</script>";
    } else {
        echo "<script>alert('Thêm loại sản phẩm thất bại.');</script>";
    }
}
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm loại sản phẩm</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="">
                <div class="row-form">
                    <div class="span3">Tên loại sản phẩm:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="TenLoai" id="equals"/></div>
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
                        <p><input class="btn btn-success" name="btnThem" type="submit" value="Thêm"/></p>
                    </div>
                    <div class="clear"></div>
                </div>   
            </form>
        </div>
    </div>
</div>