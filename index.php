<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("include/head.php"); ?>
</head>

<body>
    <div class="loader_main" id="loader">
        <svg style="position: absolute; width: 0; height: 0;">
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="12"></feGaussianBlur>
                <feColorMatrix values="0 0 0 0 0 
            0 0 0 0 0 
            0 0 0 0 0 
            0 0 0 48 -7"></feColorMatrix>
            </filter>
        </svg>
        <div class="loader"></div>
    </div>

    <div>
        <img src="img/icons8-love-48.png" alt="" class="love_icon_left">
    </div>

    <div>
        <img src="img/icons8-love-48.png" alt="" class="love_icon_right">
    </div>

    <div class="intro" id="intro">
    </div>

    <?php require_once("include/header.php"); ?>

    <?php require_once("include/menu_mobile.php");  ?>


    <section class="header_logo">
        <div class="container">
            <div class="header_logo_left">
                <h1>
                    Я готов поделиться моей уникальной историей. Зовут меня Гриша, и я
                    стремлюсь к постоянному росту и самовыражению.
                </h1>
            </div>
            <div class="header_cat_div">
                <img class="header_cat" src="img/cat.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="header_top">
        <div class="container">
            <p class="header_top_about_me">Я - энтузиаст веб-разработки, создаю свои виртуальные миры на экране. Мир
                кода для меня — это искусство и
                возможность делиться своим воображением. Вне дисплея я страстно увлечен здоровым образом жизни,
                регулярно посещаю спортивный зал, где тело становится храмом для моих идей и проектов. В этом увлечении
                я нахожу баланс и вдохновение. Кроме того, в моей жизни есть место для Евы — моей девушки и соавтора в
                создании собственной истории.</p>
            <div class="header_top_container">
                <div class="left">
                    <div>
                        <img clsas="header_top_left_img" src="img/photo_2024-01-23_11-57-26.jpg" alt="">
                    </div>
                    <p class="left_p" >Неудача – это просто возможность начать снова, но уже более мудро.</p>
                </div>

                <div class="right">
                    <img class="header_top_right_img" src="img/photo_2024-01-23_12-14-30.jpg" alt="">
                    <p class="right_p">
                        Наша судьба формируется из мелких незаметных решений, принимаемых по сто раз в день. <span>(Тони
                            Роббинс)</span>
                    </p>
                    <img class="header_top_right_img2" src="img/photo_2024-01-28_18-31-36.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <?php require_once("include/footer.php"); ?>


    <?php require_once("include/script.php"); ?>
</body>

</html>