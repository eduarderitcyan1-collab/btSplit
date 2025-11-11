<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Избранное</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])

</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container wishlist">
            <h1 class="pageTitle">Избранное</h1>
            <div class="wishlistWrapper">
                <a href="{{ route('single-product') }}" class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <div class="button">
                            Подробнее
                        </div>
                        <div class="addToWish active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 40 36"
                                fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="{{ route('single-product') }}" class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <div class="button">
                            Подробнее
                        </div>
                        <div class="addToWish active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 40 36"
                                fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="{{ route('single-product') }}" class="productItem">
                    <img src="{{ asset('images\41df05ebf329657fedbe7debe007d37b4184018f.png') }}" class="productIMG"
                        alt="Product image" />
                    <div class="productTitle">Кондиционер Ballu BSNI-10HN8</div>
                    <div class="priceWrapper">
                        <div class="salePrice">67 990 ₽</div>
                        <s class="oldPrice">67 990 ₽</s>
                    </div>
                    <div class="buttonWrapper">
                        <div class="button">
                            Подробнее
                        </div>
                        <div class="addToWish active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 40 36"
                                fill="none">
                                <path
                                    d="M28.8799 1C34.4525 1 39 5.59324 39 11.3057C39 13.6049 38.6376 15.7269 38.0078 17.6953L38.0059 17.7021C36.4961 22.5332 33.4026 26.4248 30.0664 29.3242C26.7256 32.2277 23.197 34.0868 20.915 34.8721L20.9043 34.876C20.7058 34.9468 20.3776 35 20 35C19.6224 35 19.2942 34.9468 19.0957 34.876L19.085 34.8721C16.803 34.0868 13.2744 32.2277 9.93359 29.3242C6.59741 26.4248 3.50387 22.5332 1.99414 17.7021L1.99219 17.6953L1.76855 16.9502C1.27722 15.1939 1 13.3175 1 11.3057C1 5.59324 5.54755 1 11.1201 1C14.4055 1.00004 17.3543 2.61484 19.1963 5.10449L20 6.19141L20.8037 5.10449C22.6457 2.61484 25.5945 1.00004 28.8799 1Z"
                                    stroke="#2E3192" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
