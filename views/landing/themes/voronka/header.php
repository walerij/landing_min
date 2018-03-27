 <?php
 use yii\helpers\Html;
 use yii\bootstrap\ActiveForm;
 use yii\captcha\Captcha;
 ?>

 <div class="container">
     <div class="row">
         <div class="row">
             <div class="bg-success header" style='padding: 1em'><h3 class="text_header">
                     <img src="http://web-andryshka.ru/wp-content/uploads/2016/06/yii2-podklyuchenie-skripta-vo-vyushku.png" alt="logo" class="logo_png img-circle" />
                     <?=$landing->landing;?>
                 </h3>
             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9 about">
                     <H4><?=$landing->landing_info;?></H4>
                     <p>
                         Авторы:
                     </p>
                     <ul>
                         <li>
                             <i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;
                             ASP.NET MVC
                         </li>
                         <li>
                             <i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;
                             C#
                         </li>
                         <li>
                             <i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;
                             ООП
                         </li>
                         <li>
                             <i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;
                             HTML&CSS
                         </li>
                         <li> <i class="glyphicon glyphicon-ok text-success"></i>&nbsp;&nbsp;
                             Bootstrap
                         </li>
                     </ul>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                     <img src='https://www.videosharp.info/start/web/img/aspect.png' alt='no' width="120px"
                     >
                 </div>
             </div>
         </div>

     </div>
 </div>


