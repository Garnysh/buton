<?php
//  Файл настроек
 

//> Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');
//<


//> используемый шаблон 
$template = 'default';

// пути к файлам шаблонов (*.tpl)
define('TemplatePrefix','../views/'.$template.'/');
define ('TemplatePostfix', '.tpl');


//  Инициализация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir("../library/tmp/templates_c");
$smarty->setConfigDir("../library/smarty/config");
$smarty->setCacheDir("../library/tmp/cache");

$smarty->assign('templateWebPath', TemplateWebPath);

