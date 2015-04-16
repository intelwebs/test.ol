<?php
error_reporting(E_ALL);

mysql_connect('localhost', 'root', '');
mysql_select_db('notebook');
mysql_query("SET NAMES 'utf8'");


$sql = "SELECT * FROM notes";
$res = mysql_query($sql) or die(mysql_error());

if (false === $res) {
    return false;
}
$notes = [];
while ($row = mysql_fetch_assoc($res)) {
    $notes[] = $row;
}

foreach($notes as $note){
    echo "<a href='test3.php?id={$note['id']}'>{$note['title']}</a><br>";
}

