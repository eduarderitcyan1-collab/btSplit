<div class="container form">
    <div class="formWrapper">
        <h2 class="subTitle">Задать вопрос</h2>
        <p class="mainText">Укажите Ваши контактные данные, и наш специалист свяжется с вами для консультации
        </p>
        <form class="feedback">
            <input type="text" name="name" placeholder="Ваше имя" required />
            <input type="text" name="phone" placeholder="+7 (___) ___-__-__" required />
            <label class="personalData">
                <input type="checkbox" required />
                <div class="acceptText">
                    Я согласен на
                    <a href="/personal-data/" target="_blank">обработку персональных данных</a>
                </div>
            </label>
            <button type="submit" class="button">Отправить</button>
        </form>
    </div>
    <img src="{{ asset('images\06ed71ac3cf7cca61ce3fd49d34ba5b5c612dd80.webp') }}" class="FormPhoto"
        alt="Conditioner photo" />
</div>
