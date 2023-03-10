<?php
require_once (ROOT . '/views/layouts/header.php'); ?>
<html>
<head>
</head>
<body>
<div class="genre">

    <div class="genre1">
        <div class="content1">
            <ul >
                <?php foreach ($categories as $category): ?>
                    <li class="categories">
                        <a class ="categories-name" href="/genre/<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php foreach ($categoriesGoods as $product): ?>
            <div class ="photogame2">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
            </div>
            <div class="namegame">
                <p><a href="/catalog/game/<?php echo $product['id'];?>"><?php echo $product['title'];?></p>
            </div>
            <div class="price2">
                <p><?php echo $product['price'];?> </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once (ROOT . '/views/layouts/footer.php.'); ?>