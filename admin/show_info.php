<div class="workplace">
    <div class="row-fluid">
        <div class="span12">                    
            <div class="head">
                <div class="isw-grid"></div>
                <h1>Danh sách thông tin công ty</h1> 
                <ul class="buttons">
                    <li><a href="index.php?page=add_info" class="isw-plus" title="Thêm"></a></li>                                                        
                </ul>
                <div class="clear"></div>
            </div>
            <div class="block-fluid">
                <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tblData">
                    <thead>
                        <tr>                                    
                            <th>Tên công ty</th>                                   
                            <th>Địa chỉ</th>                                   
                            <th>Điện thoại</th>                                   
                            <th>HotLine</th>                                   
                            <th>Website</th>                                   
                            <th>Thông tin</th>                                   
                            <th>Vị trí</th>                                   
                            <th>Sửa</th> 
                            <?php
                            include('check_admin.php');
                            if ($_SESSION['author'] == 1) {
                                echo "<th>Xóa</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $display = 20;
                        if (isset($_GET['page']) && (int) ($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $query = "SELECT COUNT(MaCT) FROM tbl_info";
                            $res = mysql_query($query) or die('Khong truy cap toi CSDL');
                            $rows = mysql_fetch_array($res, MYSQL_NUM);
                            $record = $rows[0];
                            if ($record > $display) {
                                $page = ceil($record / $display);
                            } else {
                                $page = 1;
                            }
                        }
                        $start = isset($_GET['start']) && (int) ($_GET['start']) ? $_GET['start'] : 0;
                        $sql = "SELECT * FROM tbl_info LIMIT $start , $display";
                        $result = mysql_query($sql);
                        while ($rows = mysql_fetch_array($result)) {
                            echo "<tr><td>{$rows['TenCT']}</td>
                            <td>{$rows['DiaChi']}</td>
                            <td>{$rows['DienThoaiDD']}</td>
                            <td>{$rows['HotLine']}</td>
                            <td>{$rows['Website']}</td>
                            <td>{$rows['ThongTin']}</td>";
                            if($rows['ViTri'] == 1){
                                echo "<td>Bên trái</td>";
                            }
                            if($rows['ViTri'] == 2){
                                echo "<td>Bên phải</td>";
                            }
                            if($rows['ViTri'] == 3){
                                echo "<td>Page Chính</td>";
                            }
                            ?>
                            <?php
                            echo "<td><a href='index.php?page=update_info&i={$rows['MaCT']}'><img class='icon-edit' title='Sửa'/></a></td>";
                            if ($_SESSION['author'] == 1) {
                                echo " <td><a href='index.php?page=delete_info&i={$rows['MaCT']}'><img class='icon-trash' title='Xóa'/></a></td>";
                            }
                            echo "</tr>";
                        }
                        echo"</tbody></table></div>";
                        echo "<ul id='pagination-digg'>";
                        if ($page > 1) {
                            $next = $start + $display;
                            $prev = $start - $display;
                            $current = ($start / $display) + 1;
                            if ($current != 1) {
                                echo "<li class='next'><a href='index.php?page=show_info&start=$prev'>«Previous</a></li>";
                            }
                            for ($i = 1; $i <= $page; $i++) {
                                if ($current != $i) {
                                    echo "<li><a href='index.php?page=show_info&start=" . ($display * ($i - 1)) . "'>$i</a></li>";
                                } else {
                                    echo "<li class='active'>$i</li>";
                                }
                            }
                            if ($current != $page) {
                                echo "<li class='next'><a href='index.php?page=show_info&start=$next'>Next »</a></li>";
                            }
                        }
                        ?>                              
                        </div>                                
                        </div>
                        </div>
                    <style type="text/css">
                        ul{border:0; margin:0; padding:0;}

                        #pagination-digg{margin-top: 3px}
                        #pagination-digg li{
                            border:0; margin:0; padding:0;
                            font-size:11px;
                            list-style:none;
                            margin-right:2px;
                        }
                        #pagination-digg a{
                            border:solid 1px #9aafe5;
                            margin-right:2px;
                        }

                        #pagination-digg .previous-off,
                        #pagination-digg .next-off{
                            border:solid 1px #DEDEDE;
                            color:#888888;
                            display:block;
                            float:left;
                            font-weight:bold;
                            margin-right:2px;
                            padding:3px 4px;
                        }

                        #pagination-digg .next a,
                        #pagination-digg .previous a{
                            font-weight:bold;
                        }

                        #pagination-digg .active{
                            background:#2e6ab1;
                            color:#FFFFFF;
                            font-weight:bold;
                            display:block;
                            float:left;
                            padding:4px 6px;
                        }

                        #pagination-digg a:link,
                        #pagination-digg a:visited{
                            color:#0e509e;
                            display:block;
                            float:left;
                            padding:3px 6px;
                            text-decoration:none;
                        }

                        #pagination-digg a:hover{
                            border:solid 1px #0e509e
                        }

                    </style>