<?php
include_once '../config/db.php'; // Подключение к базе данных
// таб товаров
// внесен данных в бд
function setPurchaseForOrder($orderId, $cart){
	global $bd;
	$sql = "INSERT INTO purchase
			(order_id, product_id, price, amount) 
			VALUES ";
	
	$values = array();
	// формируем массив строк для запроса для каждого товара
	foreach ($cart as $item) {
		$values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
	}
	
	// преобразовываем массив в строку
	$sql .= implode($values, ', ');
    $rs = mysqli_query($bd, $sql); 
   
	 return $rs; 
}


function getPurchaseForOrder($orderId){
	global $bd;
    $sql = "SELECT `pe`.*, `ps`.`name` 
            FROM purchase as `pe`
            JOIN products as `ps` ON `pe`.product_id = `ps`.id
            WHERE `pe`.order_id = {$orderId}";
   
    $rs = mysqli_query($bd, $sql); 
    return createSmartyRsArray($rs); 
}