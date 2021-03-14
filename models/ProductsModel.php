<?php
include_once '../config/db.php'; // Подключение к базе данных

// Товары
// Послед добавленные
function getLastProducts($limit = null){
   global $bd;
    $sql = "SELECT *
            FROM tb_items 
            ORDER BY id DESC";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }   
    $rs = mysqli_query($bd,$sql);   
   return createSmartyRsArray($rs); 
}

// товары категорий
function getProductsByCat($itemId){
   global $bd;
   $sql = "SELECT * 
            FROM tb_items
            WHERE tb_categoties_url = '{$itemId}'";   
   $rs = mysqli_query($bd, $sql);   
   return createSmartyRsArray($rs);   
}


// данные товара по id
function getProductById($itemId){
   global $bd;
   $sql = "SELECT * 
            FROM tb_items
            WHERE id = '{$itemId}'";   
   $rs = mysqli_query($bd, $sql); 
   return mysqli_fetch_assoc($rs);   
}

// список товаров из массива
function getProductsFromArray($itemsIds){
   global $bd;
    $strIds = implode($itemsIds, ', ');
    $sql = "SELECT * 
            FROM tb_items
            WHERE id in ({$strIds})";		
    $rs = mysqli_query($bd, $sql); 
   
   return createSmartyRsArray($rs); 
}