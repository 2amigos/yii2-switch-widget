Bootstrap Switch Widget for Yii2
================================

Renders a [Bootstrap Toggle Switch plugin](http://www.bootstrap-switch.org/) widget.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "2amigos/yii2-switch-widget" "*"
```
or add

```json
"2amigos/yii2-switch-widget" : "*"
```

to the require section of your application's `composer.json` file.

Usage
-----
The widget comes in two flavors: 

- SwitchBox 
- SwitchRadio 

**SwitchBox**  

This widget renders a Bootstrap Toggle Switch Checkbox input control. Best suitable for attributes with boolean states (on|off, true|false, 1|0) when used with model.

***Example of use with a form***

```
<?php
use dosamigos\switchinput\SwitchBox;
?>

<?= $form->field($model, 'validated')->widget(SwitchBox::className(),[
	'clientOptions' => [
		'size' => 'large',
		'onColor' => 'success',
		'offColor' => 'danger'
	]
]);?>
```  
***Example of use without a model***

```
<?= \dosamigos\switchinput\SwitchBox::widget([
	'name' => 'Test',
	'checked' => true,
	'clientOptions' => [
		'size' => 'large',
		'onColor' => 'success',
		'offColor' => 'danger'
	]
]);?>
```
**SwitchRadio**  

This widget renders a Bootstrap Toggle Switch Checkbox radio list control. Best suitable for attributes with multiple states when used with a model.

***Example of use with a form***  

```
<?php
use dosamigos\switchinput\SwitchRadio;
?>
<?= $form->field($model, 'status')->widget(SwitchRadio::className(), [
	'items' => [
		20 => 'rejected',
		40 => 'approved',
		50 => 'on hold'
	],
]);?>
```  
***Example of use without a model***

```
<?= \dosamigos\switchinput\SwitchRadio::widget([
	'name' => 'shape',
	'inline' => false,
	'items' => [
		[
			'label' => 'best',
			'value' => 100,
			'options' => ['data-size' => 'mini']
		],
		20 => 'good',
		40 => 'superior',
		50 => 'master'
	],
	'labelOptions' => ['style' => 'font-size:16px']
]);?>
```

Further Information
-------------------
Please, check the [Bootstrap Toggle Switch site](http://www.bootstrap-switch.org/) documentation for further information about its configuration options. 


> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)  
<i>Web development has never been so fun!</i>  
[www.2amigos.us](http://www.2amigos.us)
