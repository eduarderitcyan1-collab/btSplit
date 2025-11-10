<div class="container contacts">
    <div class="contactsContent">
        @if (request()->routeIs('contacts'))
            <h1 class="pageTitle">Контакты</h1>
        @else
            <h2 class="pageTitle">Контакты</h2>
        @endif
        <p class="mainText">
            В нашем ассортименте – более 200 самых разнообразных моделей климатического оборудования от ведущих
            мировых производителей
        </p>
        <a href="tel:+78005553535" class="phone">+7 (800) 555-35-35</a>
        <a href="mail:test@mail.ru" class="mail">test@mail.ru</a>
        <div class="social">
            <a href="#" class="socialItem">
                <img src="{{ asset('images/svg/vk.svg') }}" />
            </a>
            <a href="#" class="socialItem">
                <img src="{{ asset('images/svg/max.svg') }}" />
            </a>
        </div>
        <div class="adress">г. Анапа, ул. Улица, 23</div>
        <div class="rating">
            <a href="#" class="ratingItem">
                <img src="{{ asset('images/svg/yandex.svg') }}" />
            </a>
            <a href="#" class="ratingItem">
                <img src="{{ asset('images/svg/2gis.svg') }}" />
            </a>
        </div>
    </div>
    <iframe
        src="https://yandex.ru/map-widget/v1/?um=constructor%3A47c3bf84e9a9b8456b4350ca9f770e0521ba2e58f2e848432f3f9d4aaa4281e6&amp;source=constructor"
        width="500" height="400" frameborder="0"></iframe>
</div>
