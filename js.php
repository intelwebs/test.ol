<meta charset="UTF-8">
<script>


/*    Преобразуйте первую букву строки в верхний регистр.
 2. Преобразуйте первую букву каждого слова строки в верхний
 регистр.*/


/*

    var str = "я - учу-javascript!";
    //alert("(учу): "    + str.substr(1,5));

    //alert(str.slice(2,-1));

    //alert(str.indexOf("у", 3));

    //alert(str.replace(/-/g, '!'));

    //arr = "a!b!c".split('!')  // массив ["a", "b", "c"]
    //alert(arr);

    var arr = [ 1, 2 , 3 ]
    res = arr.join('+')  // "1+2+3"
    //arr.join()  // "1,2,3"

    alert(res)*/


/*    var str = "я помню чудное мгновенье...";

    arr = str.split(' ');
    var word = new Array();
    for(var n=0; n < arr.length;  n++){
        word[n] = arr[n].substr(0,1).toUpperCase() + arr[n].substr(1);

    }

    alert(word.join(' '));



    //first = str.substr(0,1);

    //second = str.substr(1);

    //alert(first.toUpperCase() + second);*/



/*

var num1 = [1, 2, 3];
var num2 = [4, 5, 6];


// создает массив [1, 2, 3, 4, 5, 6, 7, 8, 9];
var nums = num1.concat(num2);


alert(nums);

*/
/*

arr = [1,2,3]

a = arr.reverse() // [ 3, 2, 1]

alert(a) // true*/

/*
arr = [1, 2, 3, 4, 5]
removed = arr.splice(1,3)

    //alert(removed)

alert(Object.keys({key: 1, ke1: 3}));
*/

/*
function test(){

    var img = document.getElementById('pic');
    //var img = document.getElementById('pic').src;

    //alert(window.location.host);

    if(img.src == "http://" + window.location.host + "/img/1.jpg"){
        img.src = "http://" + window.location.host + "/img/2.jpg";
    }else{
        img.src = "http://" + window.location.host + "/img/1.jpg";
    }

}
*/


/*function test(elem) {
    //var  elem = document.getElementById(id);
    elem.value = "hihihi";
    alert(this.location)

}

*/


/*
function test(elem) {
    //var  elem = document.getElementById(id);
    elem.style.color = "ff0000";
    elem.style.width = "300";

}*/


/*function hide() {
    var  elem = document.getElementById("txt");
    elem.style.display = "none";

}

function show() {
    var  elem = document.getElementById("txt");
    elem.style.display = "";

}*/

/*function arr() {
    var elements = document.forms[0].elements;

    for (var i = 0; i < elements.length; i++) {
        alert(elements[i].value);
    }
}*/


/*

function sub(elem){
    if(elem.id == "but1") {
        elem.disabled = true;
        var but2 = document.getElementById("but2");
        but2.style.display = "";
    }

    if(elem.id == "but2") {
        elem.style.display = "none";
        var but1 = document.getElementById("but1");
        but1.disabled = false;
    }
}
*/

/*
function counts(elem){
    elem.value = Number(elem.value) + 1;
}
*/

/*    function intxt(){

        var txt = document.getElementById("sampletxt");
        txt.innerHTML = "Ку-ку!" + "<b>Жирдяй )</b>";
        alert("Далее");
        txt.innerText = "Ку-ку!" + "<b>Жирдяй )</b>";
        alert("Далее");
        txt.outerHTML = "<h1>Поменяли тег</h1>";
    }*/


/*
    function res(){

        var num1 = document.getElementById("num1");
        var num2 = document.getElementById("num2");

        var result = Number(num1.value) + Number(num2.value);

        var res = document.getElementById("res");
        res.innerHTML = result;

    }*/

/*function changetag() {
    var elements = document.getElementsByTagName('p');

    for (var i = 0; i < elements.length; i++) {
        elements[i].innerHTML = 'Ку-ку!';
    }

}*/

