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
        $this->view->registerAssetBundle(Asset::class);
        $this->view->registerJs(sprintf("$('#%s').owlCarousel(%s);", $this->id, Json::encode($this->config)));
    }

    public function run()
    {
        $elements = [];
        foreach ($this->elements as $element) {
            $elements[] = Html::img(null, ['class' => 'owl-lazy', 'data' => ['src' => Yii::getAlias($element)]]);
        }
        return Html::tag('div', implode('', $elements), ['id' => $this->id, 'class' => 'owl-carousel owl-theme']);
    }
}