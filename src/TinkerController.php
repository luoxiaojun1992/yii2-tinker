<?php

namespace Yii2Tinker;

use \yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Roy <luoxiaojun1992@sina.cn>
 * @since 2.0
 */
class TinkerController extends Controller
{
    public function init()
    {
        require(__DIR__ . DIRECTORY_SEPARATOR . 'Functions.php');

        parent::init();
    }

    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {
        $_SERVER['argv'] = [];

        // And go!
        call_user_func(\Psy\bin());
    }
}
