﻿<?php

/*

Лекция №5
Работа с %
1. Даны переменные $a = 10 и $b = 3. Найдите остаток от деления $a на
$b.
$a = 10;
$b = 3;
echo $a % $b;


2. Даны переменные $a и $b. Проверьте, что $a делится без остатка на
$b. Если это так — выведите 'Делится' и результат деления, иначе
выведите 'Делится с остатком' и остаток от деления.

$a = 2;
$b = 3;
if($a % $b == 0 && $b !=0){
	echo "Делится!";
}else{
	echo "Не делится!";
}


Работа с модулем
1. Даны переменные $a и $b. Найдите модуль разности $a и $b.
Проверьте работу скрипта самостоятельно для различных $a и $b.


$a = 10;
$b = 11;
$c = $a - $b;
if($c < 0){
	echo "Это отрицательное число: $c <br>";
	echo "Модуль разности равен: ".abs($c);
}


2. Даны переменные $a и $b. Отнимите от $a переменную $b и
результат присвойте переменной $c. Сделайте так, чтобы в любом
случае в переменную $c записалось положительное значение.
Проверьте работу скрипта при $a и $b, равных соответственно 3 и 5,
6 и 1.

$a = 3;
$b = 5;
$c = abs($a - $b);
echo "Результат: $c";


Работа со степенью и корнем
1. Возведите 2 в 10 степень. Результат запишите в переменную $st.

echo pow(2,10);

2. Найдите квадратный корень из 245.

echo sqrt(245);

3. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите квадратный
корень из суммы квадратов его элементов. Для решения
воспользуйтесь циклом foreach.

$arr = array(4, 2, 5, 19, 13, 0, 10);
$result = 0;
foreach($arr as $a){
	$result += pow($a, 2);
}
echo $result.'<br>';
echo sqrt($result);


Работа с функциями округления
1. Найдите квадратный корень из 379. Результат округлите до целых, до
десятых, до сотых.

$a = sqrt(379);
echo 'Округление числа до целого: '.round($a).'<br>'; 
echo 'Округление числа до десятых: '.round($a,1).'<br>'; 
echo 'Округление числа до сотых: '.round($a,2); 
 

2. Найдите квадратный корень из 587. Округлите результат в большую
и меньшую сторону, запишите результаты округления в
ассоциативный массив с ключами 'floor' и 'ceil'.

$a = sqrt(587);
$f = floor($a);
$c = ceil($a);
$arr = array("floor"=>"$f", "ceil"=>"$c");
echo $arr["floor"];

Работа с min и max
1. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и
максимальное числа.

echo 'Минимальное число: '.min(4, -2, 5, 19, -130, 0, 10).'<br>';
echo 'Максимальное число: '.max(4, -2, 5, 19, -130, 0, 10);


Работа с рандомом
1. Выведите на экран случайное число от 1 до 100.

echo mt_rand(1,100);

2. Сделайте так, чтобы каждый раз при обновлении страницы на экран
выводилась случайным образом одна из трех картинок.

echo "<img src='".mt_rand(1,3).".png'>";

3. Заполните массив 10-ю случайными числами. (Подсказка: нужно
воспользоваться циклами for или while).

$a = array();
for($i=1; $i<=10; $i++){
	$a[$i] = mt_rand(1,10);	
}
print_r($a);


Задачи
1. Напишите скрипт, который будет находить корни квадратного
уравнения.
*/

