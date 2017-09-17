<?php

namespace den67rus\jqueryABigImage;

use yii\web\AssetBundle;

/**
 * Assets of jquery-abigimage.
 */
class ABigImageAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery-abigimage';

    public $css = [
        'abigimage.jquery.min.css',
    ];

    public $js = [
        'abigimage.jquery.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
