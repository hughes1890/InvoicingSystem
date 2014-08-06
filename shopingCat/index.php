<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<link href="twoColLiqRtHdr.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="order_001.php" method="post" target="_self">
<div align='center'>

    <h2>請先選擇店家</h2>
	<?php
    session_start();
	$_SESSION["index"]=true;
	
	  require_once("dbtools.inc.php");
		  
          //建立資料連接
          $link = create_connection();
							
          //開啟資料表
          $db_selected = mysql_select_db("bule_50", $link);
          if (!$db_selected) die("開啟資料庫失敗");
          //選店
          $sql = "SELECT * FROM shop ";
  		  $result = mysql_query($sql, $link) or die ("無法執行'$sql'".mysql_error());
		  $total_records = mysql_num_rows($result);
		 
		  
		 
		  echo "<select name='shop' id='select'>";
		  for ($i = 0; $i < $total_records; $i++)
          {
		   $row = mysql_fetch_assoc($result);
    	   echo "<option value=".$row["shop_NAME"].">".$row["shop_NAME"]."</option>";
    		  }
  		  echo "</select><br>";
		  echo " <input name='button' type='submit' value = '確定'/>";
		 
		  
	//header("location:order_001.php");
	
	
	?>
    </div>
</form>
</body>
</html>