<?php session_start() ?>


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
    <h1> Регистрация </h1>
</div>
<form action="signup.php" id="form" method="POST">
    <div class="container  w-50">
        <div class="row">
            <div class="col-12 mt-2 form-check">
                <label for="exampleInputEmail1" class="form-label">login</label>
                <input type="text" name="email1" class="form-control" placeholder="Enter your email / login"
                       id="exampleInputEmail1"
                       value="<?php if (isset($_POST['email1'])) echo htmlspecialchars($_POST['email1']) ?>"
                       aria-describedby="emailHelp">
            </div>
            <div class="col-12 mt-2 form-check">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password1" class="form-control" placeholder="Enter your password"
                       value="<?php if (isset($_POST['password1'])) echo $_POST['password1'] ?>"
                       id="exampleInputPassword1">
            </div>
            <div class="col-12 mt-2 form-check">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password_conf" class="form-control" placeholder="Confirm your password"
                       id="exampleInputPassword1">
            </div>
            <div class="col-12 mt-2 form-check">
                <label for="exampleInputPassword1" class="form-label">Fullname</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your Fullname"
                       id="exampleInputPassword1">
            </div>
            <div class="col-12 mt-2 form-check">
                <label for="exampleInputPassword1" class="form-label">Birthday</label>
                <input type="date" name="birthday_date" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col-12 mt-2 form-check  ">
                <input type="text" name="address" class="form-control" placeholder="Enter your address"
                       id="exampleInputPassword1">
            </div>
            <div class="col-12 mt-2 form-check">
                <select name="sex" class="col-12 form-select form-check mt-2" aria-label=".form-select-lg example">
                    <option selected>Choose your gender</option>
                    <option value="Мужской">Мужской
                    </option> <?php if (isset($_POST['sex']) && $_POST['sex'] == "Мужcкой") echo 'selected'; ?>
                    <option value="Женский">Женский
                    </option> <?php if (isset($_POST['sex']) && $_POST['sex'] == "Женский") echo 'selected'; ?>
                </select>
            </div>
            <div class="col-12 mt-2 form-check">
                <label for="exampleInputPassword1" class="form-label">Hobbies</label>
                <input type="text" name="interests" class="form-control" placeholder="Enter your hobbies"
                       id="exampleInputPassword1">
            </div>
            <div class="col-12 mt-2 form-check">
                <select name="blood_type" class="col-12 form-select form-check mt-2"
                        aria-label=".form-select-lg example">
                    <option selected>Choose your Blood Type</option>
                    <option value="I">I
                    </option> <?php if (isset($_POST['blood_type']) && $_POST['blood_type'] == "I") echo 'selected'; ?>
                    <option value="II">II
                    </option> <?php if (isset($_POST['blood_type']) && $_POST['blood_type'] == "II") echo 'selected'; ?>

                    <option value="III">III
                    </option> <?php if (isset($_POST['blood_type']) && $_POST['blood_type'] == "III") echo 'selected'; ?>

                    <option value="IV">IV
                    </option> <?php if (isset($_POST['blood_type']) && $_POST['blood_type'] == "IV") echo 'selected'; ?>

                </select>
            </div>
            <div class="col-12 mt-2 form-check">
                <select name="rh-factor" class="col-12 form-select form-check mt-2"
                        aria-label=".form-select-lg example">
                    <option selected>Choose your Rh Factor</option>
                    <option value="+">+
                    </option> <?php if (isset($_POST['rh_factor']) && $_POST['rh_factor'] == "+") echo 'selected'; ?>
                    <option value="-">-
                    </option> <?php if (isset($_POST['rh_factor']) && $_POST['rh_factor'] == "-") echo 'selected'; ?>
                </select>
            </div>
            <?php if (isset($_SESSION['message']))
                echo $_SESSION['message'];
            unset($_SESSION['message']); ?>
            <div class="col-12 mt-2 form-check">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            <p>
                У вас уже есть аккаунт? - <a href="/LR3/authorization.php"
                                             class="text-success fw-bold text-decoration-none">Авторизуйтесь</a>
            </p>
        </div>
    </div>
</form>
</body>
</html>>
