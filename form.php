<?
session_start();
setcookie("project_name", $_POST['project_name'], time()+1000,"/");
setcookie("description", $_POST['description'], time()+1000,"/");
setcookie("average_rating", $_POST['average_rating'], time()+1000,"/");
setcookie("url_read", $_POST['url_read'], time()+1000,"/");
?>

<div class = "modal ">

<div class = "form">

    <button class = "formClose"><img src="assets/close.png" alt=""></button>
    <div >
      
        <form method ="POST" action="auth.php" class = "content">
        <p><b>ВХОД</b></p>
          <input class="box" type="text" name="login" id="login" placeholder="Логин" require value = "<?if(isset($_COOKIE['login']) && '' !== $_COOKIE['login']) echo $_COOKIE['login']?>">
          <input class="box" type="password" name="password" id="password" placeholder="Пароль" require value = "<?if(isset($_COOKIE['password']) && '' !== $_COOKIE['password']) echo $_COOKIE['pasword']?>">

          <button class = "enteryBtn">ВОЙТИ</button>
          <a href="register.php">РЕГИСТРАЦИЯ</a>
        </form>
    </div>

</div>

</div>