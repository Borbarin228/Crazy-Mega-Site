<?php
if ($_POST["password"] !== ""){
    require_once "bdConnect.php";
    $sth = $db->prepare("INSERT INTO crazy.usr (username, password) VALUES(:usrname,:password)");
    echo("true");
    if($sth->execute([':usrname' => $_POST['login'], ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)])){
        $_SESSION['login'] = $_POST['login'];
        header('Location: http://crazy-mega-site');
        exit();
    }
    else{
        echo("false");
    }
}
?>