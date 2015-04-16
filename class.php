<?php

class Power{
    public function upSecond($num){
        $result = $num * $num;
        return $result;
    }

    public function upThird($num){
        $result = $num * $num * $num;
        return $result;
    }

    public function upFour($num){
        $result = $num * $num * $num * $num;
        return $result;
    }
}


class Cookie{
    function set($cookie, $value, $sec = 3600){
        $res = setcookie($cookie, $value, time() + $sec, '/');
        return $res;
    }

    function get($cookie){
        return $_COOKIE[$cookie];
    }

    function del($cookie){
        $res = setcookie($cookie, '', time(), '/');
        return $res;
    }

}

class Protector{
    public $request;
    public $post;
    public $get;

    public function __construct (){
        if(!empty($_REQUEST)) {
            $this->request = $this->protect($_REQUEST);
        }else{
            $this->request = [];
        }
    }

    private function delGaps($str){
        return trim($str);
    }
    private function delTags($str){
        return strip_tags($str);
    }
    public function protect($arr){
        /* Вариант 1
        $array = [];
        foreach($arr as $item){
            $item = $this->delGaps($item);
            $item = $this->delTags($item);
            $array[] = $item;
        }
		return $array;
        */

        // array_walk_recursive($array, array($this,$function)); - для многомерных массивов

        $array = array_map(array($this, 'delGaps'), $arr);
        $array = array_map(array($this, 'delTags'), $array);
        return $array;

    }
}

class Session{
    public function __construct(){
        session_start();
    }

    public function save($name, $value){
        return $_SESSION[$name] = $value;
    }

    public function get($name){
        return $_SESSION[$name];
    }

    public function del(){
        session_destroy();
    }
}
