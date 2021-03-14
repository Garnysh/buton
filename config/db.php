<?php


// Подключение в бд
$dblocation = "127.0.0.1";
$dbname = "butonshop";
$dbuser = "garnysh";
$dbpasswd = "garnysh";   

   // соединяемся с БД
  $bd = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);  
  
  if(! $bd){   
    echo "Ошибка доступа к MySql";   
    exit();   
  }   
  
