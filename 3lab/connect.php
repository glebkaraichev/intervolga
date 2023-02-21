<?php
$host = 'localhost';
$db = 'jewelry';
$user = 'root';
$password = '';
$charset = 'utf8'; // дб, пользователь пароль, хост для подключения к базе данных

$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // передаёшь данные для подключения к базе данных
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // настройка для исключений
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn, $user, $password, $options); // создаёшь экземпляр пдо (пдо-драйвер для подключения к базе данных)
