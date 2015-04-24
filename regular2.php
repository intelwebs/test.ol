<?php
/*
    1. Получить head, title и body.
    2. Получить массив всех ссылок (сначала только href, потом href и анкоры).
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
			    <div  class="rrr"   id="content"  >

                    <a class="www" href=\'test.php\'   >ссылка 1</a>

                    <a href=\'test.php\' class="www">ссылка 2</a>

                    <p>Это абзац!</p>

                    <a    href  =  "test.php"  >ссылка 3</a>

                    <p>
                        <a id="test" href="http://site.ru &copy; 2015/test.php">ссылка 4</a>
                    </p>

                    <p class="www">Это <b>абзац!</b></p>

                    <a href="test.php">ссылка 5</a>
                    <a href="test.php"   class =   "www" >ссылка 6</a>
				</div>
			</body>
		</html>
	
	';



$str = '
		<!DOCTYPE html>
		<html lang="ru">
			<head>
				<meta   charset  =  "utf-8"   >
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>    Курс парсинг    </title>
				<link rel="stylesheet" type="text/css" href="css/styles.css">
				<script src="/js/scripts.js"></script>
			</head>
			<body class="site">
				<a class="www" href=\'test.php\'   >ссылка 1</a>
				charset="eee">
				<a href=\'test.php\' class="www">ссылка 2</a>
				
				<p>Это <i>абзац</i>!</p>
				
				<div  class="rrr"   id="content"  >
					<a> Бракованная ссылка без href.</a>
					<p>Это абзац!</p>
					
					<a    href  =  "test.php"  >ссылка 3</a>
					
					<p class=\'www\'>
						<a id="test" href="http://site.ru &copy; 2015/test.php">ссылка 4</a>
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
						<li    class   =  "active">    <a href="test.php?page=2">2</a>    </li>
						<li><a href="test.php?page=3">3</a></li>
						<li><a href="test.php?page=4">4</a></li>
						<li><a href="test.php?page=5">5</a></li>
					</ul>
					
				</div>
				<div  id="footer"  > 
					<p>
						Абзац из #footer.
					</p>
					<p class="eee">
						eee внутри #footer
					</p>
					<p>
						Абзац из #footer
					</p>
				</div>
				<p class="eee">
					eee вне #footer
				</p>
			</body>
		</html>
	
	';


/*
    1. Получить head, title и body.
    2. Получить кодировку документа (нового и старого типа).
    3. Получить содержимое #content.
    4. Получить все ссылки из #content.
    5. Получить содержимое всех абзацев.
    6. Получить содержимое всех абзацев из #content.
    7. Получить все абзацы с классом www.

    $a=preg_match_all('#<p[^>]+?class\s*=\s*["\']www["\'][^>]*?>(.+?)</p>#su',$str, $links);
var_dump($links);


    8. Получить все ссылки с классом www (их href и анкоры).


    $a=preg_match_all('#<a[^>]+?class\s*=\s*["\']www["\'][^>]*?>(.+?)</a>#su',$str, $links);
    var_dump($links);
    foreach($links[0] as $link){
        $a=preg_match('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$str, $href);
        var_dump($href);
}



    9. Получить все ссылки с классом www из #content.



    $c = preg_match('#<div[^>]+?id\s*=\s*["\']content["\'][^>]*?>(.+?)</div>#su',$str, $content);

    $a=preg_match_all('#<a[^>]+?class\s*=\s*["\']www["\'][^>]*?>(.+?)</a>#su',$content[0], $links);

    var_dump($links);

    foreach($links[0] as $link){
        $a=preg_match('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$str, $href);
        var_dump($href);
    }


    10. Получить все ссылки из пагинации .pag.

    $p = preg_match('#<div[^>]+?class\s*=\s*["\']pag["\'][^>]*?>(.+?)</div>#su',$str, $pag);
    $a=preg_match_all('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$pag[0], $href);
    var_dump($href);


    11. Получить активную ссылку из пагинации .pag.


    $p = preg_match('#<div[^>]+?class\s*=\s*["\']pag["\'][^>]*?>(.+?)</div>#su',$str, $pag);
    $a=preg_match_all('#<li[^>]+?class\s*=\s*["\']active["\']>\s*<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>\s*</li>#su',$pag[0], $href);
    var_dump($href);


    12. Получите содержимое абзаца с классом "eee" из #footer.



$f = preg_match('#<div[^>]+?id\s*=\s*["\']footer["\'][^>]*?>(.+?)</div>#su',$str, $footer);
$e = preg_match_all('#<p[^>]+?class\s*=\s*["\']eee["\']>(.+?)</p>#su',$footer[0], $eee);
var_dump($eee);


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
				<div id="menu">
		
					<ul>
						<li><a href="/index.php">Главная <img src="icon1.png"></a></li>
						<li><a href="/news.php"  class="active">Новости</a></li>
						<li><a href="/contacts.php">Контакты <img src="icon2.png"></a></li>
						<li><a href="/company.php">О компании</a></li>
						<li><a href="/map.php">Как добраться <img src="icon3.png"></a></li>
					</ul>
				
				</div>
				<div   id="content"  >
					<h1>О компании</h1>
					<script   src="/js/scripts.js"  ></script>
					<div>
						<h2> <a href="">Новости</a> </h2>
						<img src="image1.png">
						<p>Lorem ipsum <b>dolor sit amet</b>, consectetur <span class="test" style="color: red">adipiscing elit</span>. Cras sollicitudin ultrices dictum. Nullam non diam vestibulum, interdum nibh quis, sollicitudin sem. Vivamus sit amet sagittis massa. Cras aliquet lacus at interdum blandit. Quisque quis tellus nunc. Cras at nisi laoreet, suscipit nibh quis, pellentesque diam. </p>
						<p>Pellentesque habitant morbi <span class="test">tristique</span> senectus et netus et malesuada fames ac turpis egestas. Etiam a bibendum orci. Sed fermentum consequat mauris adipiscing condimentum. Phasellus id convallis nunc. Nullam vel mollis purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nec neque vel risus accumsan sollicitudin quis ut velit. Fusce et libero hendrerit, accumsan enim non, dictum eros. Proin sem justo, porta id magna quis, consequat scelerisque urna. </p>
						<p class="more"><a href="news.php">подробнее...</a></p>
					</div>
					<div>
						<h2><a href="">О компании</a></h2>
						<img   width="200px" src=\'../image2.png\'  >
						<p class="www">Sed non ante vitae nunc lacinia tristique nec quis nisl. Integer a fringilla elit, vitae accumsan massa. Fusce ac tempor est. In ultricies mi sit amet nunc posuere eleifend. Cras vulputate hendrerit sodales. Mauris lectus magna, feugiat vitae sagittis id, suscipit ac dui. Sed a orci a ipsum iaculis gravida. Integer nec fringilla turpis. Sed dapibus turpis rutrum lacus mattis egestas. Aliquam viverra libero vitae mi pellentesque lobortis. Donec varius elit in aliquam consectetur. </p>
						<p style="color: red;" class="www"> Sed fermentum consequat mauris adipiscing condimentum. Phasellus id convallis nunc. Nullam vel mollis purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nec neque vel risus accumsan sollicitudin quis ut velit. Fusce et libero hendrerit, accumsan enim non, dictum eros. Proin sem justo, porta id magna quis, consequat scelerisque urna. </p>
						<p class="more"><a href="about.php">подробнее...</a></p>
						<p class="test more"><a href="about.php">подробнее...</a></p>
						<p class="more www"><a href="about.php">подробнее...</a></p>
						<p class="test more www"><a href="about.php">подробнее...</a></p>
					</div>
					<script>
						var i = 5;
						alert(i);
					
					</script>
					<div>
						<h2>  <a href   =   "test.php">Интересное</a>  </h2>
						<img  src  = "http://google.ru/image3.png"  >
						<img src="http://google.ru/image4.png"/>
						<p>Mauris et metus vitae lectus interdum auctor non sit amet odio. Morbi laoreet feugiat dapibus. Nulla ultricies sollicitudin est id blandit. Fusce justo nisl, tristique id fringilla ut, consectetur eu purus. Curabitur facilisis ipsum augue, vel varius turpis malesuada eget. Pellentesque et ante vestibulum, semper lorem quis, bibendum urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean hendrerit tortor a cursus fermentum. Nunc suscipit sem laoreet interdum ullamcorper. Fusce volutpat orci ut ante aliquam, vitae cursus nulla dignissim. Fusce dignissim suscipit suscipit. </p>
						<p>Etiam a bibendum orci. Sed fermentum consequat mauris adipiscing condimentum. Phasellus id convallis nunc. Nullam vel mollis purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras nec neque vel risus accumsan sollicitudin quis ut velit. Fusce et libero hendrerit, accumsan enim non, dictum eros. Proin sem justo, porta id magna quis, consequat scelerisque urna. </p>
						<p   class=\'more\' ><a href="interesting.php">подробнее...</a></p>
					</div>
					
				</div>
				<div  id="footer"  > 
					
				</div>
				
			</body>
		</html>
	
	';

/*

    1. Получить массив ссылок из меню.


    $m = preg_match('#<div[^>]+?id\s*=\s*["\']menu["\'][^>]*?>(.+?)</div>#su',$str, $menu);
    $a=preg_match_all('#<a[^>]+?href\s*=\s*["\'](.*?)["\'][^>]*?>(.*?)</a>#su',$menu[0], $href);
    var_dump($href);

/*

    2. Получить массив всех картинок.

    preg_match_all('#<img[^>]+?src\s*=\s*["\'](.*?)["\'][^>]*?>#su',$str, $img);
    var_dump($img);

    3. Получить содержимое контента.

*/

