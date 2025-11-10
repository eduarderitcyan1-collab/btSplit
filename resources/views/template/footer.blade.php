<footer class="site-footer">
    <div class="container">
        <div class="footerContent">
            <div class="footerWrapper">
                <a href="/" class="logo">
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="Site Logo" />
                </a>
                <div class="copyright">
                    © Copyright domain.ru -
                    <span id="year"></span>
                    год
                </div>
                <p class="mainText">
                    В нашем ассортименте – более 200 самых разнообразных моделей климатического оборудования от ведущих
                    мировых производителей.
                </p>
                <a href="#" class="button" id="bid">Задать вопрос</a>
            </div>
            <div class="menu" id="menu">
                <a href="/" class="menuItem">Главная</a>
                <a href="{{ route('catalog') }}" class="menuItem">Каталог</a>
                <a href="{{ route('service') }}" class="menuItem">Услуги</a>
                <a href="{{ route('about') }}" class="menuItem">О компании</a>
                <a href="{{ route('dostavka-i-oplata') }}" class="menuItem">Доставка и оплата</a>
                <a href="{{ route('blog') }}" class="menuItem">Блог</a>
                <a href="{{ route('contacts') }}" class="menuItem">Контакты</a>
            </div>
            <div class="footerWrapper">
                <a href="tel:+78005553535" class="phone">+7 (800) 555-35-35</a>
                <a href="mail:test@mail.ru" class="mail">test@mail.ru</a>
                <div class="social">
                    <a href="#" class="socialItem">
                        <img src="{{ asset('images/svg/vk.svg') }}" />
                    </a>
                    <a href="#" class="socialItem">
                        <img src="{{ asset('images/svg/max.svg') }}" />
                    </a>
                </div>
                <div class="adress">г. Анапа, ул. Улица, 23</div>
                <div class="rating">
                    <a href="#" class="ratingItem">
                        <img src="{{ asset('images/svg/yandex.svg') }}" />
                    </a>
                    <a href="#" class="ratingItem">
                        <img src="{{ asset('images/svg/2gis.svg') }}" />
                    </a>
                </div>
            </div>
        </div>
        <hr />
        <div class="container legalInfo">
            <a href="/privacy-policy/" class="info">Политика конфиденциальности</a>
            <a href="/personal-data/" class="info">Согласие на обработку персональных данных</a>
            <a href="//sumnikoff.ru/" class="info" target="_blank">Создание и продвижение сайтов Sumnikoff IT
                Group</a>
        </div>
    </div>
</footer>
