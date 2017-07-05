<?php
/**
 * @link https://github.com/2amigos/yii2-switch-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests;

use dosamigos\switchinput\SwitchRadio;
use tests\models\Model;
use Yii;

/**
 * SwitchRadioTest
 */
class SwitchRadioTest extends \PHPUnit_Framework_TestCase
{
    public function testWidget()
    {
        $model = new Model();
        $view = Yii::$app->getView();
        $content = $view->render('//switch-radio', ['model' => $model]);
        $actual = $view->render('//layouts/main', ['content' => $content]);
        $expected = file_get_contents(__DIR__ . '/data/test-switch-radio.bin');
        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \yii\base\InvalidConfigException
     */
    public function testWidgetExceptionIsRaisedWhenItemsAreEmpty()
    {
        SwitchRadio::begin(['name' => 'test']);
    }
}
