<?php
include('check_upload_banner_logo.php');
if (isset($_POST['btnThem'])) {
    if ($_FILES["uploadanhchinh"]["error"] > 0) {
        echo "<script>alert('Co loi khi upload: {$_FILES['uploadanhchinh']['error']}')</script>";
    } else {
        $file = check_upload_banner_logo();
        if (strlen(trim($file)) > 0) {
            $query = "SELECT MaQC FROM tbl_quangcao ORDER BY MaQC DESC LIMIT 0, 1;";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            $last_id = $row['MaQC']; // Mã sp cuối cùng
            $last_id++;

            $tenQC = $_POST['TenQC'];
            $link = $_POST['Link'];
            $vitri = $_POST['ViTri'];
            $trangthai = $_POST['TrangThai'];

            $sql = "INSERT INTO tbl_quangcao(MaQC,TenQC,DuongDanAnh,Link,ViTri,TrangThai) VALUES ($last_id,'$tenQC','$file','$link','$vitri','$trangthai');";
            $result = mysql_query($sql);
            if ($result) {
                echo "<script>alert('Thêm banner logo thành công.');</script>";
                echo "<script type='text/javascript'>window.location.href = 'index.php?page=show_admin';</script>";
            } else {
                unlink($file);
                echo "<script>alert('Thêm banner logo thất bại.');</script>";
            }
        }
    }
}
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm quảng cáo</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span3">Tên banner logo:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="TenQC" id="equals"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Link dẫn tới website:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="Link" id="equals"/></div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Thêm hình ảnh:</div>
                    <div class="span7">                                                                
                        <input type="file" name="uploadanhchinh"/>
                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="row-form">
                    <div class="span3">Vị trí đặt:</div>
                    <div class="span9">        
                        <select name="ViTri" id="sport" class="validate[required]">
                            <option value="0">Chọn vị trí</option>
                            <option value="1">Quảng cáo 1</option>
                            <option value="2">Quảng cáo 2</option>
                            <option value="3">Quảng cáo 3</option>
                            <option value="4">Quảng cáo 4</option>
                            <option value="5">Quảng bên trái</option>
                            <option value="6">Quảng bên phải</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span5">Chọn trạng thái:</div>
                    <div class="span7">
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" value="0"/> Ẩn
                        </label>
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" checked="checked" value="1"/> Hiện
                        </label>
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