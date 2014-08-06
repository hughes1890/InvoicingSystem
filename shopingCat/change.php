<?php
  //取得表單資料
  $pr_id = $_GET["pr_id"];
  $quantity = $_POST["quantity"];

  //取得購物車資料
  $pr_id_array = explode(",", $_COOKIE["pr_id_list"]);
  $pr_itemName_array = explode(",", $_COOKIE["pr_itemName_list"]);
  $pr_price_array = explode(",", $_COOKIE["pr_price_list"]);		
  $quantity_array = explode(",", $_COOKIE["quantity_list"]);

  $key = array_search($pr_id, $pr_id_array);

  //若數量等於 0，則將該產品從購物車中刪除
  //if ($quantity == 0 || empty($quantity))
  {
    unset($pr_id_array[$key]);
    unset($pr_itemName_array[$key]);
    unset($pr_price_array[$key]);
    unset($quantity_array[$key]);				
  }
  //else
  {
    //若數量不等於 0，則更新數量
  //  $quantity_array[$key] = $quantity;				
  }

  //儲存購物車資料		
  setcookie("pr_id_list", implode(",", $pr_id_array));
  setcookie("pr_itemName_list", implode(",", $pr_itemName_array));
  setcookie("pr_price_list", implode(",", $pr_price_array));
  setcookie("quantity_list", implode(",", $quantity_array));

  //導向 shopping_car.php 網頁	
  header("location:order_002.php");
?>