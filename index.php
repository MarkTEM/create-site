<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#151515"/>
    <title>NAME</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme-light.css">
    <link rel="stylesheet" title="theme" href="#">
</head>


<body>
    <script src="js/theme.js"></script>
    <?php require "blocks/header.php" ?>

    <?php require "blocks/cont-menu.php" ?>
    <div class="pin__back">
        <a href="#" class="pin__ico ico__back2"></a>
    </div>
    

    <div class="bg">
        <div id="wrap__grid" class="wrap">
            <!-- <div class="content">
                <div class="elements">
                        <a href="base.php" class="but">Главная</a>
                        <a href="settings.php" class="but">Настройки</a>
                        <a href="#" class="but">Основная</a>
                        <a href="#" class="btn__secondary">Дополнительная</a>
                        <a href="new.php" class="btn__secondary">Публикации</a>
                </div>
            </div> -->

            <aside class="menu__box">
                    <div class="home__menu">
                        <div class="items__akk">
                            <div class="box__akk">
                                <div class="photo__akk"></div>
                                <h3>Name-User</h3>
                            </div>
                        </div>
                        <div class="items__nav__menu">
                            <a href="new.php" class="item__h-menu">
                                <div href="bs.html" class="ico__bhm ico__home2"></div>
                                <h3>Главная</h3>
                            </a>
                            <a href="new.php" class="item__h-menu">
                                <div href="bs.html" class="ico__bhm ico__new2"></div>
                                <h3>Публикации</h3>
                            </a>
                            <a class="item__h-menu">
                                <div href="bs.html" class="ico__bhm ico__collection"></div>
                                <h3>Подборки</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box__help">
                        <h3>Поддержать разработчиков</h3>
                        <a class="items__help">
                            
                            Подробней
                            <div href="bs.html" class="ico__bhm ico__help"></div>
                        </a>
                        
                    </div>
            </aside>

            <main class="content">
                <h1>НОВОЕ</h1>

                <div class="box__news">
                    
                </div>

            </main>
            
            
        </div>
        
    </div>

    <?php require "blocks/footer.php" ?>
    <script src="js/behaviors.js"></script>
</body>
</html>

