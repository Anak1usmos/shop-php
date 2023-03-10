<?php require_once (ROOT . '/views/layouts/header.php'); ?>
<html>
<link href="\templates\css\style.css" rel="stylesheet">
<head>
</head>
<body>
<div class="change">
    <?php if ($result): ?>
        <p>Данные изменены</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <div class="change2">
        <h2>Редактирование данных</h2>
        <form action="#" method="post">
            <label for="login"><b>Login</b></label>
            <input type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>">
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
            <input type="submit" name="submit" class="GG" value="Изменить">
    </div>


    </form>
    <?php endif; ?>


</div>
</body>


<?php require_once (ROOT . '/views/layouts/footer.php'); ?>
</html>