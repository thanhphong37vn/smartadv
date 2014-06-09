<?php
require_once ('phpmailer/class.phpmailer.php');
require_once ('phpmailer/class.smtp.php');
include('config/dbconnect.php');
include('dao/include_dao.php');

session_start();
ob_start();

if (!isset($_GET['page'])) {
    $_GET['page'] = 'product';
}

$page = $_GET['page'];
$title = '';

switch ($page) {
    case 'product': $title = 'Quảng cáo Smart';
        break;
    case 'product_detail': $title = 'Chi tiết sản phẩm';
        break;
    case 'page_search':$title = 'Danh sách sản phẩm tìm kiếm';
        break;
    case 'sale_product': $title = 'Sản phẩm khuyến mại';
        break;
    case 'sales_product': $title = 'Sản phẩm khuyến mại';
        break;
    case 'product_categories_show': $title = 'Danh sách loại sản phẩm';
        break;
    case 'new_product': $title = 'Sản phẩm mới';
        break;
    case 'map': $title = 'Bản đồ của công ty';
        break;
    case 'info': $title = 'Thông tin về công ty';
        break;
    case 'news': $title = 'Tin tức';
        break;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--        <meta name="keywords" content="thiết bị miền bắc, trung tâm thiết bị miền bắc, thiết bị, dụng cụ do, thước đo, thiet bi mien bac, trung tan thiet thi mien bac, thiet bi, dung cu do, thuoc do, khuyến mại, mới, sản phẩm" />
                <meta name="description" content="Thiet bi mien bac la don vi ban san pham online uy tin nhat, dat hang theo y muon, cham soc nhiet tinh va uy tin tai thi truong vietnam" /> -->
        <meta content="Trung tâm thiết kế & quảng cáo Smart , Bien quang cao, lam bien cong ty , lam bien so nha , quang cao gia re , lam bien quang cao" name="keywords"></meta>
        <meta content="Trung tâm thiết kế & quảng cáo Smart" name="description"></meta>
        <title><?php echo $title ?></title>

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu-v.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>

        <script type="text/javascript">

            ddsmoothmenu.init({
                mainmenuid: "smoothmenu2", //Menu DIV id
                orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
                //customtheme: ["#804000", "#482400"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })
        </script>

        <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
        <script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>

        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                $('.box_skitter_large').skitter({label: false, numbers: false, theme: 'square'});
                $('.box_skitter_small').skitter({label: false, numbers: false, interval: 1000, theme: 'clean'});
                $('.box_skitter_medium').css({width: 500, height: 200}).skitter({show_randomly: true, dots: true, interval: 4000, numbers_align: 'center', theme: 'round'});
                $('.box_skitter_normal').css({width: 400, height: 300}).skitter({animation: 'blind', interval: 2000, hideTools: true, theme: 'minimalist'});
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#keywords").keyup(function() {
                    var kw = $("#keywords").val();
                    if (kw != '')
                    {
                        $.ajax({
                            type: "POST",
                            url: "source/search.php",
                            data: "kw=" + kw,
                            success: function(option)
                            {
                                $("#results").html(option);
                            }
                        });
                    }
                    else {
                        $("#results").html("");
                    }
                    return false;
                });
                $(".overlay").click(function() {
                    $(".overlay").css('display', 'none');
                    $("#results").css('display', 'none');
                });
                $("#keywords").focus(function() {
                    $(".overlay").css('display', 'block');
                    $("#results").css('display', 'block');
                });
            });
        </script>

        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-46560867-1', 'thietbimienbac.vn');
            ga('send', 'pageview');

        </script>

        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/messages_vi.js"></script>
    </head>

    <body>
        <div style="background:#f1f1f1; margin:auto; border-bottom:1px solid #CCC;">
            <?php include('source/adv_left_right.php'); ?>
            <div id="menu">
                <?php include('source/menu_top.php'); ?>
            </div><!-- end menu -->
            <div id="header">
                <?php include('source/header.php') ?>    
            </div><!-- end header--> <div style="clear:both"></div>
            <div style="margin:auto;"> 
                <?php include('source/menu_horizonal.php'); ?>
            </div>
            <div id="home">
                <div id="left">
                    <?php include('source/menu_vertical.php') ?>
                </div><!-- end left-->
                <div id="main">
                    <div id="boxmain">
                        <?php include('source/ads_banner.php') ?>
                    </div><!-- end boxmain-->
                    <div style="clear:both"></div>
                    <div id="boxproduct_sale">
                        <?php include('source/sale_product.php') ?>
                    </div><!-- end boxproduct-->
                    <div id="boxproduct">
                        <?php include('source/' . $page . '.php') ?>
                    </div><!-- end boxproduct-->
                </div><!-- end main--><div style="clear:both"></div>
                <!--                <div>
                                    <div id="ft_home">

                                    </div>
                                </div>-->
            </div><!-- end home-->
           <div style="clear:both"></div>
           <div id="footer">
               <br/><br/><hr width="100%"/>
                <?php include('source/footer.php') ?>
            </div><