<?php

use dosamigos\switchinput\SwitchBox;

/* @var $this \yii\web\View */
/* @var $model tests\models\Model */
?>

<?= SwitchBox::widget([
    'model' => $model,
    'attribute' => 'test',
]) ?>
