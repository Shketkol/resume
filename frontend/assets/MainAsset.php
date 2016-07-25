<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'source/css/style.css',
    ];
    public $js = [
        'source/js/js.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}