/*function go(){
    var test = document.getElementById('test');
    alert(test.getAttribute('class'));

}*/

    function changetxt(elem){
        var txt = document.getElementById("txt");
        txt.innerHTML = elem.value;
    }

</script>

<!--
<img src="img/1.jpg" id="pic"/>

<input type="submit" name="ok" value="press1"  onclick="test(this)">

<input type="submit" name="ok" value="press2" id="id2" onclick="test(this)">



<input type="text" id="txt" value="press1"> <input type="submit" value="Нажми 1" onclick="hide()"> <input type="submit" value="Нажми 2" onclick="show()">


<form>

    <input type="text" value="1"><br>
    <input type="text" value="2"><br>
    <input type="text" value="3"><br>
    <input type="submit" value="press"onclick="arr()" >

</form>




<input type="submit" value="press" id="but1" onclick="sub(this)" >

<input type="submit" value="press" id="but2" onclick="sub(this)" style="display: none">




<input type="submit" value="0" onclick="counts(this)" >




<p id="sampletxt">Ля-ля!</p>

<input type="submit" value="Меняем текст абзаца" onclick="intxt()" >





<input type="text" value="0" id="num1"> + <input type="text" value="0" id="num2"> <input type="submit" value="  =  " onclick="res()" > <span id="res">0</span>




<p>1</p>
<p>1</p>
<p>1</p>

<input type="submit" value="Меняем текст абзаца" onclick="changetag()" >

<p id = "test" class="my-class">Абзац с class="my-class".</p>
<input type="submit" value="Нажми - и я выведу класс абзаца." onclick="go()">



<p id="txt"></p>

<input type="text" value="" onkeyup = "changetxt(this)">


Выведите на экран текущую дату-время в формате '12:59:59
31.31.2014'.
-->

<script>



/*
// Выведите на экран текущую дату-время в формате '12:59:59 19.05.2015

    function dateRedo(n){
        if(n >= 0 && n < 10){
            n = '0' + n;
        }
        return n;
    }


    var now = new Date();
    alert(dateRedo(now.getHours()) + ":" +  dateRedo(now.getMinutes()) + ":" + dateRedo(now.getSeconds())  + " " + dateRedo(now.getDate())  + "." + dateRedo(now.getMonth() + 1)  + "." + dateRedo(now.getFullYear()) );

*/




/*

    //Работа с getDay
    //1. Выведите на экран текущий день (словом по-русски). Создайте для
    //этого вспомогательную функцию, которая параметром принимает
    //число, а возвращает день недели по-русски.


    var day = ['sun', 'mon', 'tue', 'wed', 'thr', 'fri', 'sat'];

    var now = new Date();
    alert(day[now.getDay()]);

    */



/*//Работа с getTime
//1. Выведите на экран количество минут с 1-го января 1970 года до
//настоящего момента времени.


    var now = new Date();
    alert(now.getTime());
    */



/*var m = Date.parse('2015-03-01'); // зона UTC

var now = new Date();
var n = now.getTime();

alert(n - m);

// или

var diff = new Date() - new Date(2015, 2, 1);   */



//1. Выведите на экран количество секунд с начала дня до настоящего
//момента времени.


/*
var now = new Date();
//var n = now.getTime();


var day = new Date(now.getFullYear(), now.getMonth(), now.getDate());
//var d = day.getTime();

var diff = (now - day) / 1000;

alert(diff + ' sec');
*/


//2. Создайте инпут, в который пользователь вводит дату своего
//рождения в формате '2014-12-31' (с конкрентным годом). По потери
//фокуса выведите под инпутом сколько дней осталось до его дня
//рождения. Воспользуйтесь функцией Date.parse.

/*

function ddd(elem){

    var dateBirth = elem.value;
    alert (dateBirth);
}
*/



//3. Измерьте время выполнения скрипта в милисекундах.
//4. Напишите функцию, которая преобразует секунды в дни, часы,
//    минуты.



