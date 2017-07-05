<?php
/**
 * @link https://github.com/2amigos/yii2-switch-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\switchinput;

use yii\web\AssetBundle;

/**
 * SwitchAsset
 *
 * @author Antonio Ramirez <hola@2amigos.us>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\yii2-switch-widget
 */
class SwitchAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-switch/dist';
    public $css = [
        'css/bootstrap3/bootstrap-switch.css',
    ];
    public $js = [
        'js/bootstrap-switch.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
