<?php
error_reporting(E_ALL);

$curl = curl_init();//инициализируем сеанс

$url = 'http://www.intelwebs.ru';

//Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $url);
//-
//Ответ сервера сохранять в переменную, а не на экран
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//-
//Переходить по редиректам
curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);


$siteAnswer = curl_exec($curl);//выполняем запрос


echo var_dump($siteAnswer);

//echo $siteAnswer;