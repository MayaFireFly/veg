<?php
namespace maya\veg;

use yii\web\AssetBundle;

class VegAsset extends AssetBundle
{
    public $sourcePath = '@vendor/maya/veg/src';
    public $css = [        
    ];
    public $js = [
        'https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];
}