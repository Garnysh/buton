<?php


// Формирование страницы
function loadPage($smarty, $controllerName, $actionName = 'index'){
	include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty);
}
// шаблон

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

// Отладка
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';    
    if($die) die;
}

// Преобразование в массив
function createSmartyRsArray($rs){
    if(! $rs) return false;    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

// Редирект
function redirect($url){
    if(! $url) $url = '/';
    header("Location: {$url}"); 
    exit; 
}