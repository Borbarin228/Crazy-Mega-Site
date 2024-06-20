<?session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class = "head">

<div class = "container">
    <div class = "header_txt">
        <a href="#art">ТВОРЧЕСТВО</a>
        <a href="#concert">КУПИТЬ БИЛЕТЫ</a>
        <a href="#merch">МЕРЧ</a>
        
    </div>
    <?if($_SESSION["login"]!==""){?>
    <div class = "header_img">
       
    <p class = "usrname">ПРОФИЛЬ: <?php echo( $_SESSION['login'])?></p>
        <form action="exit.php">
    <button  class="exitButton"></button>
    </form>
</div>
    <?}else{?>
    <div class = "header_img">
           <button class="regButton" id = "reg"></button>
       </div>
    <?}?>
</div>

</header>
</body>
</html>