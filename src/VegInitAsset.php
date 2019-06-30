<?php
namespace maya\veg;

use yii\web\AssetBundle;

class VegInitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/maya/veg/src';
    public $css = [        
    ];
    public $js = [
        'tinyinit.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',        
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_BEGIN,
    ];
}