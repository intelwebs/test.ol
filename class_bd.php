<?php

class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'level2_news';

    public function __construct($host, $user, $password, $database)
    {
        $host = $this->host;
        $user = $this->user;
        $password = $this->password;
        $database = $this->database;

        mysql_connect($host, $user, $password);
        mysql_select_db($database);
        mysql_query("SET NAMES 'utf8'");
    }
}




class Query extends DB{
    // Входящий массив: $data = array('name'=>'Гена', 'age'=>30, 'salary'=>1000);

    public function save($table, $data){
        $keys = array_keys($data);
        $values = array_values($data);
        $field = '`'.implode('`, `', $keys).'`';
        $value = "'".implode("', '", $values)."'";

        $query = "INSERT INTO $table ($field) VALUES ($value)";
        mysql_query($query);
        return true;
    }

    public function del($table, $id){
        $query = "DELETE FROM $table WHERE id = '$id' ";
        mysql_query($query);
        return true;

    }

    public function update($table, $data, $id){
        foreach($data as $key => $value){
            $values .= "`".$key."` = '".$value."', ";
        }
        $values = $str = substr($values, 0, -2); // отрезаем запятую с пробелом
        $query = "UPDATE $table SET $values WHERE id = '$id'";
        mysql_query($query);
        return true;
    }

    public function select($table, $data, $val, $field = 'id', $order = 'DESC'){
        $values = array_values($data);
        $value = implode(", ", $values);
        $query = "SELECT $value FROM $table WHERE $field = $val ORDER BY $order";

        $res = mysql_query($query);

        $array = [];

        while ($row = mysql_fetch_assoc($res)) {
            $array[] = $row;
        }
        return $array;
    }
}




/* ПРОВЕРКА РАБОТЫ

$query = new Query;

$data = array('name'=>'Гена', 'age'=>30, 'salary'=>1000);
$res = $query->update('news', $data); // получаю $query массив с результатом
print_r($res);

*/




/* ПРОВЕРКА INSERT
$data = array('name'=>'Гена', 'age'=>30, 'salary'=>1000);
$a = new DB;
$a->save('news', $data);
*/

/* ПРОВЕРКА UPDATE
$data = array('name'=>'Гена', 'age'=>30, 'salary'=>1000);
$a = new DB;
$a->update('news', $data);
*/

/* ПРОВЕРКА SELECT
$data = array('Гена', 30, 1000);
$a = new DB;
$a->select('news', $data, 1);
*/
