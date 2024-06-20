
<?php
session_start();

if($_SESSION['login'] !== '' ){

require_once "bdConnect.php";
$uid = $db->query("SELECT usr_id FROM crazy.usr WHERE username = " . $db->quote($_SESSION['login']));
$data = $uid->fetch();
$sth = $db->prepare("INSERT INTO crazy.raiting(usrid, albomid, raitingnum) VALUES(:usrid,:albomid,:raitingnum)");
if ($_POST["ratingP"] !== "" ){
    
    ($sth->execute([':usrid' => $data[0], ':albomid' => 1, ':raitingnum'=>$_POST["ratingP"]]));

}


if ($_POST["ratingM"] !== "" ){

    ($sth->execute([':usrid' => $data[0], ':albomid' => 2, ':raitingnum'=>$_POST["ratingM"]]));

}

if ($_POST["ratingA"] !== ""  ){

    ($sth->execute([':usrid' => $data[0], ':albomid' => 3, ':raitingnum'=>$_POST["ratingA"]]));

}

if ($_POST["ratingR"] !== ""){

    ($sth->execute([':usrid' => $data[0], ':albomid' => 4, ':raitingnum'=>$_POST["ratingR"]]));

}
}
header('Location: http://crazy-mega-site');
exit();
?>

