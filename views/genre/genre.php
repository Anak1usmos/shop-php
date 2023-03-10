<?php
require_once (ROOT . '/views/layouts/header.php'); ?>
<html>
<head>
</head>
<body>
<div class="genre">



        <?php foreach ($categoriesGoods as $product): ?>
            <div class="containercatalog">
                <div class ="photogame">
                    <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
                </div>
                <div class="namegame">
                    <p><a href="/catalog/game/<?php echo $product['id'];?>"><?php echo $product['title'];?></p>
                </div>
                <div class="price2">
                    <p><?php echo $product['price'];?> руб.</p>
                </div>
                <div class="knopkacatalog">
                    <form action="/cart/add/<?php echo $product['id']; ?>" class="sdfdf">
                        <button>Добавить в корзину</button>
                    </form>

                </div>
            </div>
        <?php endforeach; ?>
</div>



</div>
</body>

<?php require_once (ROOT . '/views/layouts/footer.php.'); ?>
