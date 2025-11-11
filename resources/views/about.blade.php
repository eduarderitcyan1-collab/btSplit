<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>О нас</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])

</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container about">
            <h1 class="pageTitle">О компании</h1>
            <img src="{{ asset('images/d8819ed8eb3da6bee245feb2a2874943f505c07d.webp') }}" class="aboutPhoto"
                alt="About" />
            <div class="aboutContent">
                <p class="mainText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="mainText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="mainText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
        <div class="container">
            <h2 class="subTitle">Бренды, с которыми мы работаем</h2>
            @include('template.marquee')
        </div>
        @include('template.review')
        <div class="container portfolio">
            <h2 class="subTitle">Портфолио</h2>
            <div class="porfolioWrapper">
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
            </div>
        </div>
        <div class="container certificate">
            <h2 class="subTitle">Сертификаты и лицензии</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/image59.jpg') }}" alt="Сертификат" /></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
