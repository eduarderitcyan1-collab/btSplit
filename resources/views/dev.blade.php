<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>В разработке</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/css/checkout.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container dev">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" class="dev-logo" />
            <h1 class="pageTitle">Данный раздел находится в разработке</h1>
            <p class="mainText">Скоро здесь появятся новые возможности!</p>
            <a href="{{ route('welcome') }}" class="button">Главная</a>
            <div class="dev-animation">
                <div class="block block1"></div>
                <div class="block block2"></div>
                <div class="block block3"></div>
                <div class="block block4"></div>
            </div>
        </div>
    </main>
    @include('template.footer')
    <style>
        /* Общий фон и центрирование */
        .dev {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            height: 75vh;
        }

        .dev .dev-logo {
            width: 500px;
            animation: pulse 2s infinite;
        }

        .dev .button {
            width: 450px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .dev-animation {
            pointer-events: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .block {
            position: absolute;
            width: 30px;
            height: 30px;
            background: rgba(18, 61, 77, 0.3);
            border-radius: 5px;
            animation: move 6s linear infinite;
        }

        .block1 {
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .block2 {
            top: 30%;
            left: 50%;
            animation-delay: 2s;
        }

        .block3 {
            top: 60%;
            left: 70%;
            animation-delay: 4s;
        }

        .block4 {
            top: 80%;
            left: 40%;
            animation-delay: 1s;
        }

        @keyframes move {
            0% {
                transform: translate(0, 0) rotate(0deg);
                opacity: 0.7;
            }

            50% {
                transform: translate(200px, -150px) rotate(180deg);
                opacity: 0.4;
            }

            100% {
                transform: translate(-100px, 200px) rotate(360deg);
                opacity: 0.7;
            }
        }

        @media (max-width: 700px) {
            .dev {
                gap: 25px;
                height: 50vh;
            }

            .dev .dev-logo {
                width: 300px;
            }
        }

        </body></html>
