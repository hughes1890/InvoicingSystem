<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #4E5869;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ 元素/標籤選取器 ~~ */
ul, ol, dl { /* 由於瀏覽器之間的差異，最佳作法是在清單中使用零寬度的欄位間隔及邊界。為了保持一致，您可以在這裡指定所要的量，或在清單包含的清單項目 (LI、DT、DD) 上指定所要的量。請記住，除非您寫入較為特定的選取器，否則在此執行的作業將重疊顯示到 .nav 清單。 */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* 移除上方邊界可以解決邊界可能從其包含的 Div 逸出的問題。剩餘的下方邊界可以保持 Div 不與接在後面的元素接觸。 */
	padding-right: 15px;
	padding-left: 15px; /* 將欄位間隔加入至 Div 內元素的兩側 (而不是 Div 本身)，即可不需執行任何方塊模型的計算作業。具有側邊欄位間隔的巢狀 Div 也可當做替代方法。 */
	color: #0099FF;
}
a img { /* 這個選取器會移除某些瀏覽器在影像由連結所圍繞時，影像周圍所顯示的預設藍色邊框 */
	border: none;
}

/* ~~ 網站連結的樣式設定必須保持此順序，包括建立滑過 (Hover) 效果的選取器群組在內。~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* 除非您要設定非常獨特的連結樣式，否則最好提供底線，以便快速看出 */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* 這個選取器群組可以讓使用鍵盤導覽的使用者，也和使用滑鼠的使用者一樣擁有相同的滑過體驗。 */
	text-decoration: none;
}

/* ~~ 這個容器環繞著所有其他的 Div，並依百分比設定其寬度 ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* 建議您使用最大寬度，如此版面在大型螢幕上就不致於過寬，讓行保持比較方便閱讀的長度。IE6 並不適用這項宣告。 */
	min-width: 780px;/* 建議您使用最小寬度，如此版面在大型螢幕上就不致於過窄，讓行在側欄中保持比較方便閱讀的長度。IE6 並不適用這項宣告。 */
	background-color: #FFF;
	margin: 0 auto; /* 兩側的自動值與寬度結合後，版面便會置中對齊。如果將 .container 的寬度設為 100%，就不需要這麼做。 */
	overflow: hidden; /* 這個宣告可以讓 .container 清除其中的所有浮動欄。 */
}

/* ~~ 這是版面的欄位。~~ 

1) 欄位間隔只會置於 Div 的頂端或底部。這些 Div 內的元素在兩側會有欄位間隔，可讓您不需進行「方塊模型計算」。請記住，如果對 Div 本身加入任何側邊的欄位間隔或邊框，在計算「總」寬度時，就會將這些加入您定義的寬度。您也可以選擇移除 Div 中元素的欄位間隔，然後在其中放置沒有寬度的第二個 Div，並依設計所需放置欄位間隔。

2) 尚未為這些欄位提供邊界，因為它們全都是浮動的。如果必須加入邊界，請避免將其放在浮動方向的一側 (例如將右邊界放在設定為向右浮動的 Div 上)。在許多時候，您都可以改用欄位間隔。對於必須違反此規則的 Div，您應該在 Div 的規則中加入 "display:inline" 宣告，以防止某些版本的 Internet Explorer 將邊界加倍。

3) 因為可在文件中多次使用類別 (也可對單一的元素套用多個類別)，所以已為欄位指定類別名稱，而非 ID。例如，您可在必要時將兩個側邊列 Div 堆疊起來。如有需要，也可以將這些名稱輕鬆地變更為 ID (只要您在每份文件中只使用一次)。

4) 如果想要將導覽放在左方而非右方，只要將這些欄設定為往反方向浮動 (全部往左，而非全部往右)，它們就會以相反順序呈現。您不需要在 HTML 原始碼中移動 Div。

*/
.sidebar1 {
	float: right;
	width: 20%;
	background-color: #00CCFF;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 80%;
	float: right;
}

/* ~~ 這個群組選取器會在 .content 區域空間中提供清單 ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* 這個欄位間隔反映出上方標題和段落規則中的右方間隔。當欄位間隔位於下方時，便可將清單中的其他元素間隔開來；當位於左方時，則可藉此建立縮排。這些動作均可依需要進行調整。 */
}

