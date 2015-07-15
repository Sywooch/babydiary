<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/styles.css'
    ];
    public $js = [
        'js/vendor/jquery-2.1.4.min.js',
        'js/vendor/bootstrap.min.js',
        'js/vendor/underscore-min.js',
        'js/vendor/backbone.js',
        'js/vendor/backbone-validation.js',
        'js/vendor/backbone.stickit.js',
        'js/app/layout-helper.js',
        'js/app/ajax-helper.js',
        'js/app/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

