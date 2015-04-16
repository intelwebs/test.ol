<?php
error_reporting(E_ALL);
session_start();
$pass = '827ccb0eea8a706c4c34a16891f84e7b';

if(isset($_REQUEST['send'])){
    if(!empty($_REQUEST['password']) && md5($_REQUEST['password']) == $pass){
       $_SESSION['auth'] = true;
    }else{
       $_SESSION['auth'] = false;
    }
}

var_dump($_SESSION['auth']);
?>


<form method="POST">
<input type="password" name="password"><input type="submit" name="send" value="go">
</form>