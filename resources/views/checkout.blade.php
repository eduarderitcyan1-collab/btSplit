<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('template.favicon')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&family=Russo+One&display=swap"
        rel="stylesheet">
    <title>Оформление заказа</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/index.css', 'resources/css/about.css', 'resources/css/blog-main.css', 'resources/css/blog-page.css', 'resources/css/cart.css', 'resources/css/product-archive.css', 'resources/css/service-main.css', 'resources/css/service-page.css', 'resources/css/single-product.css', 'resources/css/sravnenie.css', 'resources/css/wishlist.css', 'resources/css/checkout.css', 'resources/js/app.js', 'resources/js/burger.js', 'resources/js/mask.js', 'resources/js/accordion.js', 'resources/js/yearFooter.js', 'resources/js/about.js', 'resources/js/cart.js', 'resources/js/addToWish-active.js', 'resources/js/filterToggle.js'])
</head>

<body>
    @include('template.header')
    <main class="page">
        <div class="container order">
            <h1 class="pageTitle">Оформление заказа</h1>
            <form class="checkout">
                <div class="personalInfo">
                    <div class="infoWrapper">
                        <input type="text" id="userName" name="name" placeholder="Ваше имя" required
                            autocomplete="name" minlength="2" maxlength="50" pattern="[а-яёА-ЯЁa-zA-Z\s\-]+"
                            title="Введите ваше имя (только буквы, пробелы и дефисы)">
                        <input type="text" id="sername" name="name" placeholder="Ваша фамилия" required
                            autocomplete="name" minlength="2" maxlength="50" pattern="[а-яёА-ЯЁa-zA-Z\s\-]+"
                            title="Введите вашу фамилию (только буквы, пробелы и дефисы)">
                        <input type="email" id="email" name="email" placeholder="Электронная почта" required>
                        <input type="text" class="form-control recording-input" id="userPhone" name="phone"
                            placeholder="Номер телефона" required autocomplete="tel" inputmode="numeric"
                            pattern="[0-9\s\(\)\-\+]*" minlength="18" maxlength="18"
                            title="Введите номер телефона в формате +7 (XXX) XXX-XX-XX">
                    </div>
                    <div class="infoWrapper">
                        <input type="text" id="city" name="city" placeholder="Ваш город" required
                            autocomplete="city" pattern="[а-яёА-ЯЁa-zA-Z\s\-]+"
                            title="Введите ваш город (только буквы, пробелы и дефисы)">
                        <input type="text" id="street" name="street" placeholder="Ваша улица" required
                            autocomplete="street" pattern="[а-яёА-ЯЁa-zA-Z\s\-]+"
                            title="Введите вашу улицу (только буквы, пробелы и дефисы)">
                        <input type="text" id="house" name="house" placeholder="Дом" required
                            inputmode="numeric" pattern="[0-9\s\(\)\-\+]*" title="Введите ваш номер дома">
                        <input type="text" id="flat" name="flat" placeholder="Квартира" required
                            inputmode="numeric" pattern="[0-9\s\(\)\-\+]*" title="Введите ваш номер квартиры">
                    </div>
                    <textarea id="note" name="note" rows="5" cols="33" placeholder="Комментарий к заказу"></textarea>
                    <div class="option">
                        <div class="optionBlock">
                            <div class="optionTitle subTitle">Способ доставки</div>
                            <label><input type="radio" name="delivery" checked> Курьером</label>
                            <label><input type="radio" name="delivery"> Самовывоз</label>
                        </div>
                        <div class="optionBlock">
                            <div class="optionTitle subTitle">Способ оплаты</div>
                            <label><input type="radio" name="payment" checked> Наличными при получении</label>
                            <label><input type="radio" name="payment"> Картой на сайте</label>
                        </div>
                        <div class="optionBlock">
                            <div class="optionTitle subTitle">Монтаж</div>
                            <label><input type="radio" name="install" checked> С монтажом</label>
                            <label><input type="radio" name="install"> Без монтажа</label>
                        </div>
                    </div>
                    <div class="agreements">
                        <label><input type="checkbox" required> Я согласен(-на) с политикой
                            конфиденциальности</label>
                        <label><input type="checkbox" required> Я ознакомился(-ась) с согласием на обработку
                            персональных
                            данных</label>
                    </div>
                </div>
                <div class="orderDetails">
                    <h2 class="subTitle">Детали заказа</h2>
                    <div class="detailsWrapper">
                        <div class="detailsItem">
                            <div class="delailName">Товаров</div>
                            <div class="delailVal orderQuan"></div>
                        </div>
                        <div class="detailsItem">
                            <div class="delailName">Сумма товаров</div>
                            <div class="delailVal summProduct">12 000 ₽</div>
                        </div>
                        <div class="detailsItem">
                            <div class="delailName">Итого</div>
                            <div class="delailVal totalPrice__order">10 000 ₽</div>
                        </div>
                    </div>
                    <button type="submit" class="button">Оформить заказ</button>
                </div>
            </form>
        </div>
    </main>
    @include('template.footer')
</body>

</html>
