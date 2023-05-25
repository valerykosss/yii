<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="info-section">

    
        <h1>Аккаунт</h1>
        <div class="info-container">
            <div>
                <h2>Имя: <?php echo(\Yii::$app->user->identity->username)?></h2>
                <h2>Email: <?php echo(\Yii::$app->user->identity->email)?> </h2>
            </div>

        </div>
    </section>

    <div class = filter>
                          
                    <br><b><p>Цвет</p></b>
                    <?php
                            foreach($colors as $color){
                                echo "<div>
                                <input type='checkbox' class='chckbx color' id='color' value='$color->ColorId'>$color->ColorName
                                </div>";
                            }
                    ?>


                    <br><b><p>Тип платья</p></b>
                    <?php
                            foreach($dresstypes as $dresstype){
                                echo "<div>
                                <input type='checkbox' class='chckbx dresstype' id='dresstype' value='$dresstype->DressTypeId'>$dresstype->DressTypeName
                                </div>";
                            }
                    ?>


    </div>

    <section class="saved-section">
        <h3>Мои платья</h3>
            <?php 
            foreach ($userDresses as $userDress)
            {
        ?>
        <div class="dressCards__container">
        <div class="dressCard">
               <div class="dresstypename"> <?= $userDress->dressType->DressTypeName ?> </div>
               <div class="color"> <?= $userDress->color->ColorName ?> </div>
               <div class="material"> <?= $userDress->material->MaterialName ?> </div>
        </div>

        <?php 
    }

    ?>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".chckbx").click(function() {
            let color_id = [], 
            dresstype_id=[];
        
            $(".color:checked").each(function(key){
                key = $(this).val();
                color_id = key;
            });
            $(".dresstype:checked").each(function(key){
                // dresstype_id[key] = $(this).val();
                key = $(this).val();
                dresstype_id = key;
            });
        
            $.ajax({
            url: '?r=account/index',
            type: 'POST',
            data: {
                color_id:color_id,
                dresstype_id:dresstype_id, 
            },
            success(data) {
                $('.dressCards__container').html(data);
                // console.log(data);
            }
        })
    });
    })
</script>
</html>