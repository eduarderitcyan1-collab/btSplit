<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="style/header.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Контакты</title>
  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <div class="topHeader">
          <div class="location">
            <img src="storage/svg/Vector.svg" />
            Анапа
          </div>
          <div class="adress">г. Анапа, ул. Улица, 23</div>
          <div class="rating">
            <a href="#" class="ratingItem">
              <img src="storage/svg/yandex.svg" />
            </a>
            <a href="#" class="ratingItem">
              <img src="storage/svg/2gis.svg" />
            </a>
          </div>
        </div>
        <div class="centerHeader">
          <a href="/" class="logo">
            <img src="storage/svg/logo.svg" alt="Site Logo" />
          </a>
          <a href="tel:+78005553535" class="phone">+7 (800) 555-35-35</a>
          <div class="social">
            <a href="#" class="socialItem">
              <img src="/storage/svg/vk.svg" />
            </a>
            <a href="#" class="socialItem">
              <img src="/storage/svg/max.svg" />
            </a>
          </div>
          <div class="search-box">
            <input type="text" placeholder="Поиск" class="search-input" />
            <button class="search-btn" aria-label="Поиск">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11" cy="11" r="8" stroke="#2E3192" stroke-width="2" />
                <line x1="16.65" y1="16.65" x2="22" y2="22" stroke="#2E3192" stroke-width="2" />
              </svg>
            </button>
          </div>
          <div class="shopIcon">
            <a href="/wishlist/" class="iconItem">
              <img src="storage/svg/wish.svg" />
            </a>
            <a href="/comparison/" class="iconItem">
              <img src="storage/svg/comparison.svg" />
            </a>
            <a href="/cart/" class="iconItem">
              <img src="storage/svg/cart.svg" />
            </a>
          </div>
        </div>
        <div class="bottomHeader">
          <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="menu" id="menu">
            <a href="/" class="menuItem">Главная</a>
            <a href="/katalog/" class="menuItem">Каталог</a>
            <a href="/uslugi/" class="menuItem">Услуги</a>
            <a href="/o-kompanii/" class="menuItem">О компании</a>
            <a href="/dostavka-i-oplata/" class="menuItem">Доставка и оплата</a>
            <a href="/blog/" class="menuItem">Блог</a>
            <a href="/kontakty/" class="menuItem">Контакты</a>
          </div>
        </div>
      </div>
    </header>
    <main class="page">
      <div class="container contacts">
        <div class="contactsContent">
          <h1 class="pageTitle">Контакты</h1>
          <p class="mainText">
            В нашем ассортименте – более 200 самых разнообразных моделей климатического оборудования от ведущих мировых производителей
          </p>
          <a href="tel:+78005553535" class="phone">+7 (800) 555-35-35</a>
          <a href="mail:test@mail.ru" class="mail">test@mail.ru</a>
          <div class="social">
            <a href="#" class="socialItem">
              <img src="/storage/svg/vk.svg" />
            </a>
            <a href="#" class="socialItem">
              <img src="/storage/svg/max.svg" />
            </a>
          </div>
          <div class="adress">г. Анапа, ул. Улица, 23</div>
          <div class="rating">
            <a href="#" class="ratingItem">
              <img src="storage/svg/yandex.svg" />
            </a>
            <a href="#" class="ratingItem">
              <img src="storage/svg/2gis.svg" />
            </a>
          </div>
        </div>
        <iframe
          src="https://yandex.ru/map-widget/v1/?um=constructor%3A47c3bf84e9a9b8456b4350ca9f770e0521ba2e58f2e848432f3f9d4aaa4281e6&amp;source=constructor"
          width="500"
          height="400"
          frameborder="0"
        ></iframe>
      </div>
    </main>
    <footer class="site-footer">
      <div class="container">
        <div class="footerContent">
          <div class="footerWrapper">
            <a href="/" class="logo">
              <img src="storage/svg/logo.svg" alt="Site Logo" />
            </a>
            <div class="copyright">
              © Copyright domain.ru -
              <span id="year"></span>
              год
            </div>
            <p class="mainText">
              В нашем ассортименте – более 200 самых разнообразных моделей климатического оборудования от ведущих мировых производителей.
            </p>
            <a href="#" class="button" id="bid">Задать вопрос</a>
          </div>
          <div class="menu" id="menu">
            <a href="/" class="menuItem">Главная</a>
            <a href="/katalog/" class="menuItem">Каталог</a>
            <a href="/uslugi/" class="menuItem">Услуги</a>
            <a href="/o-kompanii/" class="menuItem">О компании</a>
            <a href="/dostavka-i-oplata/" class="menuItem">Доставка и оплата</a>
            <a href="/blog/" class="menuItem">Блог</a>
            <a href="/kontakty/" class="menuItem">Контакты</a>
          </div>
          <div class="footerWrapper">
            <a href="tel:+78005553535" class="phone">+7 (800) 555-35-35</a>
            <a href="mail:test@mail.ru" class="mail">test@mail.ru</a>
            <div class="social">
              <a href="#" class="socialItem">
                <img src="/storage/svg/vk.svg" />
              </a>
              <a href="#" class="socialItem">
                <img src="/storage/svg/max.svg" />
              </a>
            </div>
            <div class="adress">г. Анапа, ул. Улица, 23</div>
            <div class="rating">
              <a href="#" class="ratingItem">
                <img src="storage/svg/yandex.svg" />
              </a>
              <a href="#" class="ratingItem">
                <img src="storage/svg/2gis.svg" />
              </a>
            </div>
          </div>
        </div>
        <hr />
        <div class="container legalInfo">
          <a href="/privacy-policy/" class="info">Политика конфиденциальности</a>
          <a href="/personal-data/" class="info">Согласие на обработку персональных данных</a>
          <a href="//sumnikoff.ru/" class="info" target="_blank">Создание и продвижение сайтов Sumnikoff IT Group</a>
        </div>
      </div>
    </footer>
    <script src="js/burger.js"></script>
    <script src="js/mask.js"></script>
    <script src="js\accordion.js"></script>
    <script src="js\yearFooter.js.js"></script>
  </body>
</html>
