<meta charset="UTF-8">

<input type="text" onkeyup="codeFunc(event)">
<p onmouseup="selectFunc()">Bla-bla-bla. It's text free of charge.</p>

<script>

    function codeFunc(event){
        alert('Код нажатой клавиши: '+event.which + ' Клавиша: ' + String.fromCharCode(event.which));
    }

    function selectFunc(){
        var txt = window.getSelection().toString();
        alert(txt);
    }




</script>