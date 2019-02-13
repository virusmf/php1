<?php
session_start();
if (isset($_SESSION)){
    if (сheckPassword($_SESSION['login'],$_SESSION['pass'])){
        echo 'Вы авторизованны как ' . $_SESSION['login'];
    } else {
        echo 'Авторизуйтесь';
    }
}