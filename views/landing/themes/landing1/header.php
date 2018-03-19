 <?php
 use yii\helpers\Html;
 use yii\bootstrap\ActiveForm;
 use yii\captcha\Captcha;
 ?>

<div class="jumbotron"
     style="background-image:  url(@app/views/themes/<?=$landing->theme;?>/logo1.png)" >
    
        <h1><?=$landing->landing;?></h1>

        <p class="lead" style="background-image:  url('/views/landing/themes/<?=$landing->theme;?>/logo1.png')" ><?=$landing->landing_info;?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Подробнее</a></p>
    </div>
