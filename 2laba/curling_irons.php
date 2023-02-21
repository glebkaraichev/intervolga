<?php require_once('logic.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<<div class="container-fluid">
    <header class="header d-flex p-3 align-items-center justify-content-center">
        <button class="btn btn-outline-secondary d-flex align-items-center">
            <i class="bi bi-geo-alt fs-5 me-1"></i>
            <span class="fw-bolder fs-6 text-black">Магазины</span>
        </button>
        <button class="btn btn-outline-none d-flex ms-3 align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-ru" viewBox="0 0 512 512" class="icon me-2">
                <g fill-rule="evenodd" stroke-width="1pt">
                    <path fill="#fff" d="M0 0h512v512H0z" />
                    <path fill="#0039a6" d="M0 170.7h512V512H0z" />
                    <path fill="#d52b1e" d="M0 341.3h512V512H0z" />
                </g>
            </svg>
            <span class="fw-bold fs-6 text-black">Москва</span>
        </button>
        <div class="header__phone d-flex ms-4 align-items-center me-5">
            <i class="bi bi-telephone me-2"></i>
            <a href="" class="fw-bold fs-6 text-black text-decoration-none">8 800 1000 750</a>
        </div>
        <div class="header__title d-flex align-items-cente mx-5">
            <a href="../index.php" class="text-decoration-none">
                <h1 class="text-black fw-bold">SOKOLOV</h1>
            </a>
        </div>
        <a href="" class="text-decoration-none"><span
                    class="fw-bold fs-6 text-black d-flex align-items-center ms-5">Доставка и оплата</span></a>
        <button class="btn btn-outline-secondary d-flex align-items-center ms-3">
            <i class="bi bi-gem me-1 fs-5"></i>
            <span class="fw-bold fs-6 text-black">Украшения на заказ</span>
        </button>
        <ul class="nav flex-nowrap align-items-center ms-3 fs-5">
            <li><a href="" class="text-black"><i class="bi bi-heart px-2"></i></a></li>
            <li><a href="" class="text-black"><i class="bi bi-cart px-2"></i></a></li>
            <li><a href="" class="text-black"><i class="bi bi-person px-2"></i></a></li>
        </ul>
    </header>
    <nav class="d-flex p-3 align-items-center justify-content-center">
        <button class="btn btn-outline-dark d-flex align-items-center btn-dark px-3">
            <i class="bi bi-box text-light me-3"></i>
            <a class="fw-normal fs-6 text-light text-decoration-none text-uppercase">Каталог</a>
        </button>
        <div class="diamond_wrapper px-5">
            <a href="" class="btn btn-secondary btn-outline-dark btn--diamonds"></a>
        </div>
        <div class="search d-flex input-group w-25">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            </div>
            <input type="text" class="form-control" placeholder="Поиск по каталогу">
        </div>
        <button class="btn btn-light ms-2">
            <i class="bi bi-camera fs-5"></i>
        </button>
        <div class="sklv_wrapper px-5">
            <a href="../text.php" class="btn btn-outline-none btn--sklv"></a>
        </div>
        <button class="btn btn-outline-none px-4">
            Акции
        </button>
        <button class="btn btn-outline-none px-4">
            Подарочная карта
        </button>
    </nav>
</div>
 <form action="" id="form" method="GET">
        <div class="container gap10down">
            <div class="center w-100">Фильтрация результата поиска</div>
            <div class="center w-100">По цене:</div>
            <input type="text" name="costFrom" placeholder="Цена от" class="w-100"> 
            <input type="text" name="costTo" placeholder="Цена до" class="w-100">
            <div class="center w-100">Фильтрация по бренду:</div>
            <select name="id_brand" type="text" class="w-100">
                <option value="">Любой</option>
                <?php 
                    foreach($selectA as $items) {
                        ?>
                            <option value="<?php echo $items['typename']; ?>"><?php echo $items['typename']; ?></option>
                        <?php
                    }
                ?>
            </select>
            <div class="center w-100">Фильтрация по описанию</div>
            <input type="text" name="curlingdescription" placeholder="Введите описание товара" class="w-100">
            <div class="center w-100">Фильтрация по наименованию</div>
            <input type="text" name="name" placeholder="Введите наименование товара" class="w-100">
            <div class="center gap10">
                <button type="submit" class="btn btn-primary">Применить фильтр</button>
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
  <?php foreach($data as $datas):  ?>
    <tr>
      <td><img src="img/<?= $datas['img_path']; ?>" class="w-100"></td>
      <td><?=$datas['productname']; ?></td>
      <td><?=$datas['typename']; ?></td>
      <td><?=$datas['productdescription']; ?></td>
      <td><?=$datas['cost']; ?></td>
      </tr>
  </tbody>
  <?php endforeach; ?>
</table>
</body>
</html>