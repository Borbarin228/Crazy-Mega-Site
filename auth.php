<?php
require_once "bdConnect.php";
$sth = $db->query("SELECT password, username FROM crazy.usr WHERE username = " . $db->quote($_POST['login']));
$data = $sth->fetch();
if($data){
    if ($data[0]){
        if (password_verify($_POST["password"], $data[0])){
            $_SESSION['login'] =  $_POST['login'];
            $_SESSION['message'] = 'Вы успешно вошли!';
            header("location: http://crazy-mega-site");
            exit();
        } else {
            $_SESSION['message'] = "Неправильный пароль!";
            header('location: http://crazy-mega-site/form.php');
            exit();
        }
    }
}
else{
    $_SESSION['message'] = "Имени пользователя не существует!";
    header('Location: http://crazy-mega-site/register.php');
    exit();
}
?>