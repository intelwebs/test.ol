<?php


function getSite($url)
{
    $curl = curl_init();//инициализируем сеанс

    //Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);
    //-
    //Ответ сервера сохранять в переменную, а не на экран
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //-
    //Переходить по редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

    $siteAnswer = curl_exec($curl);//выполняем запрос

    //echo var_dump($siteAnswer);
    //echo $siteAnswer;

    return $siteAnswer;
}



/*
    1. Получить head, title, body, h1.
*/


    $url = 'http://test.ol/ex/1';
    $res = getSite($url);
    //$res = iconv('windows-1251','utf-8', $res);
    var_dump($res);



    preg_match('#<head[^>]*?>(.+)</head>#su',$res, $head); // s - для многострочного режима (рассматривает как одну строку)

    preg_match('#<title[^>]*?>(.+)</title>#su',$res, $title);

    preg_match('#<body[^>]*?>(.+)</body>#su',$res, $body);

    preg_match('#<h1[^>]*?>(.*?)</h1>#su',$res, $h1);


    var_dump($head);

    var_dump($title);

    var_dump($body);

    var_dump($h1);



/*

    2. Получить массив всех ссылок.
*/

    preg_match_all('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$body[0], $href);

    var_dump($href);

/*
    3. Получить массив всех картинок.

*/

    preg_match_all('#<img[^>]+?src\s*=\s*["\'](.*?)["\'][^>]*?>#su',$body[0], $img);

    var_dump($img);



/*
    4. Получить кодировку документа.

*/

    echo preg_match('#<meta[^>]+?charset\s*=\s*["\']?(.+?)\s*["\']?\s*>#su',$res, $code); // Добавляем условия при возможности старых записей <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    var_dump($code);

/*
    5. Получить содержимое контента.
*/

    preg_match('#<div[^>]+?id="content".*?>(.+?)<div[^>]+?id\s*=\s*["\']sidebar#su',$res, $content);
    var_dump($content);



/*
    6. Получить содержимое сайдбара.

*/


    preg_match('#<div[^>]+?id="sidebar".*?>(.+?)<div[^>]+?class\s*=\s*["\']clearing#su',$res, $sidebar);
    var_dump($sidebar);


/*
    7. Получить ссылки из сайдбара.
*/

    preg_match('#<div[^>]+?id="sidebar".*?>(.+?)<div[^>]+?class\s*=\s*["\']clearing#su',$res, $sidebar);
    preg_match_all('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$sidebar[0], $href);

    var_dump($href);


/*
    8. Получить содержимое футера.
*/

    preg_match('#<div[^>]+?id="footer".*?>(.+?)</div\s*>#su',$res, $footer);

    var_dump($footer);