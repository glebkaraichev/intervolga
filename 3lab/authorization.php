<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require_once 'header.php' ?>
<div class="d-flex align-items-center container justify-content-center auth">
    <h1> Авторизация </h1>
</div>
<form method="POST" action="login.php">
    <div class="container d-flex align-items-center justify-content-center labels">
        <div class="mb-3 w-50">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password1" class="form-control" id="exampleInputPassword1">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <?php if (isset($_SESSION['message']))
                echo $_SESSION['message'];
            unset($_SESSION['message']); ?>
            <br>
            <button type="submit" name="submit" class="btn btn-primary btn-login">Submit</button>
            <p>
                 Нету аккаунта - <a href="/LR3/registration.php"
                                          class="text-success fw-bold text-decoration-none">Зарегистрируйтесь</a>
            </p>
        </div>
    </div>
</form>

</body>
</html>>
