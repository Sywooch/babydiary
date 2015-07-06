<?php
/**
 * Created by PhpStorm.
 * User: Tatyana
 * Date: 06.07.2015
 * Time: 22:56
 */
namespace app\assets;

use yii\web\AssetBundle;

class SignUpAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/app/models/signup.js',
        'js/app/views/signup-view.js',
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}