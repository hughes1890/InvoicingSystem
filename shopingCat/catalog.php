<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>	
  <body bgcolor="lightyellow">
    <table border="0" align="center" width="500" cellspacing="2"> 
      <tr bgcolor="#BABA76" height="30" align="center">
        <td>編號</td>
        <td>品名</td>
        <td>定價</td>
        <td>輸入數量</td>
        <td>進行訂購</td>																
      </tr>
        <?php
          require_once("dbtools.inc.php");
		  
          //建立資料連接
          $link = create_connection();
							
          //開啟資料表
          $db_selected = mysql_select_db("bule_50", $link);
          if (!$db_selected) die("開啟資料庫失敗");
							
          //篩選出所有產品資料
          $sql = "SELECT * FROM product";
          $result = execute_sql("bule_50", $sql, $link);
						
          //計算總記錄數
          $total_records = mysql_num_rows($result);
									
          //列出所有產品資料
          for ($i = 0; $i < $total_records; $i++)
          {
            //取得產品資料
            $row = mysql_fetch_assoc($result);
									
            //顯示產品各欄位的資料
            echo "<form method='post' action='add_to_car.php?pr_id=" . 
              $row["pr_id"] . "&pr_itemName=" . urlencode($row["pr_itemName"]) . 
              "&pr_price=" . $row["pr_price"] . "'>";
            echo "<tr align='center' bgcolor='#EDEAB1'>";
            echo "<td>" . $row["pr_id"] . "</td>";
            echo "<td>" . $row["pr_itemName"] . "</td>";			
            echo "<td>$" . $row["pr_price"] . "</td>";
            //echo "<td><input type='text' name='quantity' size='5' value='1'></td>";
			echo "<td>
			 <select name='quantity' id='quantity'>
    			<option value='1' selected='selected'>1</option>
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
			
            echo "<td><input type='submit' value='放入購物車'></td>";
            echo "</tr>";
            echo "</form>";
          }
									
          //釋放資源及關閉資料連接
          mysql_free_result($result);
          mysql_close($link);					
        ?>
    </table>
  </body>                                                                                 
</html>