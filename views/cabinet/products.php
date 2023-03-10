<?php require_once (ROOT . '/views/layouts/header.php'); ?>
<html>
<link href="\templates\css\style.css" rel="stylesheet">
<head>
</head>
<body>
<div class="cart">
    <div class="cart2">



            <p>Вы приобрели следующие товары:</p>
            <table class="goodsInCart">
                <tr class="grus">
                    <th>ID</th>
                    <th>Название</th>
                    <th>Стомость, Руб</th>
                    <th>Количество, шт</th>
                </tr>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $productsQuantity[$product['id']]; ?></td>


                    <td><div class="z666z"></td></div>
        <td><div class="zz1122"></td></div>
                </tr>
                <?php endforeach; ?>



        </table>
</div>
</div>
</body>

<?php require_once (ROOT . '/views/layouts/footer.php'); ?>
</html>