<?php

use dosamigos\switchinput\SwitchRadio;
use yii\web\JsExpression;

/* @var $this \yii\web\View */
/* @var $model tests\models\Model */
?>

<?= SwitchRadio::widget([
    'model' => $model,
    'attribute' => 'test',
    'items' => ['item1', 'item2', 'item3'],
]) ?>

<?= SwitchRadio::widget([
    'name' => 'test',
    'items' => ['item1', 'item2', 'item3'],
]) ?>

<?= SwitchRadio::widget([
    'name' => 'test',
    'items' => [
        [
            'label' => 'item1',
            'value' => 10,
            'options' => [],
            'labelOptions' => [],
        ],
        [
            'label' => 'item2',
            'value' => 20,
            'options' => [],
            'labelOptions' => [],
        ],
        [
            'label' => 'item3',
            'value' => 30,
            'options' => [],
            'labelOptions' => [],
        ],
    ],
]) ?>

<?= SwitchRadio::widget([
    'name' => 'test',
    'items' => ['item1', 'item2', 'item3'],
    'clientEvents' => [
        'test' => new JsExpression('function () { }'),
    ],
]) ?>
