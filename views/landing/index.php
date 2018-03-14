<?php
/* @var $this yii\web\View */

$this->title = 'Мой Лендинг';
?>
<?php foreach($landings as $landing){ ?>
<div class="site-index">

    <?php
   $this->beginContent('@app/views/landing/themes/'.$landing->theme.'/header.php',
                                           ['landing'=>$landing]); ?>

                                       ...child layout content here...

                                       <?php $this->endContent();
                                       ?>
<?php
   $this->beginContent('@app/views/landing/themes/'.$landing->theme.'/about.php',
                                           ['landing'=>$landing]); ?>

                                       ...child layout content here...

                                       <?php $this->endContent();
                                       ?>
</div>
<? } ?>