<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ОБЕЛИСК - магазин электронных ключей</title>
<link href="..\templates\css\style.css" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="#"><img src="\templates\img\photo\photo1.png" alt="ОБЕЛИСК"></a>
    </div>
    <nav class="menu">
        <ul>
            <li><a href="/about/" class="ob">ОБЕЛИСК</a></li>
            <li><a href="/catalog/" class="ob2">КАТАЛОГ</a></li>
            <li><a href="/support/" class="ob3">ПОДДЕРЖКА</a></li>

            <?php if (User::isGuest()): ?>
            <li><a href="/user/login/" class="ob5">ВХОД</a></li>
            <?php else: ?>
            <li><a href="/cabinet/" class="ob6">АККАУНТ</a></li>
            <li><a href="/user/logout/" class="ob6">ВЫХОД</a></li>
            <?php endif; ?>
            <li><a href="/cart/" class="ob6">КОРЗИНА<span id="lex322">(<?php echo Cart::countItems();?>)</span></a></li>
                    </ul>
    </nav>
    <div class="backet">
        <a href="/cart/"><img src="\templates\img\photo\photo3.png" alt="КОРЗИНА"></a>
    </div>
</header>
<main>


</main>
</body>
</html>


