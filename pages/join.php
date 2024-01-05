<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    require "../page-components/load.php"
    ?>
    <title>Join Us</title>
</head>
<body>

<?php
require "../page-components/header.php"
?>

<main class="white-background">
    <div class="white-background-image">
        <div class="form-container-join">
            <div class="form-header-join">
                <img class="form-logo" alt="Логотип" src="../media/logos/logo-black.png">
                <p>ПРИЄДНУЙСЯ ДО НАС</p>
            </div>
            <form>
                <label>
                    <input id="name" name="name" type="text" placeholder="ІМ'Я" required>
                </label>

                <label>
                    <input id="telegram_submit" pattern="^(?:https?:\/\/t\.me\/|t\.me\/|@)([a-zA-Z0-9_]{5,})$" title="Введіть ID коректно (@username | t.me/username | https://t.me/@username)" name="telegram" type="text" placeholder="ТЕЛЕГРАМ ЛОГІН" required>
                </label>

                <label>
                    <input id="email" name="email" type="email" placeholder="example@gmail.com" required>
                </label>

                <button type="submit">Приєднатись</button>

            </form>
        </div>

    </div>
</main>
</body>
</html>