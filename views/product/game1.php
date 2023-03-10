<?php
require_once (ROOT . '../views/layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<link href="\templates\css\style2.css" rel="stylesheet">
<link href="\templates\css\style.css" rel="stylesheet">
<html>
<head>
</head>
<body>
 <div class="osnova">
     <div class="photo3">
         <img src="<?php echo Product::getImageforProduct($product['id']); ?>" alt="Euro Truck Simulator 2">
     </div>
    <div class="text">
        <p>Описание:<?php echo $product['description'];?>!</p>
    </div>
     <div class ="block-info">
         <ul class="properties1">
             <?php foreach ($specifications as $val) :
             if (!is_null($val["value"])) : ?>
             <li> <?php echo $val["name"] . ": " .$val["value"] ?>
                 <?php endif; ?>
                 <?php endforeach; ?>
         </ul>
     </div>
     <div class="knopka">
         <form action="/cart/add/<?php echo $product['id']; ?>">
             <button>Добавить в корзину</button>
         </form>
     </div>


 </div>

</body>
<?php
require_once (ROOT . '../views/layouts/footer.php'); ?>

</html>