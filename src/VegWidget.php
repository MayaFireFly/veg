<?php
namespace app\components;

use yii\base\Widget;

class VegWidget extends Widget
{   
    public function init()
    {
        parent::init();       
    }

    public function run()
    {
        return "<div class='tiny-class'>Next, use our Get Started docs to setup Tiny!</div>";
    }
}