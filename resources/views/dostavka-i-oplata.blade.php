<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Доставка и оплата</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/css/dostavka-i-oplata.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container deliveryPayment">
            <h1 class="pageTitle">Доставка и оплата</h1>
            <div class="delpayWrapper">
                <img src="{{ asset('images\a0b63f760e394b6c0ad91e99a99af6a7c2594c051.webp') }}" class="delpayPhoto"
                    alt="Доставка и оплата" />
                <div class="delpayContent">
                    <div class="delpayTitle">Доставка заказов по Анапе:</div>
                    <ul class="mainText">
                        <li>Курьером по г. Новороссийск на следующий день – БЕСПЛАТНО</li>
                        <li>Самовывоз на следующий день по адресу г. Анапа, Улица 23 – БЕСПЛАТНО</li>
                    </ul>
                    <div class="delpayTitle">Оплата заказов:</div>
                    <p class="mainText bal">Мы принимаем к оплате наличные и оплату наложенным платежом при получении.
                    </p>
                </div>
            </div>
        </div>
        @include('template.contacts')
    </main>
    @include('template.footer')
</body>

</html>
