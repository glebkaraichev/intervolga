<?php
session_start();
require_once 'connect.php';


$email1 = isset($_POST["email1"]) ? trim($_POST["email1"]) : '';
$password1 = isset($_POST["password1"]) ? $_POST["password1"] : '';
$full_name = isset($_POST["full_name"]) ? trim($_POST["full_name"]) : '';
$birthday_date = isset($_POST["birthday_date"]) ? trim($_POST["birthday_date"]) : '';
$address = isset($_POST["address"]) ? trim($_POST["address"]) : '';
$sex = isset($_POST["sex"]) ? trim($_POST["sex"]) : '';
$interests = isset($_POST["interests"]) ? trim($_POST["interests"]) : '';
$vklink = isset($_POST["vklink"]) ? trim($_POST["vklink"]) : '';
$blood_type = isset($_POST["blood_type"]) ? trim($_POST["blood_type"]) : '';
$rh_factor = isset($_POST["rh_factor"]) ? trim($_POST["rh_factor"]) : ''; // определяем переменные пост запросом обрезая пробелы , выше тоже самое;)


if (isset($_POST['submit'])) { // если нажата кнопка с ключём submit
    $err = array(); // пока что пустой массив с ошибками


    // проверям логин
    if (!preg_match("/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])(?=.*[\s])(?=.*[_])(?=.*[-])[0-9a-zA-Z!@#$%^&*\s_-]{6,}$/U", $password1)) { // регулярное выражение для проверки пароля должен содержать спец символы большую лат букву маленькие лат буквы пробел , кириллица запрещена
        array_push($err, "Пароль не может быть такого формата"); // если пароль не проходит проверку по регулярке выводим ошибку об этом
        $_SESSION['message'] = implode('', $err); // превращаем массив с ошибками в строку
        header("Location: registration.php"); // оставляем пользователя на странице с регистрацией

    } elseif (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {// проверка email при помощи встроенной функции php
        array_push($err, "Email не может быть такого формата ");
        $_SESSION['message'] = implode('', $err);
        header("Location: registration.php");


    } else {
        $password_conf = $_POST["password_conf"]; // помещаем в переменную $password_conf инпут с ключем password_conf


        if ($password1 === $password_conf) {
            $password1 = md5($password1); // если пароль и подтверждение пароля совпадают то хешируем пароль


        } else {

            array_push($err, "Пароли не совпадают");
            $_SESSION['message'] = implode('', $err);
            header("Location: registration.php");
        }
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email1 =:email1"); // достаем столбец email из таблицы пользователей чтобы в дальнейшем проверить есть ли такой пользователь в таблице или нет
        $stmt->bindValue('email1', $email1, PDO::PARAM_STR);
        $stmt->execute();
        $check_user = $stmt->fetchAll();
        if(count($check_user) > 0) {
            array_push($err, "Пользователь с таким логином уже существует в базе данных");
            $_SESSION['message'] = implode('', $err);
            header("Location: registration.php"); // если такой пользователь существует выводим ошибку

        }


        if (count($err) == 0) {

            $stmt = $pdo->prepare("INSERT INTO users(email1, password1, full_name, birthday_date, address, sex, interests, vklink, blood_type, rh_factor) VALUES(:email1, :password1, :full_name, :birthday_date, :address, :sex, :interests, :vklink, :blood_type, :rh_factor)");
            $stmt->bindValue('email1', $email1, PDO::PARAM_STR);
            $stmt->bindValue('password1', $password1, PDO::PARAM_STR);
            $stmt->bindValue('full_name', $full_name, PDO::PARAM_STR);
            $stmt->bindValue('birthday_date', $birthday_date, PDO::PARAM_STR);
            $stmt->bindValue('address', $address, PDO::PARAM_STR);
            $stmt->bindValue('sex', $sex, PDO::PARAM_STR);
            $stmt->bindValue('interests', $interests, PDO::PARAM_STR);
            $stmt->bindValue('vklink', $vklink, PDO::PARAM_STR);
            $stmt->bindValue('blood_type', $blood_type, PDO::PARAM_STR);
            $stmt->bindValue('rh_factor', $rh_factor, PDO::PARAM_STR);
            $stmt->execute();
            $_SESSION['message'] = "Регистрация прошла успешно";
            header("Location: authorization.php"); // если ошибок допущенных при регистрации не оказалось то делаем запрос на добавление нового пользователя в таблицу при этом сделав защиту от sql инъекций
        }


    }

}

if (isset($_SESSION['message'])) print_r($_SESSION['message']); // строчка чтобы сообщения об ошибках выводились;)




