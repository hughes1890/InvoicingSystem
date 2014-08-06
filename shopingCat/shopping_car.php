<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>	
  <body bgcolor="LightYellow">
   
    <table border="0" align="center" width="500">
      <tr bgcolor="#ACACFF" height="30" align="center">
      	<td>編號</td>
        <td>品名</td>
        <td>定價</td>
        <td>數量</td>		
        <td>小計</td>
        <td>變更數量</td>		
      </tr>				
        <?php
          //如果購物車是空的，則顯示 "目前購物車內沒有任何商品及數量" 的訊息
          if (empty($_COOKIE["pr_id_list"]))
          {
            echo "<tr align='center'>";
            echo "<td colspan='6'>目前購物車內沒有任何商品及數量！</td>";	
			echo"<td><p align='center'><a href='catalog.php'>回到購物頁面</a></p></td>";
            echo "</tr>";
          }
          else
          {
            //取得購物車資料
            $pr_id_array = explode(",", $_COOKIE["pr_id_list"]);
            $pr_itemName_array = explode(",", $_COOKIE["pr_itemName_list"]);
            $pr_price_array = explode(",", $_COOKIE["pr_price_list"]);		
            $quantity_array = explode(",", $_COOKIE["quantity_list"]);		
					
            //顯示購物車內容
            $total = 0;			
            for ($i = 0; $i < count($pr_id_array); $i++)
            {
              //計算小計
              $sub_total = $pr_price_array[$i] * $quantity_array[$i];
						
              //計算總計
              $total += $sub_total;
						
              //顯示各欄位資料
              echo "<form method='post' action='change.php?pr_id=" . 
                $pr_id_array[$i] . "'>";						
              echo "<tr bgcolor='#EDEAB1'>";
              echo "<td align='center'>" . $pr_id_array[$i] . "</td>";		
              echo "<td align='center'>" . $pr_itemName_array[$i] . "</td>";			
              echo "<td align='center'>" . $pr_price_array[$i] . "</td>";
              //echo "<td align='center'><input type='text' name='quantity' value='" . 
              //  $quantity_array[$i] . "' size='5'></td>";	
			  echo "<td align='center'>" . $quantity_array[$i] . "</td>";	
				
						
              echo "<td align='center'>" . $sub_total . "</td>";
              echo "<td align='center'><input type='submit' value='刪除'></td>";					
              echo "</tr>";
              echo "</form>";						
            }
					
            echo "<tr align='right' bgcolor='#EDEAB1'>";
            echo "<td colspan='6'>總金額 = " . $total . "</td>";	
            echo "</tr>";	
            echo "<tr align='center'>";
            echo "<td colspan='6'>" . "<br><input type='button' value='退回所有商品'
              onClick=\"javascript:window.open('delete_order.php','_self')\">";
            echo "</td>";	
			echo "<td colspan='6'>" . "<br><input type='button' value='下一步->輸入訂購基本資料'
              onClick=\"javascript:window.open('print_order.php','_self')\">";
            echo "</td>";	
            echo "</tr>";	
          }
      ?>
    </table>
  </body>                                                                                 
</html>