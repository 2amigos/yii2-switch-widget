<?php

use dosamigos\switchinput\SwitchBox;
use yii\web\JsExpression;

/* @var $this \yii\web\View */
/* @var $model tests\models\Model */
?>

<?= SwitchBox::widget([
    'model' => $model,
    'attribute' => 'test',
]) ?>

<?= SwitchBox::widget([
    'name' => 'test',
]) ?>

<?= SwitchBox::widget([
    'name' => 'test',
    'clientEvents' => [
        'test' => new JsExpression('function () { }'),
    ],
]) ?>
