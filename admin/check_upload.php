<?php
function check_upload() {
    $file = null;
    $ext = array("gif", "jpeg", "jpg", "png","GIF", "JPEG", "JPG", "PNG");
    $fileName = $_FILES["uploadanhchinh"]["name"];
    $fileGoc = null;
    $fileFinfo = explode(".", $fileName);
    $duoiFileAnh = $fileFinfo[1];
    if (in_array($duoiFileAnh, $ext)) {
        if ($_FILES["uploadanhchinh"]["error"] > 0) {
            echo "<script>alert('{$_FILES["uploadanhchinh"]["error"]}');</script>";
        } else {
            $no = 1;
            while (true) {
                if (file_exists("../images_products/" . $fileName)) {
                    if ($flag == 0) {
                        $fileGoc = $fileFinfo[0];
                        $flag = 1;
                    }
                    $no = $no + 1;
                    $fileName = $fileGoc . "_" . $no . "." . $fileFinfo[1];
                } else {
                    move_uploaded_file($_FILES["uploadanhchinh"]["tmp_name"],"../images_products/".$fileName);
                    $file = "images_products/" . $fileName;
                    break;
                }
            }
        }
    } else {
        echo "<script>alert('Không đúng định dạng của ảnh.');</script>";
    }
    return $file;
}

?>