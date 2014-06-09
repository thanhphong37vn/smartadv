<?php
session_start();
ob_start();
include("../config/dbconnect.php");
//include '../dao/include_dao.php';

if ($_SESSION["admin_login"] == false) {
    header('location:login.php');
}

if (!isset($_GET['page'])) {
    $_GET['page'] = 'product_show';
}
$page = $_GET['page'];
$title ='';
switch ($page) {
    case 'add_product': $title = 'Thêm sản phẩm';
        break;
    case 'add_manufacturers': $title = 'Thêm nhà sản xuất';
        break;
    case 'add_admin': $title = 'Thêm quản trị viên';
        break;
    case 'add_adv': $title = 'Thêm quảng cáo';
        break;
    case 'add_categories': $title = 'Thêm loại sản phẩm';
        break;
    case 'add_info': $title = 'Thêm thông tin công ty';
        break;
    case 'product_show': $title = 'Danh sách sản phẩm';
        break;
    case 'product_categories': $title = 'Danh sách loại sản phẩm';
        break;
    case 'manufacturers_show': $title = 'Danh sách nhà sản xuất';
        break;
    case 'show_info': $title = 'Danh sách thông tin công ty';
        break;
    case 'show_admin': $title = 'Danh sách quản trị viên';
        break;
    case 'update_admin': $title = 'Cập nhật thông tin quản trị viên';
        break;
    case 'update_categories': $title = 'Cập nhật loại sản phẩm';
        break;
    case 'update_manufactures': $title = 'Cập nhật nhà sản xuất';
        break;
    case 'update_product': $title = 'Cập nhật sản phẩm';
        break;

    default: $title = 'Control - Hệ thống quản lý';
        break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title><?php echo $title ?></title>
        <link rel="icon" type="image/ico" href="favicon.ico"/>
        <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
        <link rel='stylesheet' type='text/css' href='css/fullcalendar.print.css' media='print' />
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
        <script type='text/javascript' src='js/plugins/jquery/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap.min.js'></script>
        <script type='text/javascript' src='js/plugins/charts/excanvas.min.js'></script>
        <script type='text/javascript' src='js/plugins/charts/jquery.flot.js'></script>    
        <script type='text/javascript' src='js/plugins/charts/jquery.flot.stack.js'></script>    
        <script type='text/javascript' src='js/plugins/charts/jquery.flot.pie.js'></script>
        <script type='text/javascript' src='js/plugins/charts/jquery.flot.resize.js'></script>
        <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>
        <script type='text/javascript' src='js/plugins/fullcalendar/fullcalendar.min.js'></script>
        <script type='text/javascript' src='js/plugins/select2/select2.min.js'></script>
        <script type='text/javascript' src='js/plugins/uniform/uniform.js'></script>
        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
        <script type='text/javascript' src='js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
        <script type='text/javascript' src='js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
        <script type='text/javascript' src='js/jquery.validate.min.js' charset='utf-8'></script>
        <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
        <script type='text/javascript' src='js/plugins/animatedprogressbar/animated_progressbar.js'></script>
        <script type='text/javascript' src='js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
        <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>    
        <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>
        <script type='text/javascript' src='js/cookies.js'></script>
        <script type='text/javascript' src='js/actions.js'></script>
        <script type='text/javascript' src='js/charts.js'></script>
        <script type='text/javascript' src='js/plugins.js'></script>
        <script type='text/javascript' src='js/jquery.search.min.js'></script>
        
        <script>
                kLib.onDomLoaded(function() { nicEditors.allTextAreas() });
            </script>

    </head>
    <body>
        <div class="header">
            <a class="logo" href="index.php"><img src="img/logo.png" alt="Cpanel EVALIST" title="Cpanel EVALIST"/></a>
            <in
                <ul class="header_menu">
                    <li class="list_icon"><a href="#">&nbsp;</a></li>
                </ul>    
        </div>
        <div class="menu">                
            <div class="breadLine">            
                <div class="arrow"></div>
                <div class='adminControl active'>
                    <?php
                    if (isset($_SESSION["admin_login"])) {
                        $query = "SELECT MaAdmin,HoTen,Avatar FROM tbl_admin WHERE TenDangNhap='{$_SESSION["admin_login"]}';";
                        $result = mysql_query($query) or die('Lỗi truy vấn CSDL');
                        $rows = mysql_fetch_array($result);
                        echo "Xin chào:{$rows['HoTen']}";
                        echo "</div></div>
                        <div class='admin'>
                            <div class='image'>
                                <img src='../{$rows['Avatar']}' width='55' height='55' class='img-polaroid'/>                
                            </div>
                            <ul class='control'>                
                                <li><span class='icon-cog'></span> <a href='index.php?page=update_admin&id={$rows['MaAdmin']}'>Cài đặt</a></li>
                                <li><span class='icon-share-alt'></span> <a href='logout.php'>Đăng xuất</a></li>
                            </ul>
                        </div>";
                    }
                    ?>
                    <ul class="navigation">            
                        <?php include('menu.php'); ?>
                    </ul>
                    <div class="dr"><span></span></div>
                    <div class="widget-fluid">
                        <div id="menuDatepicker"></div>
                    </div>
                </div>
                <div class="content">
                    <div class="breadLine">
                        <ul class="breadcrumb">
                            <li><a href="#">Control Admin</a> <span class="divider">></span></li>                
                            <li class="active">Danh mục tùy chọn</li>
                        </ul>
                        <ul class="buttons">                
                            <li>
                                <a href="#" class="link_bcPopupSearch"><span class="icon-search"></span><span class="text">Search</span></a>

                                <div id="bcPopupSearch" class="popup">
                                    <div class="head">
                                        <div class="arrow"></div>
                                        <span class="isw-zoom"></span>
                                        <span class="name">Search</span>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="body search">
                                        <input type="text" id="search" placeholder="Some text for search..." name="search"/>
                                    </div>
                                </div>                
                            </li>
                        </ul>
                    </div>
                    <?php include($page . '.php'); ?>
                    <div class="dr"><span></span></div>
                </div>
            </div>   
    </body>
</html>
