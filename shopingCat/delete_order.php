<?php
  //清除購物車資料
  setcookie("pr_id_list", "");
  setcookie("pr_itemName_list", "");
  setcookie("pr_price_list", "");
  setcookie("quantity_list", "");	
	
  //導向 shopping_car.php 網頁
  header("location:order_002.php");	
?>