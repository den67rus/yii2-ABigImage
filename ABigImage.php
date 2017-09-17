<?php
namespace den67rus\jqueryABigImage;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

/**
 * This is widget wrapper of ABigImage jQuery https://github.com/makryl/ABigImage
 *
 * GitHub repository JS library: https://github.com/makryl/ABigImage
 * GitHub repository this widget: https://github.com/den67rus/yii2-abig-image
 *
 * For example:
 *
 * ```php
 * ABigImage::widget([
 *      'selector' => '.itemPhotos',
 *      'options' => [
 *           'duration' => 200,
 *           'slideWidth ' => 0,
 *           'zoomMax ' => 0,
 *      ],
 * ]);
 * ```
 * 
 * @author Sevostyanov Denis
 * @version 1.0.0
 */
class ABigImage extends Widget
{
    /**
     * @var string widget selector.
     */
    public $selector;

    /**
     * @var array jquery-abigimage widget options.
     */
    public $options = [];
    
    public function init()
    {
        parent::init();

	    ABigImageAsset::register($this->view);

        $options = Json::encode($this->options);
        
        $js = '$("' . $this->selector . '").abigimage(' . $options . ');';
        $this->view->registerJs($js, View::POS_READY);
    }
    
    public function run()
    {

    }
}
