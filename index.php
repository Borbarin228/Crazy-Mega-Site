<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazy Site</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="form.css">

</head>
<body>


<!--подключение хэдэра-->
    <?php require "header.php"?>
    <?php require "form.php"?>

    
<!--индекс-->
    <main>

<!--лицевая часть-->
<div>
<div class="face">
    <img src="assets/main1.png" alt="" id = "main1">
    <img src="assets/main2.png" alt="" id = "main2">
    <img src="assets/main3.png" alt="" id = "main3">
    
</div>
    <img src="assets/background_part.png" alt="" id="bPart">
</div>
<!--творчество-->  
<div class = "art" id = "art">

    <p class = "artHead">ТВОРЧЕСТВО</p>

    <div class = "albomes">

        <div class = "groupAlbomes">
            <button class = "payday"></button>
            <div class = "ratingPanel">
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingP">
                <span class = "bad"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingP">
                <span class = "good"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingP">
                <span class = "perfect"></span>
            </label>
            </div>

            <button class = "moodblood"></button>
            <div class = "ratingPanel">
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingM">
                <span class = "bad"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingM">
                <span class = "good"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingM">
                <span class = "perfect"></span>
            </label>
            </div>
>
        </div>

        <div class = "groupAlbomes">
            <button class = "antiwrld"></button>

            <div class = "ratingPanel">
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingA">
                <span class = "bad"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingA">
                <span class = "good"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingA">
                <span class = "perfect"></span>
            </label>
            </div>

            <button class = "raw"></button>
            <div class = "ratingPanel">
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingR">
                <span class = "bad"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingR">
                <span class = "good"></span>
            </label>
            <label class = "label" >
                <input type="radio" class = "radio" name = "ratingR">
                <span class = "perfect"></span>
            </label>
            </div>
        </div>

    </div>

    <div class = "urls">
        <button class = "vkmsc"></button>
        <button class = "applemsc"></button>
        <button class = "youtubemsc"></button>
        <button class = "yandexmsc"></button>
        <button class = "sendbtn" >ОТПРАВИТЬ ОЦЕНКУ</button>
    </div>

</div>
<img src="assets/slider.gif" class="slider">
<!--список концертов-->
<div class="concerts">
    <div class="cncrtHead" id = "concert">
        <p>КОНЦЕРТЫ</p>
    </div>
<div class = "lists">
<div class = "cityList1">
<a href="">17.04 САМАРА</a>
<a href="">19.04 САРАТОВ</a>
<a href="">20.04 ВОЛГОГРАД</a>
<a href="">21.04 КРАСНОДАР</a>
<a href="">22.04 РОСТОВ</a>
<a href="">23.04 ВОРОНЕЖ</a>
<a href="">24.04 МИНСК</a>
<a href="">28.04 ХАРЬКОВ</a>
<a href="">29.04 КИЕВ</a>
<a href="">1.05 ВАРШАВА</a>
<a href="">3.05 ПРАГА</a>
<a href="">4.05 РИГА</a>
<a href="">5.05 ТАЛЛИН</a>
<a href="">8.05 МОСКВА</a>
<a href="">14.05 САНКТ-ПЕТЕРБУРГ</a>
<a href="">21.05 КАЛИНИНГРАД</a>
</div>

<div class = "cityList1">
<a href="">17.04 САМАРА</a>
<a href="">19.04 САРАТОВ</a>
<a href="">20.04 ВОЛГОГРАД</a>
<a href="">21.04 КРАСНОДАР</a>
<a href="">22.04 РОСТОВ</a>
<a href="">23.04 ВОРОНЕЖ</a>
<a href="">24.04 МИНСК</a>
<a href="">28.04 ХАРЬКОВ</a>
<a href="">29.04 КИЕВ</a>
<a href="">1.05 ВАРШАВА</a>
<a href="">3.05 ПРАГА</a>
<a href="">4.05 РИГА</a>
<a href="">5.05 ТАЛЛИН</a>
<a href="">8.05 МОСКВА</a>
<a href="">14.05 САНКТ-ПЕТЕРБУРГ</a>
<a href="">21.05 КАЛИНИНГРАД</a>
</div>
</div>
<button class="ticket_button">ПРИОБРЕСТИ БИЛЕТЫ</button>
</div>
<img src="assets/slider.gif" class="slider" id="s1">
<div>

</div>

</div>

<!--мерч-->


<div class = "mrchMain">

<div class = "mrchPage">
    <p class =  "mrchHead" id = "merch">МЕРЧ</p>
    <div class = "mrchRow">

    
        <div class="mrch mrch1"></div>
        
    
        <div class="mrch mrch2"></div>
    
        
            <div class = "urlMrch"> 
                <p class="mrchTxt more">БОЛЬШЕ </p>
                <p class="mrchTxt">ТОВАРОВ</p>
                <button class = "urlButton"></button>
    
            </div>
    </div>
</div>

</div>


    </main>

<!--подключение футера-->
    <?php require "footer.php"?>
    









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "index.js"></script>
</body>
</html>