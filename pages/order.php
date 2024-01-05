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
    <title>LabForBeer</title>
</head>
<body>

<?php
require "../page-components/header.php"
?>

<main class="white-background">
    <div class="white-background-image">
        <div class="form-container">
            <div class="form-header">
                <img class="form-logo" alt="Логотип" src="../media/logos/logo-black.png">
                <p>ОФОРМИТИ ЗАМОВЛЕННЯ</p>
            </div>
            <form action="../services/send-order.php" method="post" class="order-form">
                <label>
                    <input id="name" name="name" type="text" placeholder="ІМ'Я" required>
                </label>

                <label>
                    <input id="telegram" pattern="^(?:https?:\/\/t\.me\/|t\.me\/|@)([a-zA-Z0-9_]{5,})$" title="Введіть ID коректно (@username | t.me/username | https://t.me/@username)" name="telegram" type="text" placeholder="ТЕЛЕГРАМ ЛОГІН" required>
                </label>

                <label>
                    <select id="subject" name="subject" placeholder="ПРЕДМЕТ" required>
                        <option value="" disabled selected>Оберіть тип</option>
                        <option value="mathcad">Mathcad</option>
                        <option value="programming">Мови Програмування</option>
                        <option value="proteus">Proteus</option>
                        <option value="individual">Репетиторство</option>
                    </select>
                </label>

                <label>
                    <input id="labNum" autocomplete="off" name="labNum" type="number" placeholder="НОМЕР ЛАБОРАТОРНОЇ" required>
                </label>

                <label>
                    <input id="variant" name="variant" type="number" placeholder="ВАРІАНТ" required>
                </label>

                <label>
                    <input id="deadline" autocomplete="off" value="" name="deadline" placeholder="ДЕДЛАЙН">
                </label>
    
                <button type="submit">Замовити</button>
            </form>
        </div>

    </div>
</main>
</body>
</html>