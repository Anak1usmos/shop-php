
<?php require_once (ROOT . '/views/layouts/header.php.'); ?>
<html>
<link href="\templates\css\style.css" rel="stylesheet">
<head>
</head>
<body>

<div class="cart">
    <div class="cart2">
        <h2>КОРЗИНА</h2>

    <?php if ($productsInCart): ?>
        <p>Вы приобрели следующие товары:</p>
        <table class="goodsInCart">
            <tr class="grus">
                <th>Название</th>
                <th>Стомость, Руб</th>
                <th>Количество, шт</th>
                <th>Удалить</th>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><a href="/catalog/game/<?php echo $product['id']; ?>">
                        <?php echo $product['title']; ?>
                    </a></td>
                <td><div class="z666z"><?php echo $product['price'] * $productsInCart[$product['id']]; ?></td></div>
                <td><div class="zz1122"><?php echo $productsInCart[$product['id']]; ?></td></div>
                <td><div class="rr99"> <a href="/cart/delete/<?php echo $product['id'];?>"><img src="/templates/img/photo/delete.png" alt="" style="width: 40px"></a></td></div>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td>Общая стоимость</td>
                <td><?php echo $totalPrice; ?> ₽</td>

            </tr>

        </table>
        <div class="back">
            <a href="/">Вернуться к покупкам</a>
        </div>
        <div class="end">
            <a class="end2" href="/cart/checkout/">Оформить заказ</a>
        </div>


    <?php else: ?>
        <div class="emptyCart goodsInCart"><p>Корзина пуста</p>

            <a href="/">Вернуться к покупкам</a>
        </div>
    <?php endif; ?>

    </div>


</div>

</body>


<?php require_once (ROOT . '/views/layouts/footer.php.'); ?>
</html>