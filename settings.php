<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#151515"/>
    <title>Настройки</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/settings.css">
    <!-- <link rel="stylesheet" href="css/theme-light.css"> -->
    <link rel="stylesheet" title="theme" href="#">
</head>



<body>
    
    <?php require "blocks/header-settings.php" ?>

    <?php require "blocks/cont-menu.php" ?>

    <div class="pin__back">
        <a href="base.php" class="pin__ico ico__back2"></a>
    </div>

    <div class="bg">
        <div id="wrap__center">
            <main class="content">
                <h1>НАСТРОЙКИ</h1>
                <div class="box__settings">
                    <div class="title__card">АККАУНТ</div>
                    <div class="items">
                        <div class="box__akk">
                                <div class="photo__akk"></div>
                                <h3>Name-User</h3>
                            </div>
                    </div>
                </div>

                <div class="box__settings">
                    <div class="title__card">ТЕМЫ</div>
                    <div class="items">
                        <p>Основные:</p>
                        <div class="theme">
                            <h3 class="change-theme" data-theme="light">Светлая</h3>
                            <h3 class="change-theme" data-theme="dark">Тёмная</h3>
                            <h3 class="change-theme" data-theme="light-book">Мрамор</h3>
                            <h3 class="change-theme" data-theme="dark-gold">Оранжевая</h3>
                        </div>
                    </div>
                </div>


                <div class="box__settings">
                    <div class="title__card">ПАНЕЛЬ НАВИГАЦИИ</div>
                    <div class="items">
                        <p>Поведение хедера:</p>
                        <div class="flex__buttom">
                            <button class="btn__fn" data-view="static">По умолчанию</button>
                            <button class="btn__fn" data-view="floating">Фиксированый</button>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="js/theme.js"></script>
    <?php require "blocks/footer.php" ?>
    
    <script src="js/behaviors.js"></script>
</body>
</html>