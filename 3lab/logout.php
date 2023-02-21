<?php
session_start();
unset($_SESSION['email1']); // выходим из сессии
header("Location: authorization.php"); // переадресовываем на страничку с авторизацией