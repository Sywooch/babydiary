<?php
/**
 * Created by PhpStorm.
 * User: Tatyana
 * Date: 06.07.2015
 * Time: 22:56
 */
namespace app\assets;

use yii\web\AssetBundle;

class DiaryAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/app/models/diary-common.js',
        'js/app/views/diary-common-view.js',
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}