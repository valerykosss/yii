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
                <h2>Имя: <?php echo(\Yii::$app->user->username)?></h2>
                <h2>Email: <?php echo(\Yii::$app->user->email)?></h2>
            </div>
            <form action="add_car.php">
                <button class="new-post-btn" type="submit">Создать объявление</button>
            </form>
        </div>
    </section>
    <section class="saved-section">
        <h1>Избранное</h1>
        <span id="anchor"></span>
    </section>
</body>
</html>