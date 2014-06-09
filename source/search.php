<?php
include('../config/dbconnect.php');
if(isset($_POST['kw']) && $_POST['kw'] != '')
{
  $kws = $_POST['kw'];
  $kws = mysql_real_escape_string($kws); 
  $sql = "SELECT A.*,B.DuongDan FROM tbl_sanpham A, tbl_hinhanh B WHERE A.MaSP = B.MaSP AND TenSP LIKE '%".$kws."%' ORDER BY MaSP LIMIT 5" ;
  $result = mysql_query($sql);
  $count = mysql_num_rows($result);

  $i = 0;
  
  if($count > 0)
  {
    echo "<ul id='ul'>";
    while($row = mysql_fetch_array($result))
    {
      echo "<a href='index.php?page=product_detail&id={$row ['MaSP']}&ml={$row ['MaLoai']}&ns={$row ['TenSP']}'><li>";
      echo "<div id='rest'>";
      echo "<img src='{$row['DuongDan']}' style='float:left; width:50px; height:50px; margin-right:5px'/>";
      echo $row['TenSP'];
      echo "<br />";
      if($row['GiaCu']==0){
      echo "<div style='color:#ff0000'>Call</div>";
      }else{
      echo "<div style='color:#ff0000'>" . number_format($row['GiaCu'], 0, '.', '.') . " VND</div>";
      }
      echo "</div>";
      echo "<div style='clear:both;'></div></li></a>";
      $i++;
      if($i == 5) break;
    }
    echo "</ul>";
    if($count > 5)
    {
      echo "<div id='view_more'><a href='#'>View more results</a></div>";
    }
  }
  else
  {
    echo "<div id='no_result'>Không có sản phẩm nào !</div>";
  }
}
?>