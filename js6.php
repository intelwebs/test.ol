<!--https://learn.javascript.ru/obtaining-event-object-->

<script>


    window.addEventListener('click', test);

    function test(event){

        var x = event.clientX;
        var y = event.clientY;


        var objWidth =  document.getElementById('coord').offsetWidth / 2;
        var objHeight =  document.getElementById('coord').offsetHeight / 2;

        document.getElementById('coord').style.left = x - objWidth;
        document.getElementById('coord').style.top = y - objHeight;
    }


</script>

<div id="coord" onmousemove="test(event)" style="position: absolute; width: 200px; height: 200px; border:#333 solid 2px;">
    ку-ку

</div>