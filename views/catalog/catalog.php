<?php
require_once (ROOT . '/views/layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="catalogplace" >
    <div class="naz">
        <h2>Категории:</h2>
    </div>
    <div class="content1">
        <ul >
            <?php foreach ($categories as $category): ?>
                <li class="categories">
                    <a class ="categories-name" href="/category/<?php echo $category['id']; ?>"> <?php echo $category['name']; ?> </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
        <?php foreach ($catalogList as $product): ?>
        <div class="containercatalog">
            <div class ="photogame">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
            </div>
            <div class="namegame">
                <p><a href="/catalog/game/<?php echo $product['id'];?>"><?php echo $product['title'];?></a></p>
            </div>
            <div class="price2">
                <p><?php echo $product['price'];?> руб.</p>
            </div>
            <div class="knopkacatalog">
                <form action="/cart/add/<?php echo $product['id']; ?>">
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>
        <?php endforeach;?>
</div>
</body>
</html>
<?php
require_once (ROOT . '/views/layouts/footer.php'); ?>