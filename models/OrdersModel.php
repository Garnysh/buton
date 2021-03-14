<?php

//  Заказы
include_once '../config/db.php'; // Подключение к базе данных

function makeNewOrder($name, $phone, $adress){
	global $bd;
	//> инициализация переменных
    $userId		=	$_SESSION['user']['id'];
	$comment	=	"id пользователя: {$userId}<br />
					Имя: {$name}<br />
					Тел: {$phone}<br />
					Адрес: {$adress}";
				
	$dateCreated	= date('Y.m.d H:i:s');
	$userIp			= $_SERVER['REMOTE_ADDR'];
	//<
	
	// формирование запроса к БД
	$sql = "INSERT INTO 
            orders (`user_id`, `date_created`, `date_payment`, 
					 `status`, `comment`, `user_ip`)  
           VALUES ('{$userId}', '{$dateCreated}', null, 
					'0', '{$comment}', '{$userIp}')";
	
   $rs = mysqli_query($bd, $sql);
   
   // получить id созданного заказа
   if($rs){
	   $sql = "SELECT id 
				FROM orders 
				ORDER BY id DESC 
				LIMIT 1";
	   $rs = mysqli_query($bd, $sql);
	   // преобразование результатов запроса
	   $rs = createSmartyRsArray($rs);
	   
	   // возвращаем id созданного запроса
	   if(isset($rs[0])){
		   return $rs[0]['id'];
	   }
   }
   
    return false;

}


// Список заказов
function getOrdersWithProductsByUser($userId){
	global $bd;
	$userId = intval($userId);
	$sql = "SELECT * FROM orders
			WHERE `user_id` = '{$userId}'
			ORDER BY id DESC";
	
	$rs = mysqli_query($bd, $sql); 

	$smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
       	$rsChildren = getPurchaseForOrder($row['id']);

        if($rsChildren){
            $row['children'] = $rsChildren;
			$smartyRs[] = $row;
        } 
    }
   
   return $smartyRs;	
}
