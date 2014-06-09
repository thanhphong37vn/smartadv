<?php
include('check_upload.php');

if (isset($_POST['btnThem'])) {
    if ($_FILES["uploadanhchinh"]["error"] > 0) {
        echo "Co loi khi upload: " . $_FILES["uploadanhchinh"]["error"];
    } else {
        $file = check_upload();
        if (strlen(trim($file)) > 0) {
            $query = "SELECT MaSP FROM tbl_sanpham ORDER BY MaSP DESC LIMIT 0, 1;";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            $last_id = $row['MaSP']; // Mã sp cuối cùng
            $last_id++; // tăng mã sp lên 1

            $tenSP = $_POST['TenSP'];
            $gia = $_POST['Gia'];
            $giaKM = $_POST['GiaKM'];
            $baohanh = $_POST['BaoHanh'];
            $moi = (isset($_POST['Moi'])) ? 1 : 0;
            $khuyenmai = (isset($_POST['KhuyenMai'])) ? 1 : 0;
            $loaiSP = $_POST['LoaiSP'];
            $nhaSX = $_POST['NhaSX'];
            $linkdowload = $_POST['LinkDowload'];
            $mota = $_POST['MoTa'];
            $trangthai = $_POST['TrangThai'];


            mysql_query("SET NAMES UTF8");
            $sql1 = "INSERT INTO tbl_sanpham(MaSP,TenSP,MoTa,Gia,GiaCu,BaoHanh,SPMoi,KhuyenMai,MaLoai,MaNhaSX,NgayThem,LinkDowload,TrangThai)
                VALUES ({$last_id},'{$tenSP}','{$mota}','$giaKM','{$gia}','{$baohanh}','$moi','{$khuyenmai}','{$loaiSP}','{$nhaSX}','NOW()','{$linkdowload}','{$trangthai}');";
            $result1 = mysql_query($sql1);
            if ($result1) {
                $query2 = "INSERT INTO tbl_hinhanh(MaSP, DuongDan) VALUES ({$last_id}, '{$file}');";
                $result2 = mysql_query($query2) or die('Lỗi thêm hình ảnh.' . mysql_error($last_id));
                echo "<script>alert('Thêm sản phẩm thành công.');</script>";
                echo "<script type='text/javascript'>window.location.href = 'index.php?page=product_show';</script>";
            } else {
                unlink($file);
                echo "<script>alert($last_id);</script>";
            }
            echo "<script>alert('Thêm sản phẩm thành công.');</script>";
        }
    }
}
?>


<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Thêm sản phẩm</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span3">Tên sản phẩm:</div>
                    <div class="span9"><input value="" class="validate[required]" type="text" name="TenSP" id="tensp"/></div>
                    <div class="clear"></div>
                </div>                         

                <div class="row-form">
                    <div class="span3">Giá:</div>
                    <div class="span9"><input value="" class="validate[required,custom[number]]" type="text" name="Gia" id="moi" /></div>
                    <div class="clear"></div>
                </div>  

                <div class="row-form">
                    <div class="span3">Giá khuyến mại:</div>
                    <div class="span9"><input value=""  type="text" name="GiaKM" id="khuyenmai" /></div>
                    <div class="clear"></div>
                </div>

                <div class="row-form">
                    <div class="span3">Bảo hành:</div>
                    <div class="span9"><input value="" class="validate[required,custom[number]]" type="text" name="BaoHanh" id="baohanh" /></div>
                    <div class="clear"></div>
                </div>

                <div class="row-form">
                    <div class="span5">Sản phẩm mới-khuyến mại:</div>
                    <div class="span7">
                        <label class="checkbox inline">
                            <input type="checkbox" name="Moi" value="1"/>Sản phẩm mới
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="KhuyenMai" value="1"/>Khuyến mại
                        </label>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="row-form">
                    <div class="span3">Tên loại sản phẩm:</div>
                    <div class="span9">        
                        <select name="LoaiSP" id="tenloaisp" class="validate[required]">
                            <option value="">Chọn loại sản phẩm</option>
                            <?php
                            $sql = "SELECT * FROM tbl_loaisp WHERE MaCha = 0";
                            $result = mysql_query($sql);
                            while ($rows = mysql_fetch_array($result)) {
                                echo "<option value='{$rows['MaLoai']}' label='+{$rows['TenLoai']}'>--{$rows['TenLoai']}";
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
                    <div class="span3">Tên Nhà sản xuất:</div>
                    <div class="span9">        
                        <select name="NhaSX" id="nhasx" class="validate[required]">
                            <option value="">Chọn nhà sản xuất</option>
                            <?php
                            $sql = "SELECT * FROM tbl_nhasx";
                            $result = mysql_query($sql);
                            while ($rows = mysql_fetch_array($result)) {
                                echo "<option value='{$rows['MaNhaSX']}'>{$rows['TenNhaSX']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>                                                                                 

                <div class="row-form">
                    <div class="span3">Link dowload hướng dẫn sử dụng:</div>
                    <div class="span9">        
                        <input value="" type="text" name="LinkDowload" id="linkdowload"/>
                    </div>
                    <div class="clear"></div>
                </div>   
                <div class="row-form">
                    <div class="span5">Thêm hình ảnh:</div>
                    <div class="span7">                                                                
                        <input type="file" name="uploadanhchinh"/>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-form">
                    <div class="span5">Trạng thái:</div>
                    <div class="span7">
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" checked="checked" value="1"/> Còn hàng
                        </label>
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" value="0"/> Hết hàng
                        </label>
                    </div>
                    <div class="clear"></div>
                </div>   
                <div class="row-fluid">
                    <div class="span3">Mô tả:</div>
                    <div class="span9">
                        <textarea id="wysiwyg" class="ckeditor" name="MoTa" style="height: 300px;"></textarea>
                    </div>
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