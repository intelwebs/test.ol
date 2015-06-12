<meta charset="UTF-8">
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

*/

require_once 'phpQuery/phpQuery.php';


$url = 'http://dron.by';
$str = getSite($url);
//$res = iconv('windows-1251','utf-8', $res);
//var_dump($str);



$html = phpQuery::newDocument($str);
$pq = pq($html);


$res = $pq->find('.pagination a');


foreach ($res as $elem) //
{
    //$e[] = pq($elem)->html();
    $href[] = $url.pq($elem)->attr('href');
}

//var_dump($e);
var_dump(array_unique($href)); // array_unique - только уникальные элементы (не повторяющиеся)

$href = array_slice($href, 0, 2);
foreach ($href as $link){
    $str = getSite($link);

    $html = phpQuery::newDocument($str);
    $pq = pq($html);


    $res = $pq->find('h2 a');


    foreach ($res as $elem) //
    {
        $href1[] = $url.pq($elem)->attr('href');
    }

}

$href1 = array_slice($href1, 0, 2);
var_dump($href1);

foreach($href1 as $link){
    $str = getSite($link);

    $html = phpQuery::newDocument($str);
    $pq = pq($html);


    $h1 = $pq->find('.page-header h1')->eq(0);

    $content = $pq->find('.post');

    $htmlcontent = phpQuery::newDocument($content);
    $pq2 = pq($htmlcontent);
    $pq2->find('.date')->remove();

    $res = $pq2->find('.page-header:has(h1)');


    foreach($res as $r)
    {
        $q = pq($r);
        $text = $q->html();

        $q->replaceWith($text);

    }




    var_dump($htmlcontent->html());

}














