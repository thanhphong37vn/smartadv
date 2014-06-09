<?php
    $sql = "SELECT * FROM tbl_info";
    $result = mysql_query($sql);
    while ($rows = mysql_fetch_array($result)){
        if($rows['ViTri']==1){
            echo "<table width='418' border='0' style='color:#666666; float:left; text-align: left' >
    <tr>
        <td>
            <div align='left'><strong>{$rows['TenCT']}</strong><br />
                {$rows['DiaChi']}<br />
                Điện thoại : {$rows['DienThoaiDD']}<br />
                Hotline : {$rows['HotLine']}<br />
                Website : {$rows['Website']}
        </td>
    </tr>
</table> ";
        }
        if($rows['ViTri']==2){
            echo "<table width='418' border='0' style='color:#666666; float:left; text-align: right' >
    <tr>
        <td>
            <div align='right'><strong>{$rows['TenCT']}</strong><br />
                {$rows['DiaChi']}<br />
                Điện thoại : {$rows['DienThoaiDD']}<br />
                Hotline : {$rows['HotLine']}<br />
                Website : {$rows['Website']}
        </td>
    </tr>
</table> ";
        }
    }
?>