<?php

namespace Gevman\OwlCarousel;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class OwlCarousel extends Widget
{
    /** @var array */
    public $elements;
    /** @var array */
    public $config = [];

    public function init()
    {
        parent::init();
        $this->view->registerAssetBundle(OwlMainAsset::class);
        $this->view->registerJs(sprintf("$('#%s').owlCarousel(%s);", $this->id, Json::encode($this->config)));
    }

    public function run()
    {
        return Html::tag('div', implode('', $this->elements), ['id' => $this->id, 'class' => 'owl-carousel owl-theme']);
    }
}