<?php session_start(); ?>

<?php if (empty($_SESSION['email1'])) header('Location: authorization.php'); ?>
<?php require_once('logic.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php require_once 'header.php' ?>
<form action="" id="form" method="GET">
    <div class="container gap10down">
        <div class="center w-100">Фильтрация результата поиска</div>
        <div class="center w-100">По цене:</div>
        <div class="input-group mb-3 gap10down">
            <input type="text" name="costFrom" placeholder="Цена от" class="form-control w-100"
                   aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 gap10down">
            <input type="text" name="costTo" placeholder="Цена до" class="form-control w-100"
                   aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="center w-100">Фильтрация по бренду:</div>
        <select name="id_brand" type="text" class="form-control w-100" aria-label="Text input with dropdown button">
            <div class="input-group mb-3">
                <option value="">Любой
                </option>
                <?php
                foreach ($selectA as $items) {
                    ?>
                    <option value="<?php echo $items['typename']; ?>"><?php echo $items['typename']; ?></option>
                    <?php
                }
                var_dump($_SESSION['email1']);
                ?>
        </select>
        <div class="center w-100">Фильтрация по описанию</div>
        <input type="text" name="curlingdescription" placeholder="Введите описание товара"
               class="form-control p-2 w-100"
               aria-describedby="inputGroup-sizing-default">


        <div class="center w-100">Фильтрация по наименованию</div>
        <input type="text" name="name" placeholder="Введите наименование товара" class="form-control p-2 w-100"
               aria-describedby="inputGroup-sizing-default">

        <div class="container center d-grid gap-2 d-md-block p-2">
            <button type="submit" class="center btn btn-primary">Применить фильтр</button>
            <button type="submit" class="btn btn-danger" name="clearFilter">Сбросить фильтр</button>
        </div>
        <div></div>
    </div>
</form>
<table class="table table-bordered  container">
    <thead>
    <tr>
        <th scope="col">Картинка</th>
        <th scope="col">Название</th>
        <th scope="col">Брэнд</th>
        <th scope="col">Описание</th>
        <th scope="col">Цена</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data

    as $datas): ?>
    <tr>
        <td><img src="catalog_img/img/<?= $datas['img_path']; ?>" class="w-100"></td>
        <td><?= $datas['productname']; ?></td>
        <td><?= $datas['typename']; ?></td>
        <td><?= $datas['productdescription']; ?></td>
        <td><?= $datas['cost']; ?></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>
</body>
</html>