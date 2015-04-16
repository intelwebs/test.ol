<?php
// include - прямая вставка (содержимое вставить не думая)
// require - заглянуть в файл при необходимости
// require_once - загляни 1 раз (если заглядывал, то больше заглядывать не надо)
require_once 'class.php';

$session = new Session;
$session->save('user', 'Olga');
echo $session->get('user');

/*
$a = new Power;
echo $a->upSecond(3);
*/

/* Куки
$cookie = new Cookie;
$cookie->set('user', 'Vasya');
$cookie->del('user');
echo $cookie->get('user');
*/

/* public - снаружи
private - внутри класса
protected - внутри класса и потомков

$protector = new Protector;
$arr = array('Vasya', ' ', '&nbsp;Petya ', '<p>Hello, world!</p>');
print_r ($protector->request['name']);
*/
