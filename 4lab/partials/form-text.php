<?php
$dom = new \DOMDocument();
?>
<div class="container">
    <form action="./text.php" method="POST" class="form-text d-flex flex-column justify-content-center col-6">
        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
            <label for="form-text__text-area form-label" class="form-text__label">Введите HTML код</label>
            <div class="preset-container">
                <a href="./text.php?preset=1" class="btn btn-secondary">Preset 1</a>
                <a href="./text.php?preset=2" class=" btn btn-secondary">Preset 2</a>
                <a href="./text.php?preset=3" class="btn btn-secondary">Preset 3</a>
            </div>
        </div>

        <textarea class="form-text__text-area form-control col-6" name="text" id="form-text__text-area" cols="30"
            rows="10">
            <?= presetText() ?>
         </textarea>

        <select name="order" id="" class="form-control mt-2">
            <option value="" default>Выберите задание</option>
            <option value="3">Задание 3</option>
            <option value="6">Задание 6</option>
            <option value="11">Задание 11</option>
            <option value="18">Задание 18</option>
        </select>
        <button type='sumbit' class="form-text__btn btn btn-primary mt-2">Отправить</button>
    </form>
    <div id="orders" class="text-from-form col-6 mt-1 d-flex flex-column">
        <?php
        if (!isset($_POST['order'])) {
        } else if ($_POST['order'] == 3) {
            direct_speach($dom);
        } else if ($_POST['order'] == 6) {
            russian_rules($dom);
        } else if ($_POST['order'] == 11) {
            titles($dom);
        } else if ($_POST['order'] == 18) {
        }

        ?>
    </div>
</div>