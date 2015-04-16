<meta charset="utf-8">
<?php

/*
    1. Получить head, title и body.
    2. Получить массив всех ссылок.
*/
$str = '
		<html>
			<head>
				<meta charset="utf-8">
				<title>Курс парсинг</title>
				<link rel="stylesheet" type="text/css" href="css/styles.css">
				<script src="/js/scripts.js"></script>
			</head>
			<body>
				<a class="www" href=\'test.php\'   >ссылка 1</a>

				<a href=\'test.php\' class="www">ссылка 2</a>

				<p>Это абзац!</p>

				<a    href  =  "test.php"  >ссылка 3</a>

				<p>
					<a id="test" href="http://site.ru/test.php">ссылка 4</a>
				</p>

				<p class="www">Это <b>абзац!</b></p>

				<a href="test.php">ссылка 5</a>
				<a href="test.php"   class =   "www" >ссылка 6</a>
			</body>
		</html>

	';

/*
echo preg_match('#<head>(.+)</head>#su',$str, $head); // s - для многострочного режима (рассматривает как одну строку)

echo preg_match('#<title>(.+)</title>#su',$str, $title);

echo preg_match('#<body>(.+)</body>#su',$str, $body);

//echo preg_match_all('#href\s*=\s*["\'].+?["\']#su',$str, $links);
echo preg_match_all('#<a[^>]+?href\s*=\s*["\'](.+?)["\'][^>]*?>#su',$str, $links); ищем содержание <a href="">

echo preg_match_all('#<a[^>]+?href\s*=\s*["\'](.+?)["\'][^>]*?>(.+?)</a>#su',$str, $links); // ссылки вместе с анкорами


var_dump(trim($head[1]));

var_dump(trim($title[1]));

var_dump(trim($body[1]));

var_dump($links);*/



/* ----------------------------------------------------------------------------------------------  */


/*
    1. Получить head, title и body.
    2. Получить кодировку документа.
    3. Получить содержимое #content.
    4. Получить все ссылки из #content.
    5. Получить содержимое всех абзацев.
    6. Получить содержимое всех абзацев из #content.
    7. Получить все ссылки с классом www.
    8. Получить все ссылки с классом www из #content.
    9. Получить все ссылки из пагинации .pag.
    10. Получить активную ссылку из пагинации .pag.
*/
$str = '
		<!DOCTYPE html>
		<html lang="ru">
			<head>
				<meta   charset="utf-8">
				<title>    Курс парсинг    </title>
				<link rel="stylesheet" type="text/css" href="css/styles.css">
				<script src="/js/scripts.js"></script>
			</head>
			<body class="site">
				<a class="www" href=\'test.php\'   >ссылка 1</a>

				<a href=\'test.php\' class="www">ссылка 2</a>

				<p>Это <i>абзац</i>!</p>
                charset="eee">
				<div   id="content"  >
					<a> Бракованная ссылка без href.</a>
					<p>Это абзац!</p>

					<a    href  =  "test.php"  >ссылка 3</a>

					<p>
						<a id="test" href="http://site.ru/test.php">ссылка 4</a>
					</p>

					<p class="www">Это <b>абзац!</b></p>

					<a href="test.php">ссылка 5</a>
					<a href="test.php"   class =   "www" >ссылка 6</a>

				</div>

				<script src="/js/scripts.js"></script>

				<div  class="sidebar"  >
					<a href="test.php">ссылка 7</a>
					<a href="test.php"   class =   "www" >ссылка 8</a>
				</div>
				<div  class="pag"  >
					<ul>
						<li><a href="test.php?page=1">1</a></li>
						<li class="active"><a href="test.php?page=2">2</a></li>
						<li><a href="test.php?page=3">3</a></li>
						<li><a href="test.php?page=4">4</a></li>
						<li><a href="test.php?page=5">5</a></li>
					</ul>

				</div>
			</body>
		</html>

	';


//echo preg_match('#<head>(.+)</head>#su',$str, $head); // s - для многострочного режима (рассматривает как одну строку)

//echo preg_match('#<title>(.+)</title>#su',$str, $title);

/*echo preg_match('#<body.+?>(.+)</body>#su',$str, $body);*/


// 2. Получить кодировку документа.

//echo preg_match('#<meta\s*charset\s*=\s*["\'](.+?)\s*["\']\s*>#su',$str, $code);  // вариант мини

//echo preg_match('#<meta.+?charset\s*=\s*["\']*(.+?)\s*["\']*\s*>#su',$str, $code); // Добавляем условия при возможности старых записей <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

//  3. Получить содержимое #content.

/*echo preg_match('#<div.+?id="content".*?>(.+?)</div>#su',$str, $content);*/


// 4. Получить все ссылки из #content.

/*echo preg_match('#<div.+?id="content".*?>(.+?)</div>#su',$str, $content);

echo preg_match_all('#<a[^>]+?href\s*=\s*["\'](.+?)["\'][^>]*?>(.+?)</a>#su',$content[1], $links);*/

// 5. Получить содержимое всех абзацев.

/*echo preg_match_all('#<p.*?>(.+?)</p>#su',$str, $p);*/

// 6. Получить содержимое всех абзацев из #content.

/*echo preg_match('#<div.+?id="content".*?>(.+?)</div>#su',$str, $content);

echo preg_match_all('#<p.*?>(.+?)</p>#su',$content[1], $p);*/

// 7. Получить все ссылки с классом www.


echo preg_match_all('#<a[^>]+?href\s*=\s*["\'](.+?)["\'][^>]*?>(.+?)</a>#su',$str, $links);



/*
var_dump(trim($head[1]));

var_dump(trim($title[1]));

var_dump(trim($body[1]));

var_dump($code);

var_dump($content);

var_dump($links);*/

var_dump($p);
