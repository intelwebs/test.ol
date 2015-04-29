<meta charset="utf-8">
<?php
error_reporting(E_ALL);


//Устанавливаем доступы к базе данных:
$host = 'localhost'; //Имя хоста, на локальном компьютере это localhost.
$user = 'root'; //Имя пользователя, по умолчанию это root.
$password = ''; //Пароль, по умолчанию пустой.
//Соединяемся с базой данных используя наши доступы:
mysql_connect($host, $user, $password) or die(mysql_error());
//Выбираем базу данных (в нашем случае parce):
$db_name = 'parce'; //Имя базы данных.
mysql_select_db($db_name) or die(mysql_error());
//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysql_query("SET NAMES 'utf8'");




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

$url = 'http://1links';
$siteAnswer = getSite($url);

preg_match('#<div[^>]+?id\s*=\s*["\']menu["\'][^>]*?>(.+?)</div>#su',$siteAnswer, $menu);
preg_match_all('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$menu[0], $href);

var_dump($href);

foreach($href[1] as $link){
    $go = $url.'/'.$link;
    $res = getSite($go);

    preg_match('#<title>(.+)</title>#su',$res, $title);

    preg_match('#<h1[^>]*?>(.*?)</h1>#su',$res, $h1);

    preg_match('#<div.+?id="content".*?>(.+?)</div>#su',$res, $content);


    //ВСТАВИТЬ В имя_таблицы УСТАНОВИТЬ имя='Гена', возраст=30, зарплата=1000

    $title = mysql_real_escape_string($title[1]);
    $h1 = mysql_real_escape_string($h1[1]);
    $content = mysql_real_escape_string($content[1]);

    $query = "INSERT INTO link SET url='$go', title='$title', h1='$h1', content='$content'";

    //Делаем запрос к БД, результат запроса пишем в $result:
    mysql_query($query) or die( mysql_error() );


}



$url = 'http://2pag/index1.php';
$siteAnswer = getSite($url);

preg_match('#<div[^>]+?id\s*=\s*["\']menu["\'][^>]*?>(.+?)</div>#su',$siteAnswer, $menu);

preg_match_all('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$menu[0], $href);




foreach($href[1] as $link){
    $url = 'http://2pag';
    $go = $url.'/'.$link;
    $res = getSite($go);
    //var_dump($go);
    preg_match_all('#<h2[^>]*?>\s*<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>\s*</h2>#su',$res, $href2);

    foreach($href2[1] as $link2){

        preg_match('#<title>(.+)</title>#su',$res, $title);

        preg_match('#<h1[^>]*?>(.*?)</h1>#su',$res, $h1);

        preg_match('#<div.+?id="content".*?>(.+?)</div>#su',$res, $content);


        //ВСТАВИТЬ В имя_таблицы УСТАНОВИТЬ имя='Гена', возраст=30, зарплата=1000

        $title = mysql_real_escape_string($title[1]);
        $h1 = mysql_real_escape_string($h1[1]);
        $content = mysql_real_escape_string($content[1]);

        $query = "INSERT INTO link SET url='$go', title='$title', h1='$h1', content='$content'";

        //Делаем запрос к БД, результат запроса пишем в $result:
        mysql_query($query) or die( mysql_error() );



    }

}


//function saveOrUpdate(){
//    //если url уже есть - тогда делаем update
//    "SELECT * FROM WHERE url='$url"
//    //иначе просто сохраняем
//}

*/


// перекодировка

    $url = 'http://3charset';
    $res = getSite($url);
    $res = iconv('windows-1251','utf-8', $res);
    var_dump($res);

    /*preg_match('#<div[^>]+?id\s*=\s*["\']wrapper["\'][^>]*?>(.+?)</div>#su',$siteAnswer, $menu);*/




