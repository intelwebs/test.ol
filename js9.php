<meta charset="UTF-8">

<script>




    var questionsSection = {
        "1": {"Сколько дней в году?": "365", "Как зовут Крокодила?": "Гена"},
        "2": {"Как вас зовут?" : "Ольга", "В каком городе вы живете" : "Санкт-Петербург" },
        "3": {"По Дарвину, кто предок человека?" : "Обезьяна", "Что такое Мон Блан?" : "Гора" }
    };

    function getSection(){

        var elems = document.querySelectorAll('input[type="checkbox"]');

        var questions = [];

        for(i=0; i<elems.length; i++){

            if(elems[i].checked == true ){
                questions[i] = questionsSection[elems[i].value];
            }

        }
        var result = {};
        for(var i = 0; i< questions.length; i++){

            var tmp = questions[i];
            for(var key in tmp){

                result[key]=tmp[key];
            }
        }

        console.log(result);

        document.getElementById('question').innerHTML = result;
    }


</script>

<input type="checkbox" value="1"> Секция 1<br>
<input type="checkbox" value="2"> Секция 2<br>
<input type="checkbox" value="3"> Секция 3<br>
<input type="submit" value="Запустить" onclick="getSection()">



<p>Вопрос: <span id="question"></span></p><br>

<p>Ответ: <input type="text" ></p>
<input type="submit" value="next">