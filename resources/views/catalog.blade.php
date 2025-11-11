<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Каталог</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container archiveBanner">
            <h1 class="pageTitle">Кондиционеры LG</h1>
            <h2 class="subTitle">Бренды, с которыми мы работаем</h2>
            @include('template.marquee')
        </div>
        <div class="container catalogWrapper">
            <a href="#" class="button filterButton">Фильтр</a>
            <form class="filter__form disable" action="#" method="get">
                <div class="filter__title">Фильтр</div>
                <a href="#" class="closeFilter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 54 54"
                        fill="none">
                        <path d="M5.05078 48.398L48.3997 5.05078" stroke="black" stroke-width="10.101"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.05078 5.05078L47.7168 47.7168" stroke="black" stroke-width="10.101"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <div class="filter__group">
                    <label class="filter__label">Цена</label>
                    <div class="filter__price">
                        <input type="number" name="min_price" class="filter__input" placeholder="100 ₽"
                            min="0" />
                        <span class="filter__separator">—</span>
                        <input type="number" name="max_price" class="filter__input" placeholder="1 000 ₽"
                            min="0" />
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Бренд
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Бренд 1</button>
                        <button type="button" class="filter__btn">Бренд 2</button>
                        <button type="button" class="filter__btn">Бренд 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Серия
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Серия 1</button>
                        <button type="button" class="filter__btn">Серия 2</button>
                        <button type="button" class="filter__btn">Серия 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Помещение
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Помещение 1</button>
                        <button type="button" class="filter__btn">Помещение 2</button>
                        <button type="button" class="filter__btn">Помещение 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Компрессор
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Компрессор 1</button>
                        <button type="button" class="filter__btn">Компрессор 2</button>
                        <button type="button" class="filter__btn">Компрессор 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Холод, кВт/ч
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Холод 1</button>
                        <button type="button" class="filter__btn">Холод 2</button>
                        <button type="button" class="filter__btn">Холод 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Страна производства
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Страна 1</button>
                        <button type="button" class="filter__btn">Страна 2</button>
                        <button type="button" class="filter__btn">Страна 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Цвет
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Цвет 1</button>
                        <button type="button" class="filter__btn">Цвет 2</button>
                        <button type="button" class="filter__btn">Цвет 3</button>
                    </div>
                </div>
                <div class="filter__group">
                    <label class="filter__label toggle">
                        Площадь покрытия
                        <span class="arrow">▼</span>
                    </label>
                    <div class="filter__buttons">
                        <button type="button" class="filter__btn">Площадь 1</button>
                        <button type="button" class="filter__btn">Площадь 2</button>
                        <button type="button" class="filter__btn">Площадь 3</button>
                    </div>
                </div>
                <div class="buttonWrapper">
                    <button type="reset" class="filter__apply button">Применить фильтр</button>
                    <button type="reset" class="filter__reset button">Сбросить фильтр</button>
                </div>
            </form>
            <div class="productsGrid">
                <div class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <a href="{{ route('single-product') }}" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M5.8947 19.975C5.39823 19.975 4.975 19.7982 4.625 19.4447C4.275 19.0912 4.1 18.6661 4.1 18.1697C4.1 17.6732 4.27677 17.25 4.6303 16.9C4.98385 16.55 5.40885 16.375 5.9053 16.375C6.40177 16.375 6.825 16.5518 7.175 16.9053C7.525 17.2589 7.7 17.6839 7.7 18.1803C7.7 18.6768 7.52323 19.1 7.1697 19.45C6.81615 19.8 6.39115 19.975 5.8947 19.975ZM15.8947 19.975C15.3982 19.975 14.975 19.7982 14.625 19.4447C14.275 19.0912 14.1 18.6661 14.1 18.1697C14.1 17.6732 14.2768 17.25 14.6303 16.9C14.9838 16.55 15.4088 16.375 15.9053 16.375C16.4018 16.375 16.825 16.5518 17.175 16.9053C17.525 17.2589 17.7 17.6839 17.7 18.1803C17.7 18.6768 17.5232 19.1 17.1697 19.45C16.8162 19.8 16.3912 19.975 15.8947 19.975ZM4.6 3.475L7.35 9.175H14.55L17.675 3.475H4.6ZM3.85 1.975H18.5768C18.9596 1.975 19.2508 2.15 19.4505 2.5C19.6502 2.85 19.65 3.2 19.45 3.55L16.075 9.625C15.8917 9.94167 15.6537 10.1958 15.361 10.3875C15.0684 10.5792 14.748 10.675 14.4 10.675H6.825L5.425 13.275H17.7V14.775H5.65C4.95 14.775 4.44583 14.5417 4.1375 14.075C3.82917 13.6083 3.83333 13.0833 4.15 12.5L5.75 9.55L1.95 1.5H0V0H2.925L3.85 1.975Z"
                                    fill="white" />
                            </svg>
                            В корзину
                        </a>
                        <a href="#" class="addToWish">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 40 36" fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <a href="{{ route('single-product') }}" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M5.8947 19.975C5.39823 19.975 4.975 19.7982 4.625 19.4447C4.275 19.0912 4.1 18.6661 4.1 18.1697C4.1 17.6732 4.27677 17.25 4.6303 16.9C4.98385 16.55 5.40885 16.375 5.9053 16.375C6.40177 16.375 6.825 16.5518 7.175 16.9053C7.525 17.2589 7.7 17.6839 7.7 18.1803C7.7 18.6768 7.52323 19.1 7.1697 19.45C6.81615 19.8 6.39115 19.975 5.8947 19.975ZM15.8947 19.975C15.3982 19.975 14.975 19.7982 14.625 19.4447C14.275 19.0912 14.1 18.6661 14.1 18.1697C14.1 17.6732 14.2768 17.25 14.6303 16.9C14.9838 16.55 15.4088 16.375 15.9053 16.375C16.4018 16.375 16.825 16.5518 17.175 16.9053C17.525 17.2589 17.7 17.6839 17.7 18.1803C17.7 18.6768 17.5232 19.1 17.1697 19.45C16.8162 19.8 16.3912 19.975 15.8947 19.975ZM4.6 3.475L7.35 9.175H14.55L17.675 3.475H4.6ZM3.85 1.975H18.5768C18.9596 1.975 19.2508 2.15 19.4505 2.5C19.6502 2.85 19.65 3.2 19.45 3.55L16.075 9.625C15.8917 9.94167 15.6537 10.1958 15.361 10.3875C15.0684 10.5792 14.748 10.675 14.4 10.675H6.825L5.425 13.275H17.7V14.775H5.65C4.95 14.775 4.44583 14.5417 4.1375 14.075C3.82917 13.6083 3.83333 13.0833 4.15 12.5L5.75 9.55L1.95 1.5H0V0H2.925L3.85 1.975Z"
                                    fill="white" />
                            </svg>
                            В корзину
                        </a>
                        <a href="#" class="addToWish">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 40 36" fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <a href="{{ route('single-product') }}" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M5.8947 19.975C5.39823 19.975 4.975 19.7982 4.625 19.4447C4.275 19.0912 4.1 18.6661 4.1 18.1697C4.1 17.6732 4.27677 17.25 4.6303 16.9C4.98385 16.55 5.40885 16.375 5.9053 16.375C6.40177 16.375 6.825 16.5518 7.175 16.9053C7.525 17.2589 7.7 17.6839 7.7 18.1803C7.7 18.6768 7.52323 19.1 7.1697 19.45C6.81615 19.8 6.39115 19.975 5.8947 19.975ZM15.8947 19.975C15.3982 19.975 14.975 19.7982 14.625 19.4447C14.275 19.0912 14.1 18.6661 14.1 18.1697C14.1 17.6732 14.2768 17.25 14.6303 16.9C14.9838 16.55 15.4088 16.375 15.9053 16.375C16.4018 16.375 16.825 16.5518 17.175 16.9053C17.525 17.2589 17.7 17.6839 17.7 18.1803C17.7 18.6768 17.5232 19.1 17.1697 19.45C16.8162 19.8 16.3912 19.975 15.8947 19.975ZM4.6 3.475L7.35 9.175H14.55L17.675 3.475H4.6ZM3.85 1.975H18.5768C18.9596 1.975 19.2508 2.15 19.4505 2.5C19.6502 2.85 19.65 3.2 19.45 3.55L16.075 9.625C15.8917 9.94167 15.6537 10.1958 15.361 10.3875C15.0684 10.5792 14.748 10.675 14.4 10.675H6.825L5.425 13.275H17.7V14.775H5.65C4.95 14.775 4.44583 14.5417 4.1375 14.075C3.82917 13.6083 3.83333 13.0833 4.15 12.5L5.75 9.55L1.95 1.5H0V0H2.925L3.85 1.975Z"
                                    fill="white" />
                            </svg>
                            В корзину
                        </a>
                        <a href="#" class="addToWish">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 40 36" fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <a href="{{ route('single-product') }}" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M5.8947 19.975C5.39823 19.975 4.975 19.7982 4.625 19.4447C4.275 19.0912 4.1 18.6661 4.1 18.1697C4.1 17.6732 4.27677 17.25 4.6303 16.9C4.98385 16.55 5.40885 16.375 5.9053 16.375C6.40177 16.375 6.825 16.5518 7.175 16.9053C7.525 17.2589 7.7 17.6839 7.7 18.1803C7.7 18.6768 7.52323 19.1 7.1697 19.45C6.81615 19.8 6.39115 19.975 5.8947 19.975ZM15.8947 19.975C15.3982 19.975 14.975 19.7982 14.625 19.4447C14.275 19.0912 14.1 18.6661 14.1 18.1697C14.1 17.6732 14.2768 17.25 14.6303 16.9C14.9838 16.55 15.4088 16.375 15.9053 16.375C16.4018 16.375 16.825 16.5518 17.175 16.9053C17.525 17.2589 17.7 17.6839 17.7 18.1803C17.7 18.6768 17.5232 19.1 17.1697 19.45C16.8162 19.8 16.3912 19.975 15.8947 19.975ZM4.6 3.475L7.35 9.175H14.55L17.675 3.475H4.6ZM3.85 1.975H18.5768C18.9596 1.975 19.2508 2.15 19.4505 2.5C19.6502 2.85 19.65 3.2 19.45 3.55L16.075 9.625C15.8917 9.94167 15.6537 10.1958 15.361 10.3875C15.0684 10.5792 14.748 10.675 14.4 10.675H6.825L5.425 13.275H17.7V14.775H5.65C4.95 14.775 4.44583 14.5417 4.1375 14.075C3.82917 13.6083 3.83333 13.0833 4.15 12.5L5.75 9.55L1.95 1.5H0V0H2.925L3.85 1.975Z"
                                    fill="white" />
                            </svg>
                            В корзину
                        </a>
                        <a href="#" class="addToWish">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 40 36" fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <a href="{{ route('single-product') }}" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M5.8947 19.975C5.39823 19.975 4.975 19.7982 4.625 19.4447C4.275 19.0912 4.1 18.6661 4.1 18.1697C4.1 17.6732 4.27677 17.25 4.6303 16.9C4.98385 16.55 5.40885 16.375 5.9053 16.375C6.40177 16.375 6.825 16.5518 7.175 16.9053C7.525 17.2589 7.7 17.6839 7.7 18.1803C7.7 18.6768 7.52323 19.1 7.1697 19.45C6.81615 19.8 6.39115 19.975 5.8947 19.975ZM15.8947 19.975C15.3982 19.975 14.975 19.7982 14.625 19.4447C14.275 19.0912 14.1 18.6661 14.1 18.1697C14.1 17.6732 14.2768 17.25 14.6303 16.9C14.9838 16.55 15.4088 16.375 15.9053 16.375C16.4018 16.375 16.825 16.5518 17.175 16.9053C17.525 17.2589 17.7 17.6839 17.7 18.1803C17.7 18.6768 17.5232 19.1 17.1697 19.45C16.8162 19.8 16.3912 19.975 15.8947 19.975ZM4.6 3.475L7.35 9.175H14.55L17.675 3.475H4.6ZM3.85 1.975H18.5768C18.9596 1.975 19.2508 2.15 19.4505 2.5C19.6502 2.85 19.65 3.2 19.45 3.55L16.075 9.625C15.8917 9.94167 15.6537 10.1958 15.361 10.3875C15.0684 10.5792 14.748 10.675 14.4 10.675H6.825L5.425 13.275H17.7V14.775H5.65C4.95 14.775 4.44583 14.5417 4.1375 14.075C3.82917 13.6083 3.83333 13.0833 4.15 12.5L5.75 9.55L1.95 1.5H0V0H2.925L3.85 1.975Z"
                                    fill="white" />
                            </svg>
                            В корзину
                        </a>
                        <a href="#" class="addToWish">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 40 36" fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <a href="{{ route('single-product') }}" class="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M5.8947 19.975C5.39823 19.975 4.975 19.7982 4.625 19.4447C4.275 19.0912 4.1 18.6661 4.1 18.1697C4.1 17.6732 4.27677 17.25 4.6303 16.9C4.98385 16.55 5.40885 16.375 5.9053 16.375C6.40177 16.375 6.825 16.5518 7.175 16.9053C7.525 17.2589 7.7 17.6839 7.7 18.1803C7.7 18.6768 7.52323 19.1 7.1697 19.45C6.81615 19.8 6.39115 19.975 5.8947 19.975ZM15.8947 19.975C15.3982 19.975 14.975 19.7982 14.625 19.4447C14.275 19.0912 14.1 18.6661 14.1 18.1697C14.1 17.6732 14.2768 17.25 14.6303 16.9C14.9838 16.55 15.4088 16.375 15.9053 16.375C16.4018 16.375 16.825 16.5518 17.175 16.9053C17.525 17.2589 17.7 17.6839 17.7 18.1803C17.7 18.6768 17.5232 19.1 17.1697 19.45C16.8162 19.8 16.3912 19.975 15.8947 19.975ZM4.6 3.475L7.35 9.175H14.55L17.675 3.475H4.6ZM3.85 1.975H18.5768C18.9596 1.975 19.2508 2.15 19.4505 2.5C19.6502 2.85 19.65 3.2 19.45 3.55L16.075 9.625C15.8917 9.94167 15.6537 10.1958 15.361 10.3875C15.0684 10.5792 14.748 10.675 14.4 10.675H6.825L5.425 13.275H17.7V14.775H5.65C4.95 14.775 4.44583 14.5417 4.1375 14.075C3.82917 13.6083 3.83333 13.0833 4.15 12.5L5.75 9.55L1.95 1.5H0V0H2.925L3.85 1.975Z"
                                    fill="white" />
                            </svg>
                            В корзину
                        </a>
                        <a href="#" class="addToWish">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 40 36" fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container archiveDesc">
            <h2 class="subTitle">Климатическая техника</h2>
            <div class="content">
                <p class="mainText">
                    Кондиционер — неотъемлемая часть комфортной жизни в условиях жаркого лета или холодной зимы.
                    Качественную сплит-систему для своего дома,
                    офиса или другого помещения можно найти и купить в интернет-магазине БТ-сплит.
                </p>
                <p class="mainText">
                    В наличии широкий выбор кондиционеров различной мощности и производительности от ведущих мировых
                    брендов. Мы гарантируем качество всей
                    климатической техники. Предоставляем полный комплекс услуг по доставке и установке сплит-систем.
                </p>
                <p class="mainText">
                    Наши цены на кондиционеры доступны каждому, а профессиональные консультанты всегда готовы помочь с
                    выбором и ответить на все интересующие
                    вопросы. Мы стремимся сделать вашу жизнь максимально комфортной.
                </p>
                <p class="mainText">
                    Заказать кондиционеры и сплит-системы в Новороссийске уже сегодня можно на сайте БТ-сплит с
                    бесплатной доставкой по городу. Работаем также
                    по Анапе, Геленджику и другим ближайшим населенным пунктам. С нашей стороны гарантируется
                    индивидуальный подход и лучшие условия для
                    продуктивного сотрудничества с каждым покупателям.
                </p>
            </div>
        </div>
        @include('template.formBlock')
        @include('template.contacts')
    </main>
    @include('template.footer')
</body>

</html>
