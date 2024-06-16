<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../include/head.php"); ?>
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

    <div id="intro3">

    </div>
    <div>
        <img src="/img/cat2.webp" class="cat2" alt="">
    </div>
    <div>
        <img src="/img/spider.webp" class="spider" alt="">
    </div>
    <div>
        <img src="/img/cat.webp" class="cat_thinking" alt="">
    </div>
    <div>
        <img src="/img/cat3.webp" class="cat3" alt="">
    </div>
    <?php require_once("../include/header.php"); ?>

    <?php require_once("../include/menu_mobile.php"); ?>
    <section class="foto">
        <div class="container">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="mySlides_img" src="/img/11.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="/img/12.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="/img/13.jpg" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </section>
    <section class="fancy">
        <div class="container">
            <div class="fancy_border">
                <p>Ученик спросил Мастера: — Насколько верны слова, что не в деньгах счастье? Тот ответил, что они верны
                    полностью. И доказать это просто. Ибо за деньги можно купить постель, но не сон; еду, но не аппетит;
                    лекарства, но не здоровье; слуг, но не друзей; женщин, но не любовь; жилище, но не домашний очаг;
                    развлечения, но не радость; образование, но не ум. И то, что названо, не исчерпывает список.</p>
            </div>
        </div>
    </section>
    <?php require_once("../include/footer.php"); ?>
    <?php require_once("../include/script.php"); ?>
</body>

</html>