/* ~~ 導覽清單樣式 (如果選擇使用 Spry 之類的預製飛出選單，則可移除) ~~ */
ul.nav {
	list-style: none; /* 這會移除清單標記 */
	border-top: 1px solid #666; /* 這會建立連結的上方邊框，其他則都會使用下方邊框放置在 LI 上 */
	margin-bottom: 15px; /* 這會在下方的內容上建立導覽間的間距 */
}
ul.nav li {
	border-bottom: 1px solid #666; /* 這會建立按鈕分隔 */
}
ul.nav a, ul.nav a:visited { /* 將這些選取器放入群組，即可確保您的連結即使在受到點擊後仍保有按鈕外觀 */
	padding: 5px 5px 5px 15px;
	display: block; /* 這會為連結提供區塊屬性，使連結能填滿包含它的整個 LI，讓整個區域都能回應滑鼠點按動作。 */
	text-decoration: none;
	background-color: #00CCFF;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* 這會同時變更滑鼠及鍵盤導覽器的背景及文字顏色 */
	background-color: #4A4FFF;
	color: #FFF;
}

/* ~~ 其他 float/clear 類別 ~~ */
.fltrt {  /* 這個類別可用來讓元素在頁面中浮動，浮動的元素必須位於頁面上相鄰的元素之前。 */
	float: right;
	margin-left: 8px;
}
.fltlft { /* 這個類別可用來讓元素在頁面左方浮動，浮動的元素必須位於頁面上相鄰的元素之前。 */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* 這個類別可放置在 <br /> 或空白的 Div 上，當做接在 #container 內最後一個浮動 Div 後方的最後一個元素 (如果已移除 .container 上的 overflow:hidden) */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* 這個 1 像素的負邊界可放在此版面中的任何欄上，而具有相同的修正效果。 */
ul.nav a { zoom: 1; }  /* zoom 屬性可為 IE 提供修正連結之間多餘空白時所需的 hasLayout 觸發。 */
</style>
<![endif]-->

<Script Language="JavaScript"> 
	function checkform() 
	{ 
	
	alert("加入成功"); 
	/*
	    if (!document.form2.icedegree.value  ) 
	    { 
	      alert("請選擇<冰度>"); 
	      document.form1.icedegree.focus(); 
	      return false; 
	    } 
		else if (!document.form2.brix.value  ) 
	    { 
	      alert("請選擇<糖度>"); 
	      document.form1.brix.focus(); 
	      return false; 
	    } 
		else if (!document.form2.cups.value  ) 
	    { 
	      alert("請選擇<杯量>"); 
	      document.form1.cups.focus(); 
	      return false; 
	    }else if (!document.form2.quantity.value ) 
	    { 
	      alert("請選擇<數量>"); 
	      document.form1.quantity.focus(); 
	      return false; 
	    }
		
		 else {
			alert("加入成功"); 
			return true;
			}
			*/
	} 
	</Script> 




</head>

<body>

<div class="container">
<div class="sidebar1">
    <ul class="nav">
      <li><a href="order_001.php" target="_self">選購商品</a></li>
      <li><a href="order_002.php" target="_self">檢視購物車</a></li>
      <li><a href="order_003.php" target="_self">輸入訂單資料</a></li>
      <li><a href="order_004.php" target="_self">檢視訂單</a></li>
    </ul>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
  <?php
  	
		if(!empty($_SESSION["index"])){
			
			 mysql_free_result($result);
             mysql_close($link);
			echo "<script type='text/javascript'>";
    		echo "alert('請正常進入');";
   			echo "history.back();";		
    		echo "</script>";
			}
		
		
          require_once("dbtools.inc.php");
		  
          //建立資料連接
          $link = create_connection();
							
          //開啟資料表
          $db_selected = mysql_select_db("bule_50", $link);
          if (!$db_selected) die("開啟資料庫失敗");
         /* //選店
          $sql = "SELECT * FROM shop ";
  		  $result = mysql_query($sql, $link) or die ("無法執行'$sql'".mysql_error());
		  $total_records = mysql_num_rows($result);
		 
		  echo "<form  method='post' action=''>";
		  echo " <div align='center'>";
		  echo "<select name='select' id='select'>";
		  
		  for ($i = 0; $i < $total_records; $i++)
          {
		   $row = mysql_fetch_assoc($result);
    	   echo "<option value=".$row["shop_id"].">".$row["shop_NAME"]."</option>";
    		  }
  		  echo "</select>";
		  echo "</div>";
          echo " </form>";
		   */
		  echo "<form  method='post' action=''>";
		  echo " <div align='center'>";
		  
		   echo "<h1>".@$_POST["shop"]."</h1>";
		 
    ?>
  <!--
    <form id="form1" name="form1" method="post" action="">
      <div align="center">
       -->
       
        <input type="submit" name="button" id="button" value="tea" />	 
        <input type="submit" name="button" id="button" value="tea Lotten" />
        <input type="submit" name="button" id="button" value="milk" />
        <input type="submit" name="button" id="button" value="juice" />
      </div>
    </form>
    <table width="80%" border="0" align="center"  cellspacing="2"> 
      <tr bgcolor="#BABA76" height="30" align="center">
        <td>編號</td>
        <td>品名</td>
        <td>定價</td>
        <td>冰度</td>
        <td>糖度</td>
        <td>杯量</td>
        <td>杯數</td>
        <td>訂購</td>																
      </tr>
        <?php
	
							
		 				
						
		  switch (@$_POST["button"]){
			case "tea":
			 $sql = "SELECT * FROM product where c_id=1";
			break;
			
			case "tea Lotten":
			  $sql = "SELECT * FROM product where c_id=2";
			break;
			
			case "milk":
			 $sql = "SELECT * FROM product where c_id=3";
			break;
			
			case "juice":
			  $sql = "SELECT * FROM product where c_id=4";
			break;
			
			default:
			 $sql = "SELECT * FROM product where c_id=1";
			}
			
							
					
							
          //篩選出所有產品資料
          //$sql = "SELECT * FROM product";
          $result = execute_sql("bule_50", $sql, $link);
						
          //計算總記錄數
          $total_records = mysql_num_rows($result);
									
          //列出所有產品資料
          for ($i = 0; $i < $total_records; $i++)
          {
            //取得產品資料
            $row = mysql_fetch_assoc($result);
									
            //顯示產品各欄位的資料
            echo "<form  id='form2' name='form2'  method='post' action='add_to_car.php?pr_id=" . 
              $row["pr_id"] . "&pr_itemName=" . urlencode($row["pr_itemName"]) . 
              "&pr_price=" . $row["pr_price"] . 
			  "&shop_id=".@$_POST["shop"]."'>";
			  
			  
            echo "<tr align='center' bgcolor='#EDEAB1'>";
            echo "<td>" . $row["pr_id"] . "</td>";
            echo "<td>" . $row["pr_itemName"] . "</td>";			
            echo "<td>$" . $row["pr_price"] . "</td>";
            //echo "<td><input type='text' name='quantity' size='5' value='1'></td>";
			
			echo "<td>
			 <select name='icedegree' id='icedegree'>
    			<option value='推薦比例'selected='selected'>推薦比例</option>
    			<option value='熱'>熱</option>
    			<option value='温'>温</option>
    			<option value='常温'>常温</option>
				<option value='完全去冰'>完全去冰</option>
				<option value='小碎冰'>小碎冰</option>
				<option value='1/3杯冰'>1/3杯冰</option>
				<option value='1/2杯冰'>1/2杯冰</option>
				<option value='全杯冰'>全杯冰</option>
				
  				</select>
				</td>";
			echo "<td>
			 <select name='brix' id='brix'>
    			<option value='推薦比例'selected='selected'>推薦比例</option>
    			<option value='0糖'>0糖</option>
    			<option value='1/3糖'>1/3糖</option>
    			<option value='1/2糖'>1/2糖</option>
    			<option value='2/3糖'>2/3糖</option>
				<option value='全糖'>全糖</option>
				
  				</select>
				</td>";
				
			echo "<td>
			 <select name='cups' id='cups'>
    			<option value='推薦比例'selected='selected'>推薦比例</option>
    			<option value='小杯'>小杯</option>
    			<option value='中杯'>中杯</option>
    			<option value='大杯'>大杯</option>
    			<option value='胖胖杯'>胖胖杯</option>
				
  				</select>
				</td>";
			
			
			echo "<td>
			 <select name='quantity' id='quantity'>
				<option value='1'selected='selected'>1</option>
    			<option value='2'>2</option>
    			<option value='3'>3</option>
    			<option value='4'>4</option>
    			<option value='5'>5</option>
    			<option value='6'>6</option>
    			<option value='7'>7</option>
    			<option value='8'>8</option>
    			<option value='9'>9</option>
  				</select>
				</td>";
			
            echo "<td><input type='submit' value='放入購物車' onClick='return checkform()'></td>";
            echo "</tr>";
            echo "</form>";
          }
									
          //釋放資源及關閉資料連接
          mysql_free_result($result);
          mysql_close($link);					
        ?>
    </table>
     
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>