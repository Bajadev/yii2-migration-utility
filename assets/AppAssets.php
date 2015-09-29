<?php

namespace boliver20\utility\migration\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class AppAssets
 * @package boliver20\utility\migration\assets
 * @author Bajadev <info@bajadev.hu>
 * @link http://bajadev.hu
 */
class AppAssets extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/c006/yii2-migration-utility/assets';

    /**
     * @inheritdoc
     */
    public $css = [
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'c006-migration.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\widgets\ActiveFormAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * @var array
     */
    public $jsOptions = [
        'position' => View::POS_END,
    ];

}
