<header class="headerbehaviors">

    <div class="nav">
        <?php
        if(isset($_SERVER['HTTP_REFERER'])) {
            $urlback = htmlspecialchars($_SERVER['HTTP_REFERER']);
            echo "<a href='$urlback' class='ico__b ico__back'></a>"; 
        }
        ?>
        <a href="base.php" class="ico__b ico__home"></a>
    </div>
    <!-- <h1>Публикации</h1> -->
    <div class="nav">
        <a class="ico__b ico__menu" data-views="menu_view"></a>
        <!-- <div class="nav__btn">
            <a href="settings.php" class="ico__red ico__exit"></a>
            <h3>Выйти</h3>
        </div>
         -->
    </div>
    
</header>