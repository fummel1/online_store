<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина товаров</title>
    <meta name="description" content="Корзина товаров">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/products.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
<?php require 'public/blocks/header.php' ?>

<div class="container main">
    <h1>Корзина товаров</h1>
    <?php if(count($data['products']) == 0): ?>
        <p><?=$data['empty']?></p>
    <?php else: ?>
        <div class="products">
            <?php
            $sum = 0;
            for($i = 0; $i < count($data['products']); $i++):
                $sum += $data['products'][$i]['price'];
                ?>
                <div class="row">
                    <img src="/public/img/<?=$data['products'][$i]['img']?>" alt="<?=$data['products'][$i]['title']?>">
                    <h4><?=$data['products'][$i]['title']?></h4>
                    <span><?=$data['products'][$i]['price']?> рублей</span>
                </div>
            <?php endfor; ?>
            <button class="btn">Приобрести (<b><?=$sum?> рублей</b>)</button>
        </div>
    <?php endif;?>
</div>

<?php require 'public/blocks/footer.php' ?>
</body>
</html>
