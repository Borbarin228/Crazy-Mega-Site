<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РЕГИСТРАЦИЯ</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
<?php require "header.php"?>


<div class = "container">
<img src="" alt="">
<div class = "content">
    <p><b>РЕГИСТРАЦИЯ</b></p>
    <form method ="POST" action="reg.php" class = "form">
        <input class="box" type="text" name="login" id="login" placeholder="Логин" require>
        <input class="box" type="password" name="password" id="password" placeholder="Пароль" require>
        <button type = "submit" class = "regbtn">ОТПРАВИТЬ</button>
    </form>

</div>
<img src="" alt="">
</div>

<?php require "footer.php"?>
</body>
</html>