/*
2. Напишите скрипт, который будет находить факториал числа.
Факториал — это произведение всех целых чисел, меньше данного.
Например, 4! = 1*2*3.

$a = array(1,2,3,4,5);
$fact = 1;
foreach($a as $k){
	$fact *= $k;
}
echo $fact;


Задачи
1. Напишите скрипт, который проверяет, является ли данное число
простым (простое число — это то, которое делится только на 1 и на
само себя).

$a = 1;
$k = 0;//2323423453534534583453453454564568
for($i=2; $i<$a; $i++){
	if($a%$i == 0){
		$k = 1;
	}
}
if($k == 1){
	echo "$a - не простое";
}else{
	echo "$a - простое";
}


2. Дан массив $arr. Найдите среднее арифметическое его элементов.
Подсказка: количество элементов массива можно подсчитать
функцией count. Проверьте задачу на массиве с элементами 12, 15,
20, 25, 59, 79.

$arr = array(12, 15, 20, 25, 59, 79);
foreach($arr as $k){
	$summ += $k;
}
echo $summ / count($arr);

3. Напишите скрипт-калькулятор единого налога. Налог считается так:
если вы заработали менее, чем ставка $stavka этого налога,
умноженная на 30 — то платите ставку. Если же вы заработали
более, чем 30*$stavka, то платите не только ставку налога, но и 5% от
той суммы, на которую вы превысили 30*$stavka.

$stavka = 30;
$raschet = $stavka * 30;
$money = 30000;
if($money < $raschet){
	echo "Вам надо заплатить: $stavka";	
}else{
	$oplata = ($raschet * 0.05)+ $stavka;
	echo "Вам надо заплатить: $oplata";
}

4. Напишите скрипт-калькулятор оплаты за электроэнергию. Сумма
считается так: если вы потратили за месяц менее 150 киловатт, то
сумма считается по одной ставке $summ1 за 1 киловатт, всё, что
больше 150 и меньше 300 киловатт считается по ставке $summ2, а
все киловатты после 300 — по ставке $summ3.


$summ1 = 20;
$summ2 = 15;
$summ3 = 10;

$kw = 180;

if($kw <= 150){
	$money = $kw * $summ1;
}elseif($kw > 150 && $kw <= 300){
	$money = $kw * $summ2;
}elseif($kw > 300){
	$money = $kw * $summ3;
}
echo "Вам надо заплатить: $money";


5. Напишите скрипт, который найдет все простые числа в заданном
промежутке. Проверьте его работу на промежутке от 1 до 1000.

$min = 2;
$max = 10;
$k = 0;
for($i=$min; $i<$max; $i++){
	for($a=2; $a<$i; $a++){
		if($i%$a == 0){
			$k = 1;
		}
	}
	if($k == 0){
		$itog .= $i;
	}
	$k = 0;
}
echo $itog;


6. Напишите скрипт, который реализует алгоритм 'решето Эратосфена'
для поиска простых чисел в заданном промежутке. Алгоритм
найдите самостоятельно в поисковых системах.

function sieve($n){
    $s = array(); 
    $s[1] = 0; // 1 - не простое число
    // заполняем решето единицами
    for($k=2; $k<=$n; $k++){
        $s[$k]=1;
	}
    
    for($k=2; $k<=$n; $k++){
        // если k - простое (не вычеркнуто)
        if($s[$k]==1){ 
            // то вычеркнем кратные k
            for($i=$k*$k; $i<=$n; $i+=$k){
                $s[$i]=0;
                }
            }
        }
    return $s;
}

foreach($arr as $key=>$val) 
{ 
        if($val==1)echo $key.','; 
}

    
7. Напишите скрипт, который будет разлагать заданное число на
простые множители.

8. Напишите скрипт, который будет находить коэффициенты a, b и c
квадратного уравнения для данных корней. То есть скрипт является
генератором квадратных уравнений. Подсказка: погуглите про
дискриминант и теорему Виета.

9. Напишите скрипт, который будет находить тройки целых чисел,
удовлетворяющих теореме Пифагора. Решите задачу двуми
способами: 'в лоб' и воспользовавшись специальными формулами:
http://ru.wikipedia.org/wiki/%D0%9F%D0%B8%D1%84%D0%B0%D0%B3%D0%BE
%D1%80%D0%BE%D0%B2%D0%B0_%D1%82%D1%80%D0%BE%D0%B9%D0%BA
%D0%B0

*/	
?>