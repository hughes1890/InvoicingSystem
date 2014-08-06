<?php
  //取得表單資料
  $pr_id = $_GET["pr_id"];
  $pr_itemName = $_GET["pr_itemName"];
  $pr_price = $_GET["pr_price"];		
  $quantity = $_POST["quantity"];
  
  $icedegree = $_POST["icedegree"];
  $brix = $_POST["brix"];
  $cups = $_POST["cups"];
  $b_remark =  $icedegree.':'.$brix.':'.$cups;
   
  
  if (empty($quantity)) $quantity = 1;

  //若購物車沒有任何項目，則直接加入產品資料
  if (empty($_COOKIE["pr_id_list"]))
  {
    setcookie("pr_id_list", $pr_id);
    setcookie("pr_itemName_list", $pr_itemName);
    setcookie("pr_price_list", $pr_price);		
    setcookie("quantity_list", $quantity);	
	setcookie("b_remark_list", $b_remark);
	
  }
  else
  {
    //取得購物車資料
    $pr_id_array = explode(",", $_COOKIE["pr_id_list"]);
    $pr_itemName_array = explode(",", $_COOKIE["pr_itemName_list"]);
    $pr_price_array = explode(",", $_COOKIE["pr_price_list"]);		
    $quantity_array = explode(",", $_COOKIE["quantity_list"]);		
	$b_remark_array = explode(",", $_COOKIE["b_remark_list"]);
	
	
	
	
    //判斷選擇的物品有在購物車中
    if (in_array($pr_id, $pr_id_array)&& 
		in_array($b_remark, $b_remark_array))
    {
      //如果選擇的物品已經在購物車中，變更物品數量即可
      $key = array_search($pr_id, $pr_id_array);			
      $quantity_array[$key] += $quantity;
    }
    else
    {		
      //如果選擇的物品沒有在購物車中，則將物品資料加入購物車				
      $pr_id_array[] = $pr_id;
      $pr_itemName_array[] = $pr_itemName;
      $pr_price_array[] = $pr_price;			
      $quantity_array[] = $quantity;
	  $b_remark_array[] = $b_remark;
	  												
    }

    //儲存購物車資料		
    setcookie("pr_id_list", implode(",", $pr_id_array));
    setcookie("pr_itemName_list", implode(",", $pr_itemName_array));
    setcookie("pr_price_list", implode(",", $pr_price_array));
    setcookie("quantity_list", implode(",", $quantity_array));
	setcookie("b_remark_list", implode(",", $b_remark_array));			
  }
  
  header("location:order_001.php"); 
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>	
  <body bgcolor="lightyellow">
    <p align="center"><img src="fig1.jpg"></p>
    <p align="center">您所選取的商品及數量已成功地放入購物車！</p>                                                                              
  </body>
</html>