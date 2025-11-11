<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Блог</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container blog background">
            <h1 class="pageTitle">Полезные статьи</h1>
            <div class="blogContainer">
                <a href="{{ route('blogPage') }}" class="blogItem">
                    <img src="{{ asset('images\image60.webp') }}" class="blogPhoto" alt="Монтаж кондиционеров" />
                    <div class="blogContent">
                        <div class="blogTitle">Монтаж кондиционеров</div>
                        <p class="mainText bal">
                            Монтаж кондиционера — это ответственный процесс, требующий профессиональных знаний и
                            навыков, поскольку правильная установка
                            обеспечивает эффективность работы устройства, безопасность и долговечность.
                        </p>
                        <div class="button">Читать далее</div>
                    </div>
                </a>
                <a href="{{ route('blogPage') }}" class="blogItem">
                    <img src="{{ asset('images\image60.webp') }}" class="blogPhoto" alt="Монтаж кондиционеров" />
                    <div class="blogContent">
                        <div class="blogTitle">Монтаж кондиционеров</div>
                        <p class="mainText bal">
                            Монтаж кондиционера — это ответственный процесс, требующий профессиональных знаний и
                            навыков, поскольку правильная установка
                            обеспечивает эффективность работы устройства, безопасность и долговечность.
                        </p>
                        <div class="button">Читать далее</div>
                    </div>
                </a>
                <a href="{{ route('blogPage') }}" class="blogItem">
                    <img src="{{ asset('images\image60.webp') }}" class="blogPhoto" alt="Монтаж кондиционеров" />
                    <div class="blogContent">
                        <div class="blogTitle">Монтаж кондиционеров</div>
                        <p class="mainText bal">
                            Монтаж кондиционера — это ответственный процесс, требующий профессиональных знаний и
                            навыков, поскольку правильная установка
                            обеспечивает эффективность работы устройства, безопасность и долговечность.
                        </p>
                        <div class="button">Читать далее</div>
                    </div>
                </a>
                <a href="{{ route('blogPage') }}" class="blogItem">
                    <img src="{{ asset('images\image60.webp') }}" class="blogPhoto" alt="Монтаж кондиционеров" />
                    <div class="blogContent">
                        <div class="blogTitle">Монтаж кондиционеров</div>
                        <p class="mainText bal">
                            Монтаж кондиционера — это ответственный процесс, требующий профессиональных знаний и
                            навыков, поскольку правильная установка
                            обеспечивает эффективность работы устройства, безопасность и долговечность.
                        </p>
                        <div class="button">Читать далее</div>
                    </div>
                </a>
                <a href="{{ route('blogPage') }}" class="blogItem">
                    <img src="{{ asset('images\image60.webp') }}" class="blogPhoto" alt="Монтаж кондиционеров" />
                    <div class="blogContent">
                        <div class="blogTitle">Монтаж кондиционеров</div>
                        <p class="mainText bal">
                            Монтаж кондиционера — это ответственный процесс, требующий профессиональных знаний и
                            навыков, поскольку правильная установка
                            обеспечивает эффективность работы устройства, безопасность и долговечность.
                        </p>
                        <div class="button">Читать далее</div>
                    </div>
                </a>
                <a href="{{ route('blogPage') }}" class="blogItem">
                    <img src="{{ asset('images\image60.webp') }}" class="blogPhoto" alt="Монтаж кондиционеров" />
                    <div class="blogContent">
                        <div class="blogTitle">Монтаж кондиционеров</div>
                        <p class="mainText bal">
                            Монтаж кондиционера — это ответственный процесс, требующий профессиональных знаний и
                            навыков, поскольку правильная установка
                            обеспечивает эффективность работы устройства, безопасность и долговечность.
                        </p>
                        <div class="button">Читать далее</div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
