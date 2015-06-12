<style>

    .red{
        color: #ff0000;
    }

    .border{
        border:1px solid #1B3039;
    }
    .font{
        font-size: 21px;
    }
</style>



<input type="submit" value="all class" onclick="allClass()" />
<input type="submit" value="add .font" onclick="addClass()" />
<input type="submit" value="remove .red" onclick="delRed()" />
<input type="submit" value="check .red" onclick="checkRed()" />
<input type="submit" value="add remove .border" onclick="arBorder()" />

<div class="border red" id="mydiv">

   <p>Hello, I'm here!</p>

</div>





<script>

    function allClass(){

        alert(document.getElementById('mydiv').className);
    }

    function addClass(){

        document.getElementById('mydiv').classList.add('font');

    }

    function delRed(){

        document.getElementById('mydiv').classList.remove('red');

    }

    function checkRed(){

        alert(document.getElementById('mydiv').classList.contains('red'));

    }

    function arBorder(){

        document.getElementById('mydiv').classList.toggle('border');

    }




    alert(getComputedStyle(document.body).width);


</script>