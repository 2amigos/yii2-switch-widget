<?php

use dosamigos\switchinput\SwitchRadio;

/* @var $this \yii\web\View */
/* @var $model tests\models\Model */
?>

<?= SwitchRadio::widget([
    'model' => $model,
    'attribute' => 'test',
    'items' => ['item1', 'item2', 'item3'],
]) ?>
