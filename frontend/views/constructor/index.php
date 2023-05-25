<!DOCTYPE html>
<html lang="ru">
<?php
use yii\bootstrap5\Html;
?>

<body>
        <div id='constructor'>
            <h4>Платье под заказ</h4><br><br>

            <h5>Выберите тип платья</h5>
            <div id='dresstype'>
                <?php
                foreach ($dressestypes as $dresstype) {
                    echo '<div class="radio_btn">
                    <input id="radio-' . $dresstype->DressTypeName . '" type="radio" name="dresstype">
                    <label value="' . $dresstype->DressTypeId . '"  for="radio-' . $dresstype->DressTypeName . '">' . $dresstype->DressTypeName  . '</label>
                </div>';
                }
                ?>
            </div><br>

            <h5>Выберите материал</h5>
            <div id='material'>
                <?php
                foreach ($materials as $material) {
                    echo '<div class="radio_btn">
                    <input id="radio-' . $material->MaterialName . '" type="radio" name="matrial">
                    <label value="' . $dresstype->DressTypeId . '"  for="radio-' . $dresstype->DressTypeName . '">' . $dresstype->DressTypeName  . '</label>
                </div>';
                }
                ?>
            </div><br>
    

            <h5>Выберите цвет</h5>
            <div id='color'>
            <?php
            foreach ($colors as $color) {
                echo '<div class="radio_btn">
                <input id="radio-' . $color->ColorName . '" type="radio" name="color">
                <label value="' . $color->ColorName . '"  for="radio-' . $color->ColorName . '">' . $color->ColorName . '</label>
            </div>';
            }
            ?>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Create', ['constructor/create'], ['class'=>'btn btn-primary']) ?>
        </div>
</body>

</html>