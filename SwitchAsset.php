<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\switchinput;

use yii\web\AssetBundle;

/**
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\yii2\widgets
 */
class SwitchAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-switch-widget/assets';

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    public function init()
    {
        $this->css[] = YII_DEBUG ? 'css/bootstrap-switch.css' : 'css/bootstrap-switch.min.css';
        $this->js[] = YII_DEBUG ? 'js/bootstrap-switch.js' : 'js/bootstrap-switch.min.js';
    }
} 