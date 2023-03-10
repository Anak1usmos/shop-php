<?php
require_once (ROOT . '/views/layouts/header.php'); ?>
<html>
<html lang="en">
<link href="\templates\css\style.css" rel="stylesheet">
<head>
</head>
<body>
<div class="sered">
    <?php if ($result): ?>
        <p>Заказ оформлен.</p>
    <?php else: ?>
    <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>₽</p><br/>


    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <p>Для оформления заказа выполните ВХОД в систему.</p>

    <div class="checkoutF">

        <form action="#" method="post">
            <p>Ваше имя</p>
            <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>
            <br>
            <p>Номер телефона</p>
            <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>
            <br>
            <p>Комментарий к заказу</p>
            <input type="text" name="userComment" placeholder="" value="<?php echo $userComment; ?>"/>
            <br>


            <input type="submit" name="submit" class="checkoutButton" value="Оформить" style="margin-top: 10px"/>
        </form>


        <?php endif; ?>
    </div>




</div>


<?php
require_once (ROOT . '/views/layouts/footer.php'); ?>