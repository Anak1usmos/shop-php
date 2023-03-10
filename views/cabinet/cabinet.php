<?php require_once (ROOT . '/views/layouts/header.php'); ?>
<html>
<head>
</head>
<body>
<div class="cabinet">
    <div class ="cabin2">
        <h2>Кабинет пользователя</h2>

        <h1>Привет <?php echo $user['login']; ?></h1>

        <ul>
            <li><a href="/cabinet/edit/">Редактировать данные</a></li>
            <li><a href ="/cabinet/quest/<?php echo $user['id'];?>">Список покупок</a></li>
        </ul>

    </div>

</div>

</body>


<?php require_once (ROOT . '/views/layouts/footer.php'); ?>
</html>