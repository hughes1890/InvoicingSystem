<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
	$u_name=$_POST["u_name"];
	$u_pass=$_POST["u_pass"];

    require_once("dbtools.inc.php");
		  
    //建立資料連接
    $link = create_connection();
							
	//開啟資料表
    $db_selected = mysql_select_db("bule_50", $link);
    if (!$db_selected) die("開啟資料庫失敗");

	$sql = "SELECT * FROM staff";
	
	$result = execute_sql("bule_50", $sql, $link);
	
	$row = mysql_fetch_assoc($result);
	session_start();
	if($row["f_user"] == $u_name and $row["f_pass"] == $u_pass ){
		switch ($row["f_level"]){
			case "1" :
			
	        $_SESSION["index"]=1;
			header("location:001.php");
			break;
			default:
			 $_SESSION["index"]=0;
			header("location:staff_001.php");
			}
		}else{
			  header("location:index.html");
			}
	


?>



</body>
</html>