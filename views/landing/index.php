<?php
/* @var $this yii\web\View */

$this->title = 'Мой Лендинг';
?>
<?php foreach($landings as $landing){ ?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?=$landing->landing;?></h1>

        <p class="lead"><?=$landing->landing_info;?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Подробнее</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Для кого пакет:</h2>

                <p>
                    <ul>
                        <?php foreach($landing->landingsaudithory as $audith) {?>
                        <li><?=$audith->audithory; ?></li>
                        <?} ?>
                    </ul>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Что Вы получите:</h2>

                <p>Много знаний по языку программирования. Готовый проект</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Используемые технологии</h2>

                <p>C#, ASP.NET MVC, Java, JavaScript, Pyton, PHP, Yii2, HTML&CSS </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Подробнее &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
<? } ?>