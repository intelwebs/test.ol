<?php
error_reporting(E_ALL);
mysql_connect('localhost', 'root', '');
mysql_select_db('notebook');
mysql_query("SET NAMES 'utf8'");


$id = $_GET['id'];

$sql = "SELECT * FROM notes WHERE id = '$id'";
$res = mysql_query($sql) or die(mysql_error());

$note = mysql_fetch_assoc($res);

if(!empty($note)){
    echo $note['title'].'<br>';
    echo $note['content'];
}else{
    echo "Нет записей с заданным id.";
}
