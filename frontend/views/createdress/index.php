<?php
// foreach($materials as $material){
//     echo $material->MaterialId;
// }
// echo '<br>';

// foreach($dressestype as $dresstype){
//     echo $dresstype->DressTypeId;
// }


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>JFY | Just For You</title>
</head>

<body>
    <form id='constructor_form'>
        <div id='constructor'>
            <h4>Платье под заказ</h4>
            <h5>Выберите тип платья</h5>
            <div id='biscuits'>

                <?php
                foreach ($dressestypes as $dresstype) {
                    echo '<div class="radio_btn">
                    <input id="radio-' . $dresstype->DressTypeName . '" type="radio" name="biscuits">
                    <label class="selected_biscuit" value="' . $dresstype->DressTypeId . '"  for="radio-' . $dresstype->DressTypeName . '">' . $dresstype->DressTypeName  . '</label>
                </div>';
                }
                ?>
            </div>

            <h5>Выберите материал</h5>
            <div id='fills'>
            <?php
            foreach ($materials as $material) {
                echo '<div class="radio_btn">
                <input id="radio-' . $material->MaterialName . '" type="radio" name="fills">
                <label class="selected_fill"  value="' . $material->MaterialId . '"  for="radio-' . $material->MaterialName . '">' . $material->MaterialName . '</label>
            </div>';
            }
            ?>
            </div>

            <h5>Выберите цвет</h5>
            <div id='fills'>
            <?php
            foreach ($colors as $color) {
                echo '<div class="radio_btn">
                <input id="radio-' . $color->ColorName . '" type="radio" name="fills">
                <label class="selected_fill"  value="' . $color->ColorName . '"  for="radio-' . $color->ColorName . '">' . $color->ColorName . '</label>
            </div>';
            }
            ?>
            </div>

            </form>
</body>

</html>