<?php

require_once ('connect.php');

$sql = "SELECT img_path, productname, materials.typename, 	productdescription, cost FROM products INNER JOIN materials on products.id_material = materials.id "; // делаем запрос на вывод данных из 2 таблиц

$arBind = [];// пустой массив

if (!key_exists('clearFilter', $_GET)) // если кнопка очистить фильтр не нажата
{
    if (count($_GET) > 0)
    {
        if (!empty($_GET['name'])) // если не пусто то забери данные из инпута с ключём name гет запросом
        {
            array_push($arBind,"productname LIKE :name");  // запихиваем в массив данные из таблицы(столбец productname)
        }
        if (!empty($_GET['curlingdescription']))
        {

            array_push($arBind,"productdescription LIKE :description"); // запихиваем в массив данные из таблицы(столбец productdescription)

        }
        if (!empty($_GET['costFrom']))
            if (!empty($_GET['costFrom']))
            {

                array_push($arBind,"cost>=  :cost"); // запихиваем в массив данные из таблицы(столбец cost, но больше либо равно этому столбцу для дальнейшей фильтрации)

            }

        if (!empty($_GET['costTo']))
        {

            array_push($arBind,"cost<=  :cost2"); //  запихиваем в массив данные из таблицы(столбец cost, но меньше либо равно этому столбцу для дальнейшей фильтрации)

        }

        if (!empty($_GET['id_brand']))
        {

            array_push($arBind, "typename LIKE :type_id"); // запихиваем в массив данные из таблицы(столбец typename)

        }

        if (count($arBind))
        {
            $where = 'WHERE ' . implode(' AND ', $arBind); // превращаем  условие where и массив arbind в 1 строку
            $sql .= $where;
        }
    }
}

$vars = ['name', 'description', 'cost', 'cost2', 'type_id'];
$vars2 = ['name', 'curlingdescription', 'costFrom', 'costTo', 'id_brand'];
$isstr = [true, true, false, false, true];// если тру то это столбец-строка если нет то числовой столбец из таблицы


$stmt = $pdo->prepare($sql); // ...начинается защита от sql-инъекций

for ($i = 0; $i < 5; $i++) {
    if (!empty($_GET[$vars2[$i]])) {
        if ($isstr[$i]) $stmt->bindValue($vars[$i], '%'. $_GET[$vars2[$i]] .'%', PDO::PARAM_STR);
        else $stmt->bindValue($vars[$i], $_GET[$vars2[$i]] , PDO::PARAM_INT); // если тру значит число (сравнивать будем по точному совпадению при помощи %, если фолс то число
    }
}

$result = $stmt->execute(); // делаем запрос

$data = array();
while ($row = $stmt->fetch()) {
    array_push($data, $row); // достаём из полученного массива строки
}


$selectA = array();
$query = "SELECT * FROM materials";
$stmt = $pdo->prepare($query);
$stmt->execute();
while ($row = $stmt->fetch()) {
    array_push($selectA, $row); // аналогично для 2 таблицы
}


?>


















