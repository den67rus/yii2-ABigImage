yii2-abig-image
================================================================================

This is widget wrapper of ABigImage jQuery Plug-in https://github.com/makryl/ABigImage for Yii2.

##Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```
$ php composer.phar require den67rus/yii2-abig-image "~1.0.0"
```

or add
```
"den67rus/yii2-abig-image": "~1.0.0"
```

to the **require** section of your **composer.json** file.

##How use

Added following code to your view:

```php
...

use den67rus\jqueryABigImage\ABigImage;

ABigImage::widget([
    'selector' => '.itemPhotos',
    'options' => [
	   'duration' => 200,
	   'slideWidth ' => 0,
	   'zoomMax ' => 0,
    ],
]);

...
```

##Options of widget

| **Name**       | **Description**                                                                              |
|----------------|----------------------------------------------------------------------------------------------|
| $selector      | jQuery selector                                                                              |
| $options       | ABigImage options: http://aeqdev.com/tools/js/abigimage/                                   |

##License

yii2-abig-image is released under the Apache 2.0 License.
