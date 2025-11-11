<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Страница услуги</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container serviceBanner">
            <h1 class="pageTitle">Монтаж кондиционеров</h1>
            <img src="{{ asset('images/d8819ed8eb3da6bee245feb2a2874943f505c07d.webp') }}" class="servicePhoto"
                alt="Service Image" />
            <div class="serviceContent">
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
        <div class="container servicePrice">
            <div class="h2 subTitle">Прайс-лист услуг по монтажу кондиционеров</div>
            <div class="table">
                <div class="tableHeader">
                    <div class="tableHeaderWrapper">Наименование услуги</div>
                    <div class="tableHeaderWrapper">Цена услуги</div>
                </div>
                <div class="tableBody">
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                    <div class="tableRow">
                        <div class="tableRowTitle">Консультация и расчет оптимального места установки</div>
                        <div class="tableRowPrice">бесплатно</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container stages">
            <img src="{{ asset('images/d8819ed8eb3da6bee245feb2a2874943f505c07d.webp') }}" class="stagesPhoto"
                alt="Stage Image" />
            <h2 class="subTitle">Основные этапы монтажа настенного кондиционера</h2>
            <div class="stageContent">
                <ol class="mainText">
                    <li>
                        <div class="stageTitle">Выбор места установки</div>
                        <ul>
                            <li>Внутренний блок устанавливается на ровной стене в месте, где не будет прямых солнечных
                                лучей, источников тепла или пыли.</li>
                            <li>
                                Внешний блок — на прочной поверхности с хорошей вентиляцией, недалеко от внутреннего
                                блока, чтобы минимизировать длину трубопровода.
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="stageTitle">Подготовка проема и крепление несущих элементов</div>
                        <ul>
                            <li>Просверливаются отверстия для крепления внутреннего и наружного блоков.</li>
                            <li>Устанавливается кронштейн или крепёжная рама для внешнего блока.</li>
                        </ul>
                    </li>

                    <li>
                        <div class="stageTitle">Прокладка коммуникаций</div>
                        <ul>
                            <li>Трубопроводы (газовая и часто дренажная трубка), кабели и канал для дренажа проводят
                                через стену.</li>
                            <li>Трубы изолируются и защемляются для предотвращения утечек и теплопотерь.</li>
                        </ul>
                    </li>

                    <li>
                        <div class="stageTitle">Монтаж внутреннего блока</div>
                        <ul>
                            <li>Устанавливается на закреплённый кронштейн, проверяется уровень.</li>
                            <li>Подключается к трубопроводам и электросети.</li>
                        </ul>
                    </li>

                    <li>
                        <div class="stageTitle">Подключение внешнего блока</div>
                        <ul>
                            <li>Собирается и закрепляется на выбранной площадке.</li>
                            <li>Выполняется подключение коммуникаций.</li>
                        </ul>
                    </li>

                    <li>
                        <div class="stageTitle">Запуск и проверка</div>
                        <ul>
                            <li>Удаляется воздух из системы (вакуумирование).</li>
                            <li>Проверяется герметичность соединений и уровень хладагента.</li>
                            <li>Настроены режимы работы и проверяется эффективность.</li>
                        </ul>
                    </li>

                    <li>
                        <div class="stageTitle">Финальный осмотр и тестирование</div>
                        <ul>
                            <li>Проверка корректности работы, устранение возможных утечек.</li>
                            <li>Инструктаж пользователя о правильной эксплуатации.</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        <div class="container portfolio">
            <h2 class="subTitle">Наши работы</h2>
            <div class="porfolioWrapper">
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
                <img src="{{ asset('images/image60.webp') }}" class="porfolioPhoto" alt="Porfolio Item" />
            </div>
        </div>
        @include('template.formBlock')
        <div class="container accordion">
            <h2 class="subTitle">Часто задаваемые вопросы</h2>
            <div class="accordion-item active">
                <div class="accordion-title">Lorem ipsum</div>
                <div class="accordion-content" style="display: block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab
                    osjgflkd dkfbjkod tempor incididunt ut
                    lab osjgflkd dkfbjk
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title">Lorem ipsum</div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab
                    osjgflkd dkfbjkod tempor incididunt ut
                    lab osjgflkd dkfbjk
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title">Lorem ipsum</div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab
                    osjgflkd dkfbjkod tempor incididunt ut
                    lab osjgflkd dkfbjk
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title">Lorem ipsum</div>
                <div class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab
                    osjgflkd dkfbjkod tempor incididunt ut
                    lab osjgflkd dkfbjk
                </div>
            </div>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
