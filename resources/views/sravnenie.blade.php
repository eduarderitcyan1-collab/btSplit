<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Сравнение товаров</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container comparison">
            <h1 class="pageTitle">Сравнение товаров</h1>
            <div class="comparisonWrapper">
                <div class="comparisonItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="productChar">
                        <div class="charItem">
                            <div class="charName">Страна производства</div>
                            <div class="charVal">Китай</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Площадь покрытия</div>
                            <div class="charVal">27 м2</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Холод, кВт/ч</div>
                            <div class="charVal">2.7</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Компрессор</div>
                            <div class="charVal">Инвертор</div>
                        </div>
                    </div>
                </div>
                <div class="comparisonItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="productChar">
                        <div class="charItem">
                            <div class="charName">Страна производства</div>
                            <div class="charVal">Китай</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Площадь покрытия</div>
                            <div class="charVal">27 м2</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Холод, кВт/ч</div>
                            <div class="charVal">2.7</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Компрессор</div>
                            <div class="charVal">Инвертор</div>
                        </div>
                    </div>
                </div>
                <div class="comparisonItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="productChar">
                        <div class="charItem">
                            <div class="charName">Страна производства</div>
                            <div class="charVal">Китай</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Площадь покрытия</div>
                            <div class="charVal">27 м2</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Холод, кВт/ч</div>
                            <div class="charVal">2.7</div>
                        </div>
                        <div class="charItem">
                            <div class="charName">Компрессор</div>
                            <div class="charVal">Инвертор</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
