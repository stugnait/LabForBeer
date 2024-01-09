<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "page-components/loader.php" ?>
    <title>LabForBeer</title>
</head>
<body>

<main class="black-background">

    <?php
    include "page-components/header.php"
    ?>

    <div class="black-background-image">
        <div class="main-greeting">
            <h1>LABFORBEER</h1>
            <h4>Якщо ти не маєш часу на виконання лабок, то ми тобі допоможемо.
                Наша амбітна команда виконає будь-яке завдання, яке стане перед ними.</h4>
            <a href="pages/order.php">Замовити лабораторну</a>
            <div class="main-service">
                <h2>Послуги, які ми надаємо</h2>
                <div class="service-types-container">
                    <div class="service-container">
                        <div class="service-number">
                            01
                        </div>
                        <div class="service-box">
                            <div class="service-box-header">
                                Профільні
                            </div>
                            <div class="service-box-explain">
                                Proteus
                            </div>
                            <div class="service-box-explain">
                                Mathcad
                            </div>
                        </div>
                    </div>
                    <div class="service-container">
                        <div class="service-number">
                            02
                        </div>
                        <div class="service-box">
                            <div class="service-box-header">
                                Програмування
                            </div>
                            <div class="column-spreader">
                                <div>
                                    <div class="service-box-explain">
                                        Python
                                    </div>
                                    <div class="service-box-explain">
                                        C#
                                    </div>
                                </div>
                                <div>
                                    <div class="service-box-explain">
                                        Java
                                    </div>
                                    <div class="service-box-explain">
                                        C++
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-container">
                        <div class="service-number">
                            03
                        </div>
                        <div class="service-box">
                            <div class="service-box-header">
                                Репетиторство
                            </div>
                            <div class="service-box-explain">
                                Менторинг
                            </div>
                            <div class="service-box-explain">
                                Додаткові лаби
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-container">
        <div class="spinning-sphere-container">
            <div class="spinning-sphere"></div>
            <div class="spinning-sphere-arrow"></div>
            <p class="spinning-sphere-text">Кожна точка вашої проблеми знаходиться у сфері нашої компетентності</p>
        </div>
        <div class="about">

            <p class="about-us-header">
                ПРО НАС
            </p>
            <div class="our-team">
                <div class="team-card">
                    <img class="card-photo" src="media/no-avatar.png" alt="Employee 1">
                    <div class="card-text">
                        <p class="employee-name">Roman</p>
                        <p class="employee-job">Java Developer</p>
                        <p class="employee-about">Працює у сфері розробки 2 роки, має досвід у чомусь.
                            Креативний підхід до вирішення проблем</p>
                    </div>
                </div>
                <div class="team-card">
                    <img class="card-photo" src="media/no-avatar.png" alt="Employee 1">
                    <div class="card-text">
                        <p class="employee-name">Roman</p>
                        <p class="employee-job">Java Developer</p>
                        <p class="employee-about">Працює у сфері розробки 2 роки, має досвід у чомусь.
                            Креативний підхід до вирішення проблем</p>
                    </div>
                </div>
                <div class="team-card">
                    <img class="card-photo" src="media/no-avatar.png" alt="Employee 1">
                    <div class="card-text">
                        <p class="employee-name">Roman</p>
                        <p class="employee-job">Java Developer</p>
                        <p class="employee-about">Працює у сфері розробки 2 роки, має досвід у чомусь.
                            Креативний підхід до вирішення проблем</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feedbacks-container">
        <div class="feedback-filling">
            <p>ЩО ПРО НАС КАЖУТЬ</p>
            <div class="feedbacks">
                <div class="feedback-column">
                    <div class="feedback">
                        <img class="feedback-image" src="media/no-avatar.png" alt="Фото користувача">
                        <div>
                            <div class="feedback-name">Dana kitsya</div>
                            <div class="feedback-text">Сервіс просто бомба, все швидко та якісно</div>
                        </div>
                    </div>
                    <div class="feedback">
                        <img class="feedback-image" src="media/no-avatar.png" alt="Фото користувача">
                        <div>
                            <div class="feedback-name">Dana kitsya</div>
                            <div class="feedback-text">Сервіс просто бомба, все швидко та якісно</div>
                        </div>
                    </div>
                </div>
                <div class="feedback-column">
                    <div class="feedback">
                        <img class="feedback-image" src="media/no-avatar.png" alt="Фото користувача">
                        <div>
                            <div class="feedback-name">Dana kitsya</div>
                            <div class="feedback-text">Сервіс просто бомба, все швидко та якісно</div>
                        </div>
                    </div>
                    <div class="feedback">
                        <img class="feedback-image" src="media/no-avatar.png" alt="Фото користувача">
                        <div>
                            <div class="feedback-name">Dana kitsya</div>
                            <div class="feedback-text">Сервіс просто бомба, все швидко та якісно</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "page-components/footer.php"
    ?>

</main>


</body>
</html>