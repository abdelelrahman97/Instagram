<?php
session_start();
session_unset('id');
session_destroy();
header('Location:account_signup.php');
/*Yukarıdaki kod satırları mevcut bulunan oturumların silinmesini sağlıyor.*/
?>
