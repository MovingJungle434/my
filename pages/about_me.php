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

  <div id="intro2">
  </div>

  <?php require_once("../include/header.php"); ?>

  <?php require_once("../include/menu_mobile.php"); ?>

  <section class="about__me">
    <div class="container">

      <div class="about__me_img">
        <img class="about__me_img_first" src="/img/photo_2024-01-27_12-14-29.jpg" alt="">
      </div>

      <div class="about__me_div">
        <div>
          <h2 class="about__me_name">Имя:</h2>
          <p class="about__me_name2">Судоргин Гриша</p>
        </div>

        <div>
          <h2 class="about__me_age">Возраст:</h2>
          <p id="age">15 лет</p>
        </div>

        <script>
          const startDate = new Date('2009-02-15')
          function updateTimer() {
            const currentDate = new Date()
            const timeDifference = currentDate - startDate
            const years = Math.floor(timeDifference / (365 * 24 * 60 * 60 * 1000))
            const months = Math.floor((timeDifference % (365 * 24 * 60 * 60 * 1000)) / (30 * 24 * 60 * 60 * 1000))
            const timerElement = document.getElementById('age')
            timerElement.innerHTML = `${years} лет ${months} месяцев`
          }
          setInterval(updateTimer, 1000);
          updateTimer();
        </script>

        <div>
          <h2 class="about__me_me">Обо мне:</h2>
          <p class="about__me_me2">Мое хобби — разработка веб-сайтов. Я увлекаюсь созданием эстетически приятных и
            функциональных интерфейсов, а
            также программированием, чтобы делать сайты инновационными и удобными для пользователей. Мне нравится
            изучать
            новые технологии и применять их в своих проектах. Разработка веб-сайтов для меня не просто про код — это
            возможность выражать свою креативность и создавать цифровые пространства, которые приносят пользу и радость.
          </p>
          <img src="/img/photo_2024-01-27_17-41-19.jpg" class="about_me_me_img" alt="">
        </div>
      </div>
    </div>
  </section>

  <?php require_once("../include/footer.php"); ?>

  <?php require_once("../include/script.php"); ?>
</body>

</html>