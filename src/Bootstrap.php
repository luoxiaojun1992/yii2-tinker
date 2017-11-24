<?php

namespace Yii2Tinker;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 *
 * @author Roy <luoxiaojun1992@sina.cn>
 * @since 2.0
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\console\Application) {
            $app->controllerMap['tinker'] = '\Yii2Tinker\TinkerController';
        }
    }
}
