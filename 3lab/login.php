<?php
session_start();
require_once 'connect.php'; // подключаем файл с конфигурацией базы данных


$email1 = isset($_POST["email1"]) ? trim($_POST["email1"]) : ''; // определяем переменную email пост запросом, обрезая пробелы

$password1 = md5($_POST["password1"]); // хешируем пароль пост запросом

if (isset($_POST['submit'])) { // если нажата кнопка с ключём отправить

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email1= :email1 AND password1= :password1"); // выбираем из таблицы пользователи поля имейл и пароль
    $stmt->bindValue('email1', $email1, PDO::PARAM_STR); // делаем защиту от sql инъекций
    $stmt->bindValue('password1', $password1, PDO::PARAM_STR);// делаем защиту от sql инъекций
    $stmt->execute(); // выполняем запрос
    $users = $stmt->fetchAll(); // возвращает число записей в виде упорядоченного списка

    if (!empty($users)) {
        $check_user = $users[0];
        $_SESSION['email1'] = $check_user['email1'];
        header("Location: curling_irons.php"); // если пользователь найден в таблице то открываем доступ к фильтрации(2 лаба)

    } else {
        $_SESSION['message'] = "Неверный логин или пароль";
        header("Location: authorization.php");
        echo 'Не верный логин или пароль'; // иначе выводим сообщение об ошибке


    }
}



