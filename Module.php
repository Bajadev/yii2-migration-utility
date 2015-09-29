<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/7/14
 * Time: 7:24 PM
 */
namespace bajadev\utility\migration;

/**
 * Class Module
 *
 * @package c006\utility\migration
 */
class Module extends \yii\base\Module
{

    /**
     *
     */
    const VERSION = '0.0.2-dev';

    /**
     * @var string
     */
    public $controllerNamespace = 'bajadev\utility\migration\controllers';


    /**
     *
     */
    public function init()
    {

        $path = '@vendor/bajadev/yii2-migration-utility/assets/c006-migration.js';
        \Yii::$app->assetManager->publish($path);
		
        parent::init();
    }


    /**
     * Override createController()
     *
     * @link https://github.com/yiisoft/yii2/issues/810
     * @link http://www.yiiframework.com/forum/index.php/topic/21884-module-and-url-management/
     */
    public function createController($route)
    {
        preg_match('/(default)/', $route, $match);
        if (isset($match[0]))
            return parent::createController($route);

        return parent::createController("{$this->defaultRoute}/{$route}");
    }

}
