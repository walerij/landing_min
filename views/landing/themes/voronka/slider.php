<div class="row">
    <h1>Слайдер</h1>
</div>
<div class="row">
    <div id="testCarousel" class="carousel slide" data-ride="carousel">
        <!-- Индикаторы карусели -->

        <ol class="carousel-indicators">
            <!-- Перейти к слайду №0 с помощью соответствующего атрибута с индексом data-slide-to="0" -->
            <li data-target="#testCarousel" data-slide-to="0" class="active"></li>
            <!-- Перейти к слайду №1 с помощью соответствующего индекса data-slide-to="1" -->
            <li data-target="#testCarousel" data-slide-to="1"></li>
            <!-- Перейти к слайду №1 с помощью соответствующего индекса data-slide-to="2" -->
            <li data-target="#testCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Слайды карусели -->
        <div class="carousel-inner">
            <!-- Слайд 1 -->
            <div class="item active">
                <img src="/images/voronka_slider/slider_fon.png" alt="fonchik">
                <div class="carousel-caption">
                    <img src="https://www.videosharp.info/users/791/avatar/791_avatar_1.jpg" alt="avatarka" class="avatarka">
                    <h3>Жданов Валерий </h3>
                    <p>очень понравился урок, всё сделал, правда была какая-то проблема,
                        из - за которой нерефакторенный код не работал, а перенес поиск еmail в
                        нужный класс, доработал урок до конца - всё стало как по маслу</p>
                </div>
            </div>

            <!-- Слайд 2 -->
            <div class="item">
                <img src="img/slider_fon.png" alt="fonchik">
                <div class="carousel-caption">
                    <img src="https://www.videosharp.info/users/7119/avatar/7119_avatar_1.jpg" alt="avatarka" class="avatarka">
                    <h3>Новопашин Владимир </h3>
                    <p>Отличный курс, освоид его за день, и написал несколько приложений на Андроид</p>
                </div>
            </div>
            <!-- Слайд 3 -->
            <div class="item">
                <img src="img/slider_fon.png" alt="fonchik">
                <div class="carousel-caption">
                    <img src="https://www.videosharp.info/users/10558/avatar/10558_avatar_1.png" alt="avatarka" class="avatarka">
                    <h3>Иван Воронин </h3>
                    <p>Пройдя уидеокрус "Мультиязычное меню на JavaScript", я:
                        1. научился работе с API Яндекс Переводчика.
                        2. понравилась краткость изложения уроков.
                        3. добавил асинхронность загрузки перевода пунктов меню, динамическое изменение значения атрибута lang в теге html.
                    </p>

                </div>
            </div>

            <!-- Навигация карусели (следующий или предыдущий слайд) -->
            <!-- Кнопка, переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
            <a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <!-- Кнопка, переход на следующий слайд с помощью атрибута data-slide="next" -->
            <a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <div class="row">
        <h1>Выберите свой вариант</h1>
        <div class="price_style col-lg-3 col-lg-offset-1  col-md-3 col-md-offset-1  col-sm-3 col-sm-offset-1  col-xs-3 col-xs-offset-1 ">
            <h3> Цена 1</h3>
            <div class="bg-primary">
                <h4>360 руб</h4>
            </div>
            <h4>на 5 дней</h4>
            <h4>Курс 1</h4>
            <h4></h4>
        </div>

        <div class="col-lg-3 col-lg-offset-1  col-md-3 col-md-offset-1  col-sm-3 col-sm-offset-1  col-xs-3 col-xs-offset-1  price_style">
            <h3> Цена 2</h3>
            <div class="bg-primary">
                <h4>1000 руб</h4>
            </div>
            <h4>15 дней</h4>
            <h4>Курс 1</h4>
            <h4>Крус 'Мультиязычное меню JS' в подарок </h4>
        </div>

        <div class="col-lg-3 col-lg-offset-1  col-md-3 col-md-offset-1  col-sm-3 col-sm-offset-1  col-xs-3 col-xs-offset-1 price_style">
            <h3> Цена 3</h3>
            <div class="bg-primary">
                <h4>2000 руб</h4>
            </div>
            <h4>30 дней</h4>
            <h4>Курс 1</h4>
            <h4>Крус 'EF' в подарок </h4>
        </div>

    </div>
    <div class="row">
        <a class="btn btn-success" href="#" title="Подписка"><h2>Подписаться</h2></a>
    </div>

</div>