<?php
namespace wheelform\assets;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class WheelformCpAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = "@wheelform/assets";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/cp-edit-form.js',
        ];

        $this->css = [
            'css/cp-wheelform.css',
        ];

        parent::init();
    }
}
