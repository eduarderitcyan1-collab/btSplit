<header class="site-header">
    <div class="container">
        <div class="topHeader">
            <div class="location">
                <img src="{{ asset('images/svg/Vector.svg') }}" />
                Анапа
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
        <div class="centerHeader">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo/logo.svg') }}" alt="Site Logo" />
            </a>
            <a href="tel:+78005553535" class="phone">+7 (800) 555-35-35</a>
            <div class="social">
                <a href="#" class="socialItem">
                    <img src="{{ asset('images/svg/vk.svg') }}" />
                </a>
                <a href="#" class="socialItem">
                    <img src="{{ asset('images/svg/max.svg') }}" />
                </a>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Поиск" class="search-input" />
                <button class="search-btn" aria-label="Поиск">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="8" stroke="#2E3192" stroke-width="2" />
                        <line x1="16.65" y1="16.65" x2="22" y2="22" stroke="#2E3192"
                            stroke-width="2" />
                    </svg>
                </button>
            </div>
            <div class="shopIcon">
                <a href="{{ route('wishlist') }}" class="iconItem">
                    <img src="{{ asset('images/svg/wish.svg') }}" />
                </a>
                <a href="/comparison/" class="iconItem">
                    <img src="{{ asset('images/svg/comparison.svg') }}" />
                </a>
                <a href="/cart/" class="iconItem">
                    <img src="{{ asset('images/svg/cart.svg') }}" />
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
                <a href="{{ route('catalog') }}" class="menuItem">Каталог</a>
                <a href="{{ route('service') }}" class="menuItem">Услуги</a>
                <a href="{{ route('about') }}" class="menuItem">О компании</a>
                <a href="{{ route('dostavka-i-oplata') }}" class="menuItem">Доставка и оплата</a>
                <a href="{{ route('blog') }}" class="menuItem">Блог</a>
                <a href="{{ route('contacts') }}" class="menuItem">Контакты</a>
            </div>
        </div>
    </div>
</header>
