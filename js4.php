<meta charset="UTF-8">



<!-- Тема: https://learn.javascript.ru/metrics-window -->



<script>
    function clHeight(){
        alert(document.documentElement.clientHeight);
    }

    function fullHeight(){
        alert(window.innerHeight);
    }

    function yOff() {

        alert('Текущая прокрутка сверху: ' + window.pageYOffset);
    }

    function xOff() {
        alert('Текущая прокрутка слева: ' + window.pageXOffset);
    }

    function crossBr(){
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        alert( "Текущая прокрутка: " + scrollTop );
    }

    function scrollX30(){
        window.scrollBy(30,0);
    }
    function scrollY30(){
        window.scrollBy(0,30);
    }


</script>



<button onclick="clHeight()">clientHeight</button>
<button onclick="fullHeight()">innerHeight</button>
<button onclick="yOff()">yOffset</button>
<button onclick="xOff()">xOffset</button>
<button onclick="crossBr()">кроссбраузерно</button>
<button onclick="scrollX30()">прокрутка X - 30</button>
<button onclick="scrollY30()">прокрутка Y - 30</button>

<div style="width: 300px; height: 2500px; border:#ccc solid 10px;">bla-bla-bla</div>





