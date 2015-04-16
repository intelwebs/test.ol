<?php
error_reporting(E_ALL);
session_start();
/*
if(empty($_SESSION['time'])){
	$time = time();
	$_SESSION['time'] = $time;
}else{
	echo time()-$_SESSION['time'];
}

	/*if(isset($_POST['send'])){
		$_SESSION['country'] = $_POST['country'];
		
	


if(empty($_SESSION['counter'])){
	echo "you're here the first time.";
	$_SESSION['counter'] = 1;
}else{
	echo ++$_SESSION['counter'];
}



if (isset($_POST['send'])) {
    setcookie("country", $_POST['country'], time() + 3600);
}

if(!isset($_COOKIE['country'])) {
    ?>
    <form method='post'>
        <input type="text" name="country">
        <input type='submit' name="send" value="Send">
    </form>
    <a href="test.php">test.php</a>

    <?php

}



Установите куку с именем age. Запишите туда случайное число от 10
до 70 (с помощью mt_rand). Сделайте так, чтобы эта кука
установилась на 1 час, на 3 часа, на 1 день, на год, на 10 лет, до конца
текущего дня, до конца текущего года.

setcookie("age", mt_rand(10,70), time() + 3600);
setcookie("age", mt_rand(10,70), time() + 3600 * 3);
setcookie("age", mt_rand(10,70), time() + 3600 * 24);
setcookie("age", mt_rand(10,70), time() + 3600 * 24 * 365 * 10);

setcookie("age", mt_rand(10,70), mktime(23, 59, 59)+1);
setcookie("age", mt_rand(10,70), mktime(23, 59, 59, 12, 31));



Напишите оболочку над cookie. Оболочка должна представлять
собой набор функций: сохранение куки, удаление куки,
редактирование куки.


function settingCookie($cookie, $value, $sec){
    setcookie($cookie, $value, time() + $sec, '/');
}

function delCookie($cookie){
    setcookie($cookie, '', time(), '/');
}

settingCookie('test', 'hello', 3600);
echo $_COOKIE['test'];

Сделайте на сайте 5 картинок с товарами. Реализуйте корзину. Под
каждой картинкой должна быть ссылка 'положить в корзину'. По
нажатию на эту ссылку этот товар должен занестись в корзину
(сессия), также должна увеличиться общая сумма, которую должен
заплатить пользователь


$prices = array('1'=>'1000','2'=>'5000');

if(!empty ($_GET['good'])){
    $_SESSION['cart'][] = $_GET['good'];
    $_SESSION['prices'][] = $prices[$_GET['good']];
}
@var_dump ($_SESSION['cart']);

echo $summ = array_sum($_SESSION['prices']);
echo "<a href="?good=1&price=1000">товар 1</a>";
echo "<a href="?good=2&price=500">товар 2</a>";



Домашнее задание
Работа с сессиями
1. Спросите имя пользователя с помощью формы и сохраните его в
сессии. При обновлении страницы поприветствуйте пользователя.


echo "<form method='POST'>Enter your name: <input type='text' name='user'><input type='submit'><input type='submit' name='delcookie' value='delete cookie'></form>";
if(!empty($_POST)) {
    $_SESSION['user'] = $_POST['user'];
}
if(isset($_POST['delcookie'])) setcookie($_SESSION['user'], '', time(), '/');;
if(isset($_SESSION['user'])) echo "Hello, ".$_SESSION['user'];


2. Спросите у пользователя email с помощью формы. Затем сделайте
так, чтобы в другой форме (имя, фамилия, пароль, email) при ее
открытии поле email было автоматически заполнено.

echo "<form method='POST'>Enter your email: <input type='text' name='email'><input type='submit'><input type='submit' name='delcookie' value='delete cookie'></form>";
if(!empty($_POST)) {
    $_SESSION['email'] = $_POST['email'];
}
if(isset($_POST['delcookie'])) setcookie($_SESSION['email'], '', time(), '/');

if(isset($_SESSION['email'])) echo "<input type='text' value='".$_SESSION['email']."'>";


3. Предложите пользователю выбрать любимый цвет с помощью
выпадающего списка (красный, зеленый, синий). Затем сделайте
небольшую витрину с товарами трех цветов. При заходе
пользователя на эту витрину он должен увидеть товары своего
любимого цвета.
*/

echo "<form method='POST'>
            Select a color:
            <select name='color'>
              <option>red</option>
              <option>green</option>
              <option>blue</option>
            </select>
            <input type='submit'>
            <input type='submit' name='delcookie' value='delete cookie'>
        </form>
    ";
if(!empty($_POST)) {
    $_SESSION['color'] = $_POST['color'];
}
if(isset($_POST['delcookie'])) setcookie($_SESSION['color'], '', time(), '/');

$color = array(
    'red'=>'Wow, so many goods of red color',
    'green'=>'Wow, so many goods of green color',
    'blue'=>'Wow, so many goods of blue color',
);

if(isset($_SESSION['color'])) {
    foreach($color as $key => $value){
        if($_POST['color'] == $key){
            echo $value;
        }
    }
}


/*
4. С помощью витрины, созданной в предыдущей задаче, реализуйте
корзину. Корзина должна хранить все товары, выбранные
пользователем и суммировать их стоимости.

5. Реализуйте тест по принципу 'одна страница сайта — одна задача'.
Запомните результаты ответов пользователя в сессию.

Работа со cookie
1. Спросите имя пользователя с помощью формы и сохраните его в
куки. При следующем заходе пользователя поприветствуйте его.

2. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя
на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.

3. Покажите пользователю баннер с кнопкой 'Не показывать больше!'.
Если он нажмет на эту кнопку — не показывайте ему баннер в
течении месяца.

4. Запомните дату последнего посещения сайта пользователем. При
заходе на сайт напишите ему, сколько дней он не был на вашем
сайте.

5. Спросите дату рождения пользователя. При следующем заходе на
сайт напишите сколько дней осталось до его дня рождения. Если
сегодня день рождения пользователя — поздравьте его!

6. Реализуйте выбор дизайна сайта пользователем. Сделайте несколько
дизайнов сайта. Пользователь может выбрать один из дизайнов с
помощью выпадающего списка. Этот выбор будет сохранен в куки и
пользователь, заходя на сайт, всегда будет видеть один и тот же
дизайн.

7. Реализуйте игру 'Казино' с помощью куки и сессий. Суть игры такая:
пользователю дается сумма в 100$, в казино выпадает цифра от
одного до 6 (кубик). Игрок может поставить на одну, две или три
цифры. На одну цифру — ставка умножается на 6, на две — на 3, на
три — на 2. В случае выигрыша сумма записывается в кошелек
игрока, в случае проигрыша — отнимается. Кошелек храните в
куках, чтобы игрок мог продолжить игру через какое-то время.
*/
?>

