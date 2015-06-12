<meta charset="UTF-8">



<input type="text" id="result" onkeypress="codeF(event)">


<br><br>

<input type="submit" value="1" class="but"> <input type="submit" value="2" class="but"> <input type="submit" value="3" class="but"><br>
<input type="submit" value="4" class="but"> <input type="submit" value="5" class="but"> <input type="submit" value="6" class="but"><br>
<input type="submit" value="7" class="but"> <input type="submit" value="8" class="but"> <input type="submit" value="9" class="but"><br>
<input type="submit" value="+" class="but"> <input type="submit" value="-" class="but"> <input type="submit" value="=" onclick="calc()"><br>

<script>


    var elems = document.getElementsByClassName('but');

    for (i=0; i<elems.length; i++){

        elems[i].addEventListener('click', vals);
    }



    function vals(){

        var val = this.value;

        document.getElementById('result').value += val;


    }

    function calc(){

        var str = document.getElementById('result').value;

        document.getElementById('result').value = eval(str);


    }


    function codeF(event){
       // alert('!');
       // alert(event.which);
       if(event.which == 13){
            calc();
        }

    }







</script>