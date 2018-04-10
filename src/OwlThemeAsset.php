<?php

namespace Gevman\OwlCarousel;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class OwlMainAsset extends AssetBundle
{
    public $sourcePath = '@bower/owl.carousel/dist';
    public $css = [
        'assets/owl.theme.default.css',
    ];
    public $depends = [
        OwlMainAsset::class
    ];
}