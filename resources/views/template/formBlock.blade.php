<div class="container form">
    <div class="closeBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 54 54" fill="none">
            <path d="M5.05078 48.398L48.3997 5.05078" stroke="black" stroke-width="10.101" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M5.05078 5.05078L47.7168 47.7168" stroke="black" stroke-width="10.101" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </div>
    <div class="formWrapper">
        <h2 class="subTitle">Задать вопрос</h2>
        <p class="mainText">Укажите Ваши контактные данные, и наш специалист свяжется с вами для консультации
        </p>
        <form class="feedback">
            <input type="text" class="form-control recording-input" id="userName" name="name"
                placeholder="Ваше имя" required autocomplete="name" minlength="2" maxlength="50"
                pattern="[а-яёА-ЯЁa-zA-Z\s\-]+" title="Введите ваше имя (только буквы, пробелы и дефисы)">
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
