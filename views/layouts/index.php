<?php
require_once (ROOT . '/views/layouts/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<main class="main">
    <div class="glav">
        <div class="photka">
            <a href="#"><img src="..\templates\skip\photo1.jpg" alt="ИГРА" id="change_image"></a>

        </div>

        <div class="prod">
            <p>ПОПУЛЯРНОЕ</p>
        </div>

        <?php foreach ($PopularProducts as $product): ?>

            <div class="igra">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
                <h4><a href="/catalog/game/<?php echo $product['id'];?>"><?php echo $product['title'];?></h4>
                <p><?php echo $product['price'];?> руб.</a></p>
            </div>


        <?php endforeach;?>

        <div class ="prod2">
            <p>НОВИНКИ</p>
        </div>

        <?php foreach ($NewProducts as $product): ?>

        <div class="igra2">
            <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
            <h4><a href="/catalog/game/<?php echo $product['id'];?>"><?php echo $product['title'];?></h4>
            <P><?php echo $product['price'];?> руб.</a></P>
        </div>

        <?php endforeach;?>


        <div class ="prod3">
            <p>ОЖИДАЕМЫЕ</p>
        </div>

        <?php foreach ($ExpectProducts as $product): ?>

            <div class="igra3">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
                <h4><a href="/catalog/game/<?php echo $product['id'];?>"><?php echo $product['title'];?></h4>
                <P><?php echo $product['price'];?> руб.</a></P>
            </div>

        <?php endforeach;?>




</main>
</body>

<?php require_once (ROOT . '/views/layouts/footer.php.'); ?>
</html>