<html>
<head>
    <title>Форма добавления</title>
</head>


<body>
<?php
error_reporting(E_ALL);
    mysql_connect('localhost', 'root', '');
    mysql_select_db('notebook');
    mysql_query("SET NAMES 'utf8'");


    function addNote()
    {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO notes SET title = '$title', content = '$content'";
        echo $sql;
        mysql_query($sql) or die(mysql_error());
    }

?>



<?php

if(!empty($_REQUEST)){
    $err = false;
    if(empty($_REQUEST['title'])){
        echo 'Не указан заголовок';
        $err = true;
    }
    if(empty($_REQUEST['content'])){
        echo 'Нет содержания!';
        $err = true;
    }
    if($err == false){
        addNote();
        echo "ok";
    }
}else{
?>
    <form method="post">
    Заголовок: <input type="" name="title" value=""><br>
    Содержание:<br>
    <textarea name="content"></textarea><br><br>
    <input type="submit" name="save" value="ok">
    </form>
<?php
}

?>
</body>
</html>