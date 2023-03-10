<?php
require_once (ROOT . '/views/layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<link href="\templates\css\style.css" rel="stylesheet">
<html>
<body>

<div class="registr">
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="forma2">
        <h2>Вход на сайт</h2>
        <form action="#" method="post">
            <label for="email"><b>E-mail</b></label>
            <input type="email" name="email" placeholder="Введите E-mail" value="<?php echo $email; ?>">
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Введите пароль" value="<?php echo $password; ?>">
            <input type="submit" name="submit" class="GG" value="Вход">
            <div class="z322">Если у вас нет аккаунта<a href="/user/register"> зарегестрируйтесь</a></div>
        </form>

    </div>

</div>


</body>

</html>
<?php require_once (ROOT . '/views/layouts/footer.php'); ?>