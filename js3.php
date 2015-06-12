<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Курс Javascript - Трепачев Дмитрий, phphtml.com </title>
    <style>

        .border{
            border: 10px solid blue;
        }

        #test{
            width: 200px;
            height: 300px;
            overflow: hidden;
            padding: 60px;
            margin-left: 100px;
            text-align: justify;
        }

        button{margin-top: 20px;}

        *{
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
    </style>





    <script>

        function test01(){
            document.getElementById('test').style.overflow = 'auto';
        }
        function test02(){
            document.getElementById('test').style.overflow = '';
        }

        function test1(){
            alert(document.getElementById('test').style.width);
        }

        function test2(){
            alert(document.getElementById('test').offsetWidth);
        }

        function test3(){
            alert(document.getElementById('test').clientWidth);
        }

        function test4(){
            alert(document.getElementById('test').scrollWidth);
        }
        function test10(){
            alert(document.getElementById('test').offsetWidth);
        }
        function test11(){
            alert(document.getElementById('test').clientTop);
        }
        function test12(){
            alert(document.getElementById('test').clientLeft);
        }


        function test5(){
            document.getElementById('test').style.width = document.getElementById('test').scrollWidth + 'px';
        }

    </script>
</head>
<body>


<button onclick="test01()">Включить полосу прокрутки (overflow: auto)</button>

<button onclick="test02()">Отключить полосу прокрутки (overflow: hidden)</button>
<br>
<button onclick="test1()">Посмотреть ширину в CSS</button>
<button onclick="test2()">Посмотреть ширину через getComputedStyle</button>
<button onclick="test3()">Посмотреть ширину через clientWidth</button>
<button onclick="test4()">Посмотреть ширину через scrollWidth</button>
<button onclick="test10()">Посмотреть ширину через offsetWidth</button>

<br>

<button onclick="test11()">Посмотреть clientTop</button>
<button onclick="test12()">Посмотреть c clientLeft</button>

<br>

<button onclick="test5()">Распахнуть на реальную ширину</button>
<button onclick="test6()">Распахнуть на реальную высоту</button>

<br>

<button onclick="test7()">Посмотреть scrollTop</button>
<button onclick="test8()">Посмотреть scrollLeft</button>

<button onclick="test9()">Прокрутить вниз на 400px от текущего положения</button>

<br>

<button onclick="test13()">Посмотреть offsetLeft</button>
<button onclick="test14()">Посмотреть offsetTop</button>



<br>



<br><br><br>
<div id="test" class="border">


    Loremipsumdolorsitamet,consecteturadipiscingelit.

    Sed viverra mollis lorem, fringilla dapibus nisi commodo interdum. Vivamus in turpis quis purus dapibus aliquam id nec velit. In at aliquet sem, a rutrum neque. Vestibulum posuere lobortis accumsan. Etiam non tincidunt erat, vel condimentum turpis. Maecenas magna velit, hendrerit non commodo id, sagittis ut nisi. Etiam ex sapien, iaculis nec eros non, venenatis porttitor eros. Phasellus imperdiet interdum congue. Nam tempor justo id vestibulum imperdiet. Donec mauris ipsum, accumsan non ultrices vitae, egestas nec lorem. Suspendisse convallis, diam sed fermentum rutrum, mauris libero tristique ante, vitae pharetra eros urna non velit. Phasellus tortor purus, vehicula et ex in, sagittis rhoncus sapien.

    Nullam et enim massa. Aenean dictum sapien velit, sed luctus massa euismod pharetra. Cras ut rhoncus nisl. Aenean dapibus hendrerit ex, a consequat mi blandit at. Phasellus massa ipsum, vulputate in nibh ac, ultricies laoreet dolor. Integer tellus sapien, pulvinar sed pharetra ac, cursus cursus tellus. Morbi porta sed augue nec faucibus. Ut congue quis tortor et tempor.

    Etiam vitae ipsum et tellus sollicitudin suscipit non at ante. Suspendisse commodo viverra diam sed efficitur. Maecenas porta sollicitudin lorem ut faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque luctus purus non augue tincidunt vulputate. Nullam egestas sit amet tellus auctor finibus. In laoreet leo varius ex tempor lacinia. Donec scelerisque dictum leo, ac sollicitudin massa tempus nec. Donec aliquet eros eget quam semper aliquam. Fusce vel tempor urna. Vestibulum malesuada vitae risus quis vestibulum. Maecenas diam turpis, ultrices at malesuada nec, maximus sed augue. Nulla ut eleifend urna, in ultrices tortor. Aliquam erat volutpat. Sed mattis urna a volutpat tempor.

    Integer placerat porta velit at aliquam. Sed faucibus turpis eros. Mauris imperdiet vitae urna vel viverra. Maecenas id massa neque. Aenean malesuada vehicula lacinia. In pharetra rutrum dignissim. Nunc semper in justo eu ultrices. Sed leo libero, vestibulum id arcu et, iaculis ultricies sapien. Sed tempus eget ipsum finibus feugiat. Maecenas semper porta magna. Integer posuere lobortis aliquet. Sed nec lectus purus.

    Quisque aliquam mollis turpis, in dapibus eros elementum ac. Curabitur ultricies odio sit amet dolor placerat dignissim. Aliquam tortor ipsum, auctor ac iaculis vel, hendrerit nec tellus. Donec faucibus arcu in enim pharetra vestibulum. Sed id metus sit amet tortor egestas vulputate vel nec enim. Vestibulum condimentum varius nibh vitae accumsan. Nunc sem dui, varius ut orci quis, tempor euismod enim. Nullam maximus ex et arcu rhoncus facilisis. Donec ac orci vel magna gravida lobortis et ut odio. Pellentesque egestas, massa eget fermentum suscipit, nisi lacus malesuada justo, ut malesuada justo metus quis velit. Sed dictum, dui sed sollicitudin vulputate, leo felis eleifend felis, ut consequat libero dolor eget arcu. Ut porttitor leo et cursus placerat. Vestibulum auctor quam id augue pretium, sed tempor ligula tempor. Duis lacus urna, tincidunt vel nunc vel, congue pellentesque felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</div>




</body>
</html>