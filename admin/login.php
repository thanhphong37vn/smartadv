<?php
include('../config/dbconnect.php');
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>Control Panel - Đăng nhập hệ thống</title>
        <link rel="icon" type="image/ico" href="favicon.ico"/>
        <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
        <script type='text/javascript' src='js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    </head>
    <body>
        <?php
        if (isset($_POST['btnLogin'])) {
            $username = $_POST['username'];
            $password = sha1($_POST['passwords']);
            $sql = "SELECT COUNT(*) FROM tbl_admin WHERE TenDangNhap='{$username}' AND MatKhau='{$password}'";
            $result = mysql_query($sql) or die('Loi');
            $rows = mysql_fetch_array($result);
            if ($rows[0] == 1) {
                $_SESSION["admin_login"] = true;
                $_SESSION["admin_login"] = $username;
                header("location:index.php");

                $log_query = "UPDATE tbl_admin SET NgayLoginGanNhat = NOW() WHERE TenDangNhap='{$username}'";
                mysql_query($log_query);
            } else {
                echo "<script>alert('Không đăng nhập được đâu...SÓI Ạ.');</script>";
            }
        }
        ?>
        <div class="loginBox">        
            <div class="loginHead">
                <img src="img/logo.png" alt="Cpanel EVALIST" title="Cpanel EVALIST"/>
            </div>
            <form class="form-horizontal" action="" method="POST">            
                <div class="control-group">
                    <label for="inputEmail">Tên đăng nhâp:</label>                
                    <input type="text" name="username" class="validate[required]" id="equals"/>
                </div>
                <div class="control-group">
                    <label for="inputPassword">Mật khẩu:</label>                
                    <input type="password" name="passwords" class="validate[required]" id="equals"/>                
                </div>
                <div class="form-actions">
                    <button type="submit" name="btnLogin" class="btn btn-block">Sign in</button>
                </div>
            </form>           
        </div>    
    </body>
</html>