$m = preg_match('#<div[^>]+?id\s*=\s*["\']content["\'][^>]*?>(.+?)<div[^>]+?id\s*=\s*["\']footer["\']#su',$str, $content);
var_dump($content);

/*
    4. Получить картинки контента.
    5. Удалить скрипты из полученного контента.
    6. Удалить картинки из полученного контента.
    7. Удалить абзацы с классом "more" из полученного контента.
    8. H2 из контента сделать просто текстом, а не ссылками.
    9. Удалите все атрибуты абзацев из полученного контента.
    10. Удалите все теги span из полученного контента.

 */






/*
    Мы находимся на url "http://site.ru/folder/subfolder/test.html"

    Замените src всех картинок на их реальные абсолютные пути.
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
				<img src="image1.png"> <!-- http://site.ru/folder/subfolder/image1.png -->
				<img src="images/image1.png">  <!-- http://site.ru/folder/subfolder/images/image1.png -->
				<img src="test/images/image1.png"> <!-- http://site.ru/folder/subfolder/test/images/image1.png -->
				<img src="/images/image1.png"> <!-- http://site.ru/images/image1.png -->
				<img src="../images/image1.png">  <!-- http://site.ru/folder/images/image1.png -->
				<img src="../../images/image1.png"> <!-- http://site.ru/images/image1.png -->
				<img src="http://site.ru/folder/images/image1.png"><!-- http://site.ru/folder/images/image1.png -->
			</body>
		</html>
	
	';