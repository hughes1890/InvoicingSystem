<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
 if(!empty($_SESSION["index"])){
			echo "<script type='text/javascript'>";
    		echo "alert('請正常進入');";
   			echo "history.back();";		
    		echo "</script>";
	}else{
		   require_once("dbtools.inc.php");
		    $link = create_connection();
		
			$sql = "commit";
			
			$result =  mysql_query($sql, $link)or die ("無法執行'$sql'".mysql_error());
			$row = mysql_fetch_assoc($result);
			echo $result.";";
            echo $row[0];
			/*
			if (empty($result)){
				echo "<script type='text/javascript'>";
				echo "alert('己成功送出,回上一頁');";
				
				echo "history.back();";		
				echo "</script>";
				
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('送出失敗');";
				
				echo "history.back();";		
				echo "</script>";
				
			}*/
	}
?>
</body>
</html>