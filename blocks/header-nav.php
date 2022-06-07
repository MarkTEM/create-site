<header class="headerbehaviors">

    <div class="nav">
        <?php
        if(isset($_SERVER['HTTP_REFERER'])) {
            $urlback = htmlspecialchars($_SERVER['HTTP_REFERER']);
            echo "<a href='$urlback' class='ico__b ico__back'></a>"; 
        }
        ?>

        <!-- <a href="base.php" class="ico__b ico__back"></a> -->
        <a href="base.php" class="ico__b ico__home"></a>
        <!-- <a href="base.php" class="ico__b2 ico__home"></a> -->
    </div>
    <!-- <h1>Публикации</h1> -->
    <div class="nav">
    <a href="#" class="ico__b ico__search"></a>
        <!-- <a href="settings.php" class="ico__b ico__setting"></a> -->
        <a class="ico__b ico__menu" data-views="menu_view"></a>
    </div>
    
</header>