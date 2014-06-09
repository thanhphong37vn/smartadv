<?php
//
//
//	private static $host = '103.28.36.174:3306';
//	private static $user = 'usmart';
//	private static $password = 'usmart';
//	private static $database = 'nhlam1pn_dbsmart';

$conn = mysql_connect("103.28.36.174:3306", "usmart", "usmart") or die('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <font color="#FF0000"><h3>Lỗi kết nối CSDL</h3><br /></font>
                        Có thể do các nguyên nhân sau:
                        <ul>
                                <li>Sai mật khẩu username root.</li>
                                <li>Sai tên server</li>
                        </ul>'
);

mysql_query("set names 'utf8'");

mysql_select_db("nhlam1pn_dbsmart") or die('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <font color="#FF0000"><h3>Lỗi chọn cơ sở dữ liệu</h3><br /></font>
                        Có thể do các nguyên nhân sau:
                        <ul>
                                <li>Sai tên cơ sở dữ liệu</li>
                                <li>Kết nối bị lỗi</li>
                        </ul>'
);
?>