<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Корзина</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container">
            <h1 class="pageTitle">
                Корзина
                <span class="cartQuan">(2 товара)</span>
            </h1>
        </div>
        <div class="container cartWrapper">
            <div class="cartProduct">
                <div class="cartProductItem">
                    <img src="{{ asset('images\06ed71ac3cf7cca61ce3fd49d34ba5b5c612dd80.webp') }}" class="productIMG"
                        alt="Product Image" />
                    <div class="cartProductItemContent">
                        <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                        <div class="cartProductItemPrice">
                            <div class="counter">
                                <button class="minus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="2"
                                        viewBox="0 0 14 2" fill="none">
                                        <path d="M0.75 0.75H12.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <span class="value">1</span>
                                <button class="plus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 14 14" fill="none">
                                        <path d="M0.75 6.75H12.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.75 12.75V0.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="priceWrapper">
                                <div class="salePrice">67 990 ₽</div>
                                <s class="oldPrice">67 990 ₽</s>
                            </div>
                        </div>
                        <a href="#" class="removeProduct button">Удалить товар с корзины</a>
                    </div>
                </div>
                <div class="cartProductItem">
                    <img src="{{ asset('images\06ed71ac3cf7cca61ce3fd49d34ba5b5c612dd80.webp') }}" class="productIMG"
                        alt="Product Image" />
                    <div class="cartProductItemContent">
                        <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                        <div class="cartProductItemPrice">
                            <div class="counter">
                                <button class="minus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="2"
                                        viewBox="0 0 14 2" fill="none">
                                        <path d="M0.75 0.75H12.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <span class="value">1</span>
                                <button class="plus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 14 14" fill="none">
                                        <path d="M0.75 6.75H12.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.75 12.75V0.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="priceWrapper">
                                <div class="salePrice">67 990 ₽</div>
                                <s class="oldPrice">67 990 ₽</s>
                            </div>
                        </div>
                        <a href="#" class="removeProduct button">Удалить товар с корзины</a>
                    </div>
                </div>
                <div class="cartProductItem">
                    <img src="{{ asset('images\06ed71ac3cf7cca61ce3fd49d34ba5b5c612dd80.webp') }}" class="productIMG"
                        alt="Product Image" />
                    <div class="cartProductItemContent">
                        <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                        <div class="cartProductItemPrice">
                            <div class="counter">
                                <button class="minus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="2"
                                        viewBox="0 0 14 2" fill="none">
                                        <path d="M0.75 0.75H12.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <span class="value">1</span>
                                <button class="plus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 14 14" fill="none">
                                        <path d="M0.75 6.75H12.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.75 12.75V0.75" stroke="#252525" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="priceWrapper">
                                <div class="salePrice">67 990 ₽</div>
                                <s class="oldPrice">67 990 ₽</s>
                            </div>
                        </div>
                        <a href="#" class="removeProduct button">Удалить товар с корзины</a>
                    </div>
                </div>
            </div>
            <div class="cartDetails">
                <h2 class="subTitle">Детали заказа</h2>
                <div class="detailsWrapper">
                    <div class="detailsItem">
                        <div class="delailName">Товаров</div>
                        <div class="delailVal cartQuan"></div>
                    </div>
                    <div class="detailsItem">
                        <div class="delailName">Итого</div>
                        <div class="delailVal totalPrice"></div>
                    </div>
                </div>
                <a href="#" class="button">Оформить заказ</a>
            </div>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