/*

function go(){
    document.getElementById('startButton').disabled = true;
    document.getElementById('stopButton').disabled = false;

    window.timerId = window.setInterval(timer, 1000);//window.timerId - глобальная переменная
}

function timer(){
    document.getElementById('counter').innerHTML = Number(document.getElementById('counter').innerHTML) + 1;
}

function stop(){
    window.clearInterval(window.timerId);
    document.getElementById('startButton').disabled = false;
    document.getElementById('stopButton').disabled = true;
}
*/









</script>

<!--<p id="counter">0</p>
<br>
<input type="submit" value="start" onclick="go()" id="startButton">
<input type="submit" value="stop" onclick="stop()" id="stopButton">
-->


<!--<h1 id="timenow"></h1>





<script>


    window.setInterval(timer, 1000)

    function timer() {
        var now = new Date();
        document.getElementById('timenow').innerHTML = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
    }

</script>
-->



<!--<script>
    timerId = window.setInterval(timer, 1000);

    function timer(){
        document.getElementById('counter').innerHTML = Number(document.getElementById('counter').innerHTML) - 1;

        if( document.getElementById('counter').innerHTML == 0){
            window.clearInterval(window.timerId);
            alert("Каюк");
        }
    }



</script>



<p id="counter">10</p>
-->





<!--
<img src="smiles/1.png" id="smiles">

<script>
    timerId = window.setInterval(timer, 1000);

    window.n = 2;

    function timer(){

        document.getElementById('smiles').src = "smiles/" + n +".png";

        window.n ++;

        if( window.n == 4){
            window.n = 1
        }
    }

</script>
-->


<!--

<img src="smiles/1.png" id="smile1"> <img src="smiles/2.png" id="smile2"> <img src="smiles/3.png" id="smile3">

<script>
    timerId = window.setInterval(timer, 1000);



    function timer(){

        var i1 = document.getElementById('smile1').src;

        document.getElementById('smile1').src = document.getElementById('smile2').src;

        document.getElementById('smile2').src = document.getElementById('smile3').src;

        document.getElementById('smile3').src = i1;


    }

</script>
-->



<!--
<a href="" id="link" onclick="test();  return false;">клик</a>
<a href="" id="link" onclick="return test(); ">клик</a>
-->
<!--
<a href="" id="link" >клик</a>
<script>
    document.getElementById('link').onclick = test;
    document.getElementById('link').onclick = test1;
    function test(){

        alert('!');
        return false;

    }
    function test1(){

        alert('!!');
        return false;
    }

     function total(){

       test();
       test1();
    }

</script>
-->

<!--<a href="" id="link" >клик</a>
<script>
    document.getElementById('link').addEventListener('click', test);//attachEvent
    document.getElementById('link').addEventListener('click', test1);

    function test(){

        alert('!');
        document.getElementById('link').removeEventListener('click', test1);
        return false;

    }
    function test1(){

        alert('!!');
        return false;
    }

</script>-->



<!--

Привязать ссылке с определенным id функцию, которая выдает алерт анкора ссылки или содержимое атрибута title.

Сделать кнопку, которая удаляет обработчик события со ссылки.

-->


<a href="#" title="hello">клик</a>
<a href="#" title="hello">отвяз</a>
<a href="#" data-name="" id="link2" title="hello" class="" style="" align="">rerererer</a>

<script>


   // document.getElementsByTagName('a').addEventListener('click', test);
    elements = document.getElementsByTagName('a');

    for (var i = 0; i < elements.length; i++){
       elements[i].addEventListener('click', test);
    }

   function test(){

       alert(this.innerHTML);//innerHTML outerHTML innerText outerText, elem.value

       return false;
   }



   document.getElementById('link2').addEventListener('click', crash);


    function crash(){
        //document.getElementById('link').removeEventListener('click', test);
        elements = document.getElementsByTagName('a');

        for (var i = 0; i < elements.length; i++){
            elements[i].removeEventListener('click', test);
        }

        return false;
    }




</script>



