<?php
/**
 * Created by PhpStorm.
 * User: Tatyana
 * Date: 06.07.2015
 * Time: 22:56
 */
namespace app\assets;

use yii\web\AssetBundle;

class SignInAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/app/models/signin.js',
        'js/app/views/signin-view.js',
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}