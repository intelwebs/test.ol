<!--https://learn.javascript.ru/obtaining-event-object-->

<script>


    window.addEventListener('mousemove', test);

    function test(event){

        event = event || window.event;

        document.getElementById('coord').innerHTML = 'X:'+event.clientX+' Y:'+event.clientY;

    }


</script>

<div id="coord" onmousemove="test(event)">

</div>