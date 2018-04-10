# Owl Carousel 2 for Widget Yii2

## installation
using composer
```bash
gevman/yii2-owl-carousel
```


## example of usage

```php
echo \Gevman\OwlCarousel\OwlCarousel::widget([
    'elements' => [
        Html::img(null, ['class' => 'owl-lazy', 'data' => ['src' => Yii::getAlias('@web/images/image-1.jpg')]]),
        Html::img(null, ['class' => 'owl-lazy', 'data' => ['src' => Yii::getAlias('@web/images/image-2.jpg')]]),
        Html::img(null, ['class' => 'owl-lazy', 'data' => ['src' => Yii::getAlias('@web/images/image-3.jpg')]]),
    ],
    'config' => [
        'items' => 1,
        'lazyLoad' => true,
        'loop' => true,
        'dots' => true,
        'autoplay' => true,
    ]
]);
```

For more options check [Owl Carousel 2 Official Docs](https://owlcarousel2.github.io/OwlCarousel2/docs/api-options.html)