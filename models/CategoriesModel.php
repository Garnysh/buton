<?php 

include_once '../config/db.php'; // Подключение к базе данных

function getCats () {
    global $bd;
    $sql = 'SELECT * FROM tb_categoties';
    $rs = mysqli_query($bd, $sql);
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

function getCatByUrl($catId){
    global $bd;
    $sql = "SELECT *
    FROM tb_categoties
    WHERE URL = '{$catId}'";
    $rs = mysqli_query($bd, $sql);
    return mysqli_fetch_assoc($rs);
}