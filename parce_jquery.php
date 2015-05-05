<meta charset="utf-8">
<?php
$str = '
		<!DOCTYPE html>
		<html lang="ru">
			<head>
				<meta   charset  =  "utf-8"   >
				<title>    Курс парсинг    </title>
				<link rel="stylesheet" type="text/css" href="css/styles.css">
				<script src="/js/scripts.js"></script>
			</head>
			<body class="site">
				<a class="www" href=\'test1.php\'   >ссылка 1</a>
				<a href=\'test2.php\' class="www">ссылка 2</a>

				<p>Это <i>абзац</i>!</p>

				<div  class="rrr"   id="content"  >
					<a> Бракованная ссылка без href.</a>
					<p>Это абзац!</p>

					<a    href  =  "test.php"  >ссылка 3</a>

					<p class=\'www\'>
						<a id="test" href="http://site.ru/test.php">ссылка 4</a>
					</p>

					<p class="www">Это <b>абзац1!</b></p>
					<p class="www">Это <b>абзац2!</b></p>

					<a href="test.php">ссылка 5</a>
					<a href="test.php"   class =   "www" >ссылка 6</a>

				</div>

				<div  class="sidebar"  >
					<a href="test.php">ссылка 7</a>
					<a href="test.php"   class =   "www" >ссылка 8</a>
				</div>
				<div  class="pag"  >
					<ul>
						<li><a href="test.php?page=1">1</a></li>
						<li   class  =  "active"  >   <a href="test.php?page=2">2</a>   </li>
						<li><a href="test.php?page=3">3</a></li>
						<li><a href="test.php?page=4">4</a></li>
						<li><a href="test.php?page=5">5</a></li>
					</ul>

				</div>
				<div  id="footer"  >
					<p>
						Абзац из #footer.
					</p>
					<p    class   =   "eee">
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


    //require_once 'phpQuery/phpQuery.php';


    //$html = phpQuery::newDocument($str);
    //$pq = pq($html);

    //$res = $pq->find('a');

    //var_dump($res->html());

    /*foreach ($res as $elem) //
    {
        $e[] = pq($elem)->html();
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);*/



/*
    1. Получить содержимое #content, #footer, #sidebar.

    $res = $pq->find('#footer');

    var_dump(trim($res->html())); // trim - убирает пробелы слева и справа


    2. Получить все абзацы.



    $res = $pq->find('p');

    foreach ($res as $elem) //
    {
       $e[] = trim(pq($elem)->html());
    }

    var_dump($e);



   3. Получить все ссылки.



    $res = $pq->find('a');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);


   4. Получить все абзацы с классом www.




    $res = $pq->find('p.www');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
    }

    var_dump($e);




   5. Получить все ссылки из #content.




    $res = $pq->find('#content a');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);



   6. Получить содержимое всех абзацев из #content.


    $res = $pq->find('#content p');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
    }

    var_dump($e);



   7. Получить все ссылки с классом www.

    $res = $pq->find('a.www');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);



   8. Получить все ссылки с классом www из #content.



    $res = $pq->find('#content a.www');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);



   9. Получить все ссылки из пагинации .pag.



    $res = $pq->find('.pag a');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);


   10. Получить активную ссылку из пагинации .pag.



    $res = $pq->find('.pag li.active a');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
        $href[] = pq($elem)->attr('href');
    }

    var_dump($e);
    var_dump($href);



   11. Получить содержимое абзаца с классом "eee" из #footer.



    $res = $pq->find('#footer p.eee');

    foreach ($res as $elem) //
    {
        $e[] = trim(pq($elem)->html());
    }

    var_dump($e);

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
					<div>
						<h2>  <a href   =   "test.php">Интересное</a>  </h2>
						<img  src  = "http://google.ru/image3.png"  >
						<img src="http://google.ru/image4.png"/>

						<h2>Я h2 не ссылка</h2>

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


    require_once 'phpQuery/phpQuery.php';


    $html = phpQuery::newDocument($str);
    $pq = pq($html);


/*
1. Удалить все картинки.


    $html = phpQuery::newDocument($str);
    $pq = pq($html);

    $pq->find('img')->remove();

    $test = $pq->html();

    var_dump($test);



2. Удалить абзацы с классом "more" из полученного контента.

    $html = phpQuery::newDocument($str);
    $pq = pq($html);

    $pq->find('p.more')->remove();

    $test = $pq->html();

    var_dump($test);



3. Оберните все абзацы дивами.


    $html = phpQuery::newDocument($str);
    $pq = pq($html);

    $pq->find('p')->wrap('<div></div>');

    $test = $pq->html();
    var_dump($test);


4. Во все абзацы вставьте тег <b> вовнутрь.



$html = phpQuery::newDocument($str);
$pq = pq($html);

//$pq->find('p:not(.more)')->wrapInner('<b></b>'); // p:not(.more) - все абзацы, кроме p с классом more

//$pq->find('p:has(a)')->wrapInner('<b></b>');

//$pq->find('p:contains("подробнее")')->wrapInner('<b></b>');

$test = $pq->html();
var_dump($test);




5. Сыылки сделать просто текстом.


    $html = phpQuery::newDocument($str);
    $pq = pq($html);

    $res = $pq->find('a');

    foreach($res as $r)
    {
        $q = pq($r);
        $text = $q->html();

        $q->replaceWith($text);

    }
    $result = $pq->html();

    var_dump($result);



6. H2 из контента сделать просто текстом, а не ссылками.



    $html = phpQuery::newDocument($str);
    $pq = pq($html);

    $res = $pq->find('#content h2');

    foreach($res as $r)
    {
        $q = pq($r);
        $text = trim($q->text());

        $q->replaceWith('<h2>'.$text.'</h2>');

    }
    $result = $pq->html();

    var_dump($result);


7. H2 из контента, которые имеют ссылки, сделать просто ссылками.

	*/

$html = phpQuery::newDocument($str);
$pq = pq($html);

$res = $pq->find('#content h2:has(a)');

foreach($res as $r)
{
    $q = pq($r);
    $text = trim($q->html());

    $q->replaceWith($text);

}
$result = $pq->html();

var_dump($result);