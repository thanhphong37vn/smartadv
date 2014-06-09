<?php
$id = $_GET['id'];
$query = "SELECT * FROM tbl_sanpham A INNER JOIN tbl_hinhanh B ON A.MaSP = B.MaSP WHERE A.MaSP = {$id};";
$result = mysql_query($query);
$rows = mysql_fetch_array($result);

$tenSP = $rows['TenSP'];
$mota = $rows['MoTa'];
$gia = $rows['GiaCu'];
$giaKM = $rows['Gia'];
$baohanh = $rows['BaoHanh'];
$moi = $rows['SPMoi'];
$khuyenmai = $rows['KhuyenMai'];
$loaiSP = $rows['MaLoai'];
$nhaSX = $rows['MaNhaSX'];
$linkdowload = $rows['LinkDowload'];
$anhchinh_cu = $rows['DuongDan'];
$trangthai = $rows['TrangThai'];
?>
<div class="row-fluid">
    <div class="span6">
        <div class="head">
            <div class="isw-ok"></div>
            <h1>Cập nhật sản phẩm</h1>
            <div class="clear"></div>
        </div>
        <div class="block-fluid">                        
            <form id="validation" method="POST" action="index.php?page=update_product_process" enctype="multipart/form-data">
                <div class="row-form">
                    <div class="span9"><input value="<?php echo $id ?>" type="hidden" name="MaSP" id="masp"/></div>
                    <div class="clear"></div>
                </div>                         
                <div class="row-form">
                    <div class="span3">Tên sản phẩm:</div>
                    <div class="span9"><input value="<?php echo $tenSP ?>" class="validate[required]" type="text" name="TenSP" id="tensp"/></div>
                    <div class="clear"></div>
                </div>                         

                <div class="row-form">
                    <div class="span3">Giá:</div>
                    <div class="span9"><input value="<?php echo $gia ?>" class="validate[required,custom[number]]" type="text" name="Gia"/></div>
                    <div class="clear"></div>
                </div>  

                <div class="row-form">
                    <div class="span3">Giá khuyến mại:</div>
                    <div class="span9"><input value="<?php echo $giaKM ?>"  type="text" name="GiaKM" id="khuyenmai" /></div>
                    <div class="clear"></div>
                </div>

                <div class="row-form">
                    <div class="span3">Bảo hành:</div>
                    <div class="span9"><input value="<?php echo $baohanh ?>" class="validate[required,custom[number]]" type="text" name="BaoHanh" id="baohanh" /></div>
                    <div class="clear"></div>
                </div>

                <div class="row-form">
                    <div class="span5">Sản phẩm mới-khuyến mại:</div>
                    <div class="span7">
                        <label class="checkbox inline">
                            <input type="checkbox" name="Moi" <?php echo ($moi == 1) ? "checked='checked'" : ""; ?>/>Sản phẩm mới
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="KhuyenMai" <?php echo ($khuyenmai == 1) ? "checked='checked'" : ""; ?>/>Khuyến mại
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
                            $sql = "SELECT * FROM tbl_loaisp WHERE MaLoai <> MaCha;";
                            $res = mysql_query($sql) or die("Lỗi truy xuất cơ sở dữ liệu");
                            while ($rows = mysql_fetch_array($res)) {
                                if ($rows['MaLoai'] == $loaiSP) {
                                    echo "<option selected='selected' value='{$rows['MaLoai']}'>{$rows['TenLoai']}</option>";
                                } else {
                                    echo "<option value='{$rows['MaLoai']}'>{$rows['TenLoai']}</option>";
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
                                if ($rows['MaNhaSX'] == $nhaSX) {
                                    echo "<option selected='selected' value='{$rows['MaNhaSX']}'>{$rows['TenNhaSX']}</option>";
                                } else {
                                    echo "<option value='{$rows['MaNhaSX']}'>{$rows['TenNhaSX']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>                                                                                 

                <div class="row-form">
                    <div class="span3">Link dowload hướng dẫn sử dụng:</div>
                    <div class="span9">        
                        <input value="<?php echo $linkdowload ?>" type="text" name="LinkDowload" id="linkdowload"/>
                    </div>
                    <div class="clear"></div>
                </div>   
                <div class="row-form">
                    <div class="span5">Thêm hình ảnh:</div>
                    <div class="span7">
<!--                        <input type="hidden" name="anhchinh_cu" value="<?php //echo $rows['DuongDan']; ?>" />-->
                        <input type="hidden" name="anhchinh_cu" value="../<?php echo $anhchinh_cu;?>" />
                        <input type="file" name="uploadanhchinh"/><br /><br />
                        <img src="../<?php echo $anhchinh_cu;?>" width='160' height='155' title="<?php echo $tenSP; ?>" />
                    </div>
                    <div class="clear"></div>
                </div>
                <?php
                    if($trangthai == 1){
                        $conHang = 'checked';
                        $hetHang = '';
                    }else{
                        $conHang = '';
                        $hetHang = 'checked';
                    }
                ?>
                <div class="row-form">
                    <div class="span5">Trạng thái:</div>
                    <div class="span7">
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" value="1" <?php echo $conHang ?>/> Còn hàng
                        </label>
                        <label class="checkbox inline">
                            <input type="radio" name="TrangThai" value="0" <?php echo $hetHang ?>/> Hết hàng
                        </label>
                    </div>
                    <div class="clear"></div>
                </div> 
                <div class="row-fluid">
                    <div class="span3">Mô tả:</div>
                    <div class="span9">
                        <textarea id="wysiwyg" class="ckeditor" name="MoTa" style="height: 300px;"><?php echo $mota ?></textarea>
                    </div>
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
