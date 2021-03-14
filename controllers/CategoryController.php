<?php
// Контроллер категорий

// подкл модули 
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

// Формирование страницы 
function indexAction($smarty) {
    // echo "Test";
    $catId = isset($_GET['url']) ? $_GET['url'] : null;
    if($catId == null) exit();
    $rsCategory = getCatByUrl($catId);
    $rsProducts = getProductsByCat($catId);

    // за счет массива стоим меню
    $rsCategories = getCats();

    $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);

    // ин набора данных
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    // передача кат для постоения меню
    $smarty->assign('rsCategories', $rsCategories);

    // шаблоны
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